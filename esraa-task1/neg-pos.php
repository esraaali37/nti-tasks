<?php
$message ="";
if($_POST){
    if($_POST['num'] > 0){
    $message = "The Number Is Positive .";
    } elseif ($_POST['num'] < 0){
        $message = "The Number Is Negative .";
    }
    else {
        $message = "The Number Is Equla zero .";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Negative || Positive</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
       <div class="container">
           <div class="  text-center mt-4 col-6 offset-3 ">
               <div>
                   <h3>Positive Or Negative</h3>
               </div>
               <form action="" method="post" class="mt-3 col">
                   <div class="form-group">
                     <input type="number" name="num" id="" class="form-control" placeholder="please Enter Number" aria-describedby="helpId">
                   </div>
                   <div class="form-group ">
                       <button class="alert alert-success">Check The Number</button>
                   </div>
               </form>
          <?php     echo $message;?>
           </div>
       </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>