<?php
$title ='games';
include_once "header.php";
// $sports =["Football 300 LE","Swimming 250 LE" ,"Volley ball 150 LE" ,"Others 100 LE"];
// $countFamily ="";
session_start();
if($_POST){
    if($_POST['member-name'] && $_POST['count-members']) {
       $countt = $_POST['count-members'] ;
        $_SESSION['count-members'] = $countt;
        $namee =  $_POST['member-name'] ;
        $_SESSION['member-name'] = $namee ;
             header("location:games.php");
        //     for($count=1 ; $count <=  $_POST['count-members'] ; $count++){
        //     $countFamily .= "<P class='text-left offset-3'> Member  $count </p> " ;
        //     $countFamily .=" <input type='text' name='member-name$count ' > " ;
        //     for($i =0 ; $i < 4 ; $i++){
        //         $countFamily .= "<div class='form-check'>
        //         <input class='form-check-input' type='checkbox' value='' id='defaultCheck1'>
        //         <label class='form-check-label' for='defaultCheck1'>
        //           $sports[$i]
        //         </label>
        //       </div> ";

        //     }
        //     $countFamily .= "<div class='form-group'>
        //     <button class='btn btn-success'>subscribe</button>
        // </div>";
        

    }
    // print_r($_SESSION);
    

}
   

?>

      <form action="" method="post">
          <div class="form-group">
            <label for="member-name" class="d-block w-100 text-left font-weight-bold" style="color:darkolivegreen;">Member Name</label>
            <input type="text" name="member-name" value="<?= isset($_POST['member-name'])?$_POST['member-name']:''; ?>" id="member-name" class="form-control" placeholder="" aria-describedby="helpId">
            <p class="lead text-left " style="font-size:15px;">Club subscription starts with 10.000 LE</p>
          </div>
          <div class="form-group">
            <label for="count-members" class="d-block w-100 text-left font-weight-bold" style="color:darkolivegreen;">Count of family members</label>
            <input type="number" name="count-members" value="<?= isset($_POST['count-members'])?$_POST['count-members']:''; ?>" id="count-members" class="form-control" placeholder="" aria-describedby="helpId">
            <p class="lead text-left " style="font-size:15px;"> Coast of each member is 2.500 LE</p>
          </div>
          <div class="form-group">
              <button class="btn btn-success">subscribe</button>
          </div>
      </form>
      <div>
          <!-- <?= $countFamily ; ?> -->

      </div>
      </div>
   <?php 
   include_once "footer.php" 
   ?>