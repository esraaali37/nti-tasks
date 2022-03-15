<?php 
$title ="Bank";
$table ="";

if($_POST){   
    if(!empty($_POST["amount"])  && !empty($_POST["user"]) && !empty($_POST["year"]) ){
        $table .=" <table class='table'>
        <thead class ='thead-dark'>
          <tr>
            <th >User Name</th>
            <th >Insteret Rate</th>
            <th >Loan after interest</th>
            <th >Monthly</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th >" ;
             $table .=  $_POST["user"] ;
             $table .= "</th> <td>" ; 
             $table .= $_POST["year"] <=3 ? $insterestYear = $_POST["year"] * $_POST["amount"] * 0.1 :$insterestYear = $_POST["year"] * $_POST["amount"] * 0.15 ;
             $table .="</td>
            <td>".$insterestYear + $_POST["amount"] . "</td>
            <td>". ($insterestYear + $_POST["amount"])/12 ."</td>
          </tr>
      
        </tbody>
      </table>";
      
    }
   
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title><?= $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class ="contanier mt-5 offset-2 col-8">
      <div class="mt-5 text-center">
          <h3><?= $title ;?></h3>
      <div class="card mb-3 mt-5" >
  <div class="row no-gutters">
    <div class="col-md-6">
      <img src="images/img.jpg" alt="img" class="w-100" style="height: 100%;">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
              <label for="user" class="text-left font-weight-bold text-success d-block ">User Name</label>
              <input type="text" name="user" id="user" value= "<?= isset($_POST["user"] ) ? $_POST["user"] :" " ?>" class="form-control" >
            </div>
            <div class="form-group">
              <label for="amount" class="text-left font-weight-bold text-success d-block ">Loan amount</label>
              <input type="number" name="amount" id="amount" value= "<?= isset($_POST["amount"] )?  $_POST["amount"]:" " ?>" class="form-control" >
            </div>
            <div class="form-group">
              <label for="year" class="text-left font-weight-bold text-success d-block ">Loan years</label>
              <input type="number" name="year" id="year" value=" <?= isset($_POST["year"]) ? $_POST["year"]:" " ?>" class="form-control" >
             
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Calculate</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="mt-5">
    <?= $table ;?>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
