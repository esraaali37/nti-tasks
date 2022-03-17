<?php
$title ='games';
include_once "header.php";
session_start();
// print_r($_SESSION);
$checkk =[];
$sports =["Football 300 LE","Swimming 250 LE" ,"Volley ball 150 LE" ,"Others 100 LE"];
$sporrt = ["Football","Swimming","Volley","Others"];
$countFamily ="";

 $inputName = "" ;
// print_r($_SESSION);
for( $count =1; $count <= $_SESSION['count-members']; $count++){
  $countFamily .= "<P class='text-left offset-3 mt-2'> Member $count </p> " ;
     if( $count ==1){
      $firstName = $_SESSION['member-name'];
      $countFamily .= " <input type='text' name='member-namea$count' value ='$firstName' > ";}
      else{
        $countFamily .= " <input type='text' name='member-namea$count' > ";}
        

      for($i =0 ; $i < 4 ; $i++){
          $countFamily .= "<div class='form-check'>
          <input class='form-check-input' type='checkbox' name='array[]' value='$sporrt[$i]' id='defaultCheck$i'>
          <label class='form-check-label' for='defaultCheck$i' name='$sports[$i]'>
          $sports[$i]  
          </label>
        </div> ";
      }
        
        
    
}
          
    if($_POST){
      $a[] =$_POST['array'];
      $_SESSION["array"] = $_POST["array"];
      // if(in_array($i, $_SESSION["array"])) echo ' checked="checked" ';
    
      for($x = 1; $x <= $_SESSION['count-members'] ; $x++){
        // $_SESSION['sport'.$x] = $sporttttttttttf.$x;
         if(!empty($_POST['member-namea'.$x])){
          $memberNameee = $_POST['member-namea'.$x];

           $_SESSION['member-namea'.$x] = $memberNameee;
           

          //  $_SESSION['sport'.$x] = $sporffffffffffff;
         
        header("location:result.php");
       }
     }
    }
    

// $countFamily .= ;

 
?>

      <form action="" method="post">
      <div><?php echo $countFamily; ?>
      <div class='form-group'>
    <button class='btn btn-success d-block w-100'>Result</button>
       </div>
     </div>
      </form>
      <?php 
   include_once "footer.php" 
   ?>



<!-- // $countFamily .= "<div class='form-check'>
      //     <input class='form-check-input' type='checkbox' name='array[]' value='$sporrt[0]' id='defaultCheck'>
      //     <label class='form-check-label' for='defaultCheck' name='$sports[0]'>
      //     $sports[0]  
      //     </label> <br>
      //     <input class='form-check-input' type='checkbox' name='array[]' value='$sporrt[1]' id='defaultCheck'>
      //     <label class='form-check-label' for='defaultCheck' name='$sports[1]'>
      //     $sports[1]  
      //     </label>
      //     </br>
      //     <input class='form-check-input' type='checkbox' name='array[]' value='$sporrt[2]' id='defaultCheck'>
      //     <label class='form-check-label' for='defaultCheck' name='$sports[2]'>
      //     $sports[2]  
      //     </label> </br>
      //     <input class='form-check-input' type='checkbox' name='array[]' value='$sporrt[3]' id='defaultCheck'>
      //     <label class='form-check-label' for='defaultCheck' name='$sports[3]'>
      //     $sports[3]  
      //     </label>  </br>
      //   </div> ";




     
    
    // $_SESSION['sport'] -->
    