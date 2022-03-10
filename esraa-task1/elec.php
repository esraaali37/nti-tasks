<?php
  $message =" ";
if($_POST){

  define('surceCharge', (0.2 * $_POST['cal']));
  if($_POST['cal'] <= 50){
    $totalBill = $_POST['cal'] * 0.5  + surceCharge ;
    $mesaage = "your Total Bill is " . $totalBill ."<br>" . "each unit : 0.5 pound  <br>" 
    ."the surceCharge from the electricity bill : " . surceCharge . 
    " pound Added fine <br> while Electricity unit charges that have already been used :". $_POST['cal'] * 0.5 ."pound";
      ;

  }
  elseif($_POST['cal'] >50 && $_POST['cal'] <= 150){
    $totalBill = $_POST['cal'] * 0.75 + surceCharge ;
    $mesaage = "your Total Bill is " . $totalBill ."<br>" . "each unit : 0.75 pound  <br>" 
    ."the surceCharge from the electricity bill : " . surceCharge . 
    " pound Added fine <br> while Electricity unit charges that have already been used :". $_POST['cal'] * 0.75 ."pound"; 
  }
  elseif($_POST['cal'] >150 && $_POST['cal'] <= 250){
    $totalBill = $_POST['cal'] * 0.2 + $_POST['cal'] + surceCharge ;
    $mesaage = "your Total Bill is " . $totalBill ."<br>" . "each unit : 1.20 pound  <br>" 
    ."the surceCharge from the electricity bill : " . surceCharge . 
    " pound Added fine <br> while Electricity unit charges that have already been used :". $_POST['cal'] * 0.2 + $_POST['cal'] ."pound";
  }
  elseif( $_POST['cal'] > 250){
    $totalBill = $_POST['cal'] * 0.5 + $_POST['cal'] + surceCharge ;
    $mesaage = "your Total Bill is " . $totalBill  ."<br>" . "each unit : 1.50 pound  <br>" 
    ."the surceCharge from the electricity bill : " . surceCharge . 
    " pound Added fine <br> while Electricity unit charges that have already been used :". $_POST['cal'] * 0.5 + $_POST['cal'] ."pound" ;
  }
  // elseif($_POST['cal'] <= 50){
    // $totalBill = $_POST['cal'] * 0.5  + surceCharge ;
    // $mesaage = "your Total Bill is " . $totalBill ."<br>";
    // $message .= "each unit : 0.5 . <br>";
    // $message .= "the surceCharge from the electricity bill : " . surceCharge ;  }
  
  // echo $mesaage;
 
}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Calculate Electricty</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

      <div class="container text-center mt-5 col-6 fs-4 alert alert-secondary">
        <h1>Calculate Electricty</h1>
        <form action="" method="post">
          <div class="form-group">
            <input type="number" name="cal" id="" class="form-control" placeholder="Please Enter Electricity unit charage" aria-describedby="helpId">
          </div>
          <div class="form-group">
          <button class="alert alert-primary">Calculate The pill</button>
          </div>
        </form>
        <div>
          <h3><?php echo $mesaage ;?> </h3>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>