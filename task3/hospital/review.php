<?php
include_once "layout/header.php";
session_start();
  $question= array(
    "Are You Satisfied with the level of cleanliness?",
    "Are You Satisfied with the service prices?",
    "Are You Satisfied with the nursing service?",
    "Are You Satisfied with thethe level of doctor?",
    "Are You Satisfied with the calmness in the hospital?"
  );
  $review =[
       "Bad",
       "Good",
       "Very Good",
        "Excellent"
  ];
  
 
$total =0;
      $table = "<table class='table table-striped' >
      <thead class ='thead-success'> <tr>  <th >Question</th> ";
        for($m = 0 ;$m < count($review) ;$m++){
          $table .= "<th>" . $review[$m] . "</th>";  }
        $table .= " </tr> </thead> <tbody> " ; 
           for($x = 0 ;$x < count($question) ;$x++){
            $table .="<tr>";
            $table .= "<td>" . $question[$x] . "</td>"; 
             for($i =0 ; $i <count($review) ; $i++){
              $table .= "<td> <input type='radio' name='choose$x' value='$review[$i]' ></td>" ;
            }
            $table .="</tr>";
          }
         
     $table .=" </tbody> </table>" ;
     if($_POST){
      
      if( $_POST['choose0'] == $review[0] || $_POST['choose1'] == $review[0] || $_POST['choose2'] == $review[0] || $_POST['choose3'] == $review[0] || $_POST['choose4'] == $review[0]){
        $total += 0;
    }
    $oneG = $_POST['choose0'];
    $_SESSION['choose0'] =$oneG;
    $onev = $_POST['choose1'];
    $_SESSION['choose1'] =$onev;
    $onem = $_POST['choose2'];
    $_SESSION['choose2'] =$onem;
    $onel = $_POST['choose3'];
    $_SESSION['choose3'] =$onel;
    $onez = $_POST['choose4'];
    $_SESSION['choose4'] =$onez;

 
    if($_POST['choose0'] == $review[1]){
      
      $total += 3;
    }
    if($_POST['choose1'] == $review[1]){
      
      $total += 3;
    }
    if($_POST['choose2'] == $review[1]){
      $total += 3;
    }
    if($_POST['choose3'] == $review[1]){
      $total += 3;
    }
    if($_POST['choose4'] == $review[1]){
      $total += 3;
    }
    if($_POST['choose0'] == $review[2]){
      $total += 5;
    }
    if($_POST['choose1'] == $review[2]){
      $total += 5;
    }
    if($_POST['choose2'] == $review[2]){
      $total += 5;
    }
    if($_POST['choose3'] == $review[2]){
      $total += 5;
    }
    if($_POST['choose4'] == $review[2]){
      $total += 5;
    }
    if($_POST['choose0'] == $review[3]){
      $total += 10;
    }
    if($_POST['choose1'] == $review[3]){
      $total += 10;
    }
    if($_POST['choose2'] == $review[3]){
      $total += 10;
    }
    if($_POST['choose3'] == $review[3]){
      $total += 10;
    }
    if($_POST['choose4'] == $review[3]){
      $total += 10;
    }
    $_SESSION['total'] = $total;
    header("location:result.php");

  }
  
?>

      <div class="contanier mt-5 col-8 offset-2">
          <div class="text-center mt-5">
              <form action="" method="post">
              <?php echo $table; ?>
              <div class="form-group">
                <button class="btn btn-success">Result</button>
              </div>
              </form>
             
          </div>   
      </div>
    <?php
     include_once "layout/footer.php";
    ?>
