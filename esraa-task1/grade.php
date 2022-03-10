<?php
$message ="";
if($_POST){
    $gradeTotal = $_POST['physics'] + $_POST['chemistry'] + $_POST['biology'] + $_POST['Mathematics'] + $_POST['computer'] ;
    $precentage = ($gradeTotal / 250) * 100 ;
    switch($precentage){
        case $precentage >= 90:
            $message = "The Grade Total = " . $gradeTotal . " and THe precentage is ".$precentage ."%"." and "."Grade A";
            break;
        case ($precentage < 90 && $precentage >= 80):
             $message = "The Grade Total = " . $gradeTotal ." and THe precentage is ".$precentage ."%"." and "."Grade B";
            break;
        case ($precentage < 80 && $precentage >= 70):
             $message = "The Grade Total = " . $gradeTotal ." and THe precentage is ".$precentage ."%"." and "."Grade c";
             break;
        case ($precentage < 70 && $precentage >= 60):
                $message ="The Grade Total = " . $gradeTotal ." and THe precentage is ".$precentage ."%"." and ". "Grade D";
              break;
        case ($precentage < 60 && $precentage >= 40):
              $message = "The Grade Total = " . $gradeTotal . " and THe precentage is ".$precentage ."%"." and "."Grade E";
               break;
        default:
        $message ="The Grade Total = " . $gradeTotal .  " and THe precentage is ".$precentage ."%"." and "."Grade F";
               break;
    }
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Calculate Grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container col-6 text-center mt-5">
          <div>
              <h3>Calculate Grade</h3>
          </div>
          <form action="" method="post">
              <div class="form-group">
                <label for="Physics">Physics</label>
                <input type="number" name="physics" id="Physics" class="form-control" placeholder="Please Enter grade Physics" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="chemistry">chemistry</label>
                <input type="number" name="chemistry" id="chemistry" class="form-control" placeholder="Please Enter grade chemistry" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="Biology">Biology</label>
                <input type="number" name="biology" id="Biology" class="form-control" placeholder="Please Enter grade Biology" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="Mathematics">Mathematics</label>
                <input type="number" name="Mathematics" id="Mathematics" class="form-control" placeholder="Please Enter grade Mathematics" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="computer">computer</label>
                <input type="number" name="computer" id="computer" class="form-control" placeholder="Please Enter grade computer" aria-describedby="helpId">
              </div>
              <button class="alert alert-success">Calculate Grade</button>
          </form>
          <div> <?php echo $message; ?></div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>