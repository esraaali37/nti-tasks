<?php 
namespace app\requests;

use app\models\User;
use app\helpers\Hash;

class RegisterRequest {
    private $first_name,$last_name ,$password,$password_confirmation,$email,$phone,$errors = [];

     /**
     * Get the value of first_name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     */
    public function setFirstName($first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName($last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of password_confirmation
     */ 
    public function getPassword_confirmation()
    {
        return $this->password_confirmation;
    }

    /**
     * Set the value of password_confirmation
     *
     * @return  self
     */ 
    public function setPassword_confirmation($password_confirmation)
    {
        $this->password_confirmation = $password_confirmation;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

        /////////////////////////////////// Validation ////////////////
        public function firstNameValidation()
        {
           
           if(empty($this->first_name)){
            $this->errors['first_name']['required'] ='First Name Is Required';
           }else{
            if(!(is_string($this->first_name)&&(strlen($this->first_name )>3 || strlen($this->first_name ) <32))) {
                $this->errors['first_name']['regex'] ='Please write the name correctly';
               }
           }
          
        }
        public function lastNameValidation()
        {
           
           if(empty($this->last_name)){
            $this->errors['last_name']['required'] ='Last Name Is Required';
           }else{
               if( !(is_string($this->last_name) && (strlen($this->last_name )>3 || strlen($this->last_name ) <32))) {
                $this->errors['last_name']['regex'] ='Please write the name correctly';
               }
           }
          
        }

    public function passwordValidation($password_regrxxx= 'Minimum 8 and maximum 32 characters, at least one uppercase letter, one lowercase letter, one number and one special characte', string $key = 'password') 
    {
        if(empty($this->password)){
            $this->errors[$key]['required'] = 'Password Is Required';
        }else{
            if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,32}$/',$this->password)){
                $this->errors[$key]['regex'] = $password_regrxxx;
            }
        }
        return $this;
    }

    public function passwordConfirmationValidation() 
    {
        if(empty($this->password_confirmation)){
            $this->errors['password_confirmation']['required'] = 'Password Confirmation Is Required';
        }
        else{
            if($this->password !== $this->password_confirmation){
                $this->errors['password_confirmation']['confirmed'] = 'Password Not Confirmed';
            }
        }
        return $this;
    }

    public function emailValidation($uniqueRule=true) 
    {
        if(empty($this->email)){
            $this->errors['email']['required'] = 'Email Is Required';
        }
        else{
            if(!preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/',$this->email)){
                $this->errors['email']['regex'] = 'Email Is Invalid';
            }else{
                if($uniqueRule){
                    $user = new User;
                    $user->setEmail($this->email);
                    $result = $user->getUserByEmail();
                    if($result->num_rows >= 1){
                        $this->errors['email']['unique'] = 'Email Already Exists';
                    }
                }
            }
        }
        return $this;
    }

    public function phoneValidation($uniqueRule=true) 
    {
        if(empty($this->phone)){
            $this->errors['phone']['required'] = 'Phone Is Required';
        }
        else{
            if(!preg_match('/^01[0125][0-9]{8}$/',$this->phone)){
                $this->errors['phone']['regex'] = 'Phone Is Invalid';
            }else{
                if($uniqueRule){
                    $user = new User;
                    $user->setPhone($this->phone);
                    $result = $user->getUserByPhone();
                    if($result->num_rows >= 1){
                        $this->errors['phone']['unique'] = 'Phone Already Exists';
                    }
                }
            }
        }
        return $this;
    }

    public function errors()
    {
        return  $this->errors;
    }

    public function getError($key='')
    {
        return $this->errors[$key] ?? [];
    }

    public function getErrorMessage($key='')
    {
        if(!empty($this->getError($key))){
            foreach($this->getError($key) AS $error){
                return "<p class='text-danger font-weight-bold'>*{$error}</p>";
            }
        }
    }
    public function correctPassword(string $oldPassword,string $currentHashedPassword)
    {
        if(!Hash::check($oldPassword,$currentHashedPassword)){
            $this->errors['old-password']['correct'] = "Wrong Password";
        }
        return $this;
    }

    public function newPassword(string $oldPassword,string $currentHashedPassword)
    {
        if(Hash::check($oldPassword,$currentHashedPassword)){
            $this->errors['new-password']['new'] = "Please Enter New Password";
        }
        return $this;
    }
    public function newEmail(string $oldEmail,string $currentEmail)
    {
        if($oldEmail == $currentEmail){
            $this->errors['email']['new'] = "Please Enter New Email";
        }
        return $this;
    }

}