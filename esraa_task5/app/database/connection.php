<?php 
namespace app\database;

use mysqli;
class connection {
    private $hostName = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'esraa_ecommerce';
    protected $con;
    public function __construct() {
        $this->con = new mysqli($this->hostName,$this->username,$this->password,$this->database);
        
    }
    public function runDML($query) :bool
    {
        $result = $this->con->query($query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function runDQL($query)
    {
        return $this->con->query($query);
    }

    public function __destruct()
    {
        $this->con->close();   
    }
}

