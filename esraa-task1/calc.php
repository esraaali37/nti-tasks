<?php
$total ="";
if($_POST){
  $num1 = $_POST['fnum'];
  $num2 = $_POST['lnum'];
  if ($_POST['operator'] =="add"){
    $total = "The Total is = " . ($num1 + $num2);
  }
  elseif ($_POST['operator'] =="sub"){
    $total = "The Total is = " . $num1 - $num2;
  }
  elseif ($_POST['operator'] =="division"){
    $total = "The Total is = " . $num1 / $num2;
  }
  elseif ($_POST['operator'] =="mult"){
    $total= "The Total is = " . $num1 * $num2;
  }
  elseif ($_POST['operator'] =="modu"){
    $total= "The Total is = " . $num1 % $num2;
  }
  else {
    $total = "please choose crrocet any operator";
  }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container col-4 text-center mt-5">
        <h3>Calculate</h3>
        <form action="" method="post">
        <div class="form-group">
          <input type="number" name="fnum" id="" class="form-control" placeholder="Please Enter First Number" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <input type="number" name="lnum" id="" class="form-control" placeholder="Please Enter Second Number" aria-describedby="helpId">
        </div>
        <div class="form-group">
         <select name="operator" id="">
           <optgroup> 
           <option value="oper">operator</option>
           <option value="add">+</option>
           <option value="sub">-</option>
           <option value="division">/</option>
           <option value="mult">*</option>
           <option value="modu">%</option>
           </optgroup>
         </select>
        </div>
        <div class="form-group">
          <button class="alert alert-primary">calculate</button>
        </div>
        </form> 
        <h3><?php echo $total ?> </h3>
     
        
       
        
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>