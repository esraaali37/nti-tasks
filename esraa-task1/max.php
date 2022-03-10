<?php
$message ="";
if($_POST){
    if($_POST['first'] > $_POST['second'] && $_POST['first'] > $_POST['third']){
        if($_POST['second'] > $_POST['third']){
        $message ="the maxmum is First Number :" .  $_POST['first'] ."<br>" ."the manimum is third Number :" . $_POST['third'];
    }
      else{
        $message ="the maxmum is First Number :" .  $_POST['first'] ."<br>" ."the manimum is second Number :" . $_POST['second'];
      }

}

    elseif($_POST['second'] > $_POST['first'] && $_POST['second'] > $_POST['third']){
       if($_POST['first'] > $_POST['third']){
        $message ="The maxmum is second Number :" . $_POST['second'] . "<br>" ."the manimum is third Number :" . $_POST['third'];
       }
       else{
        $message ="The maxmum is second Number :" . $_POST['second'] . "<br>" ."the manimum is first Number :" . $_POST['first'];
       }
    }
    elseif($_POST['third'] > $_POST['first'] && $_POST['third'] > $_POST['first'])
    {
    if($_POST['second'] > $_POST['first']) {
        $message ="The maxmum is third Number :" . $_POST['third'] . "<br>" ."the manimum is first Number :" . $_POST['first'];

    }
    else{
        $message ="the maxmum is third Number :" .  $_POST['third'] ."<br>" ."the manimum is second Number :" . $_POST['second'];

    }

    
    }
    
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Max & min</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
          <div class=" text-center alert alert-secondary col-6 offset-3 mt-5">
              <div class="mt-3">
              <h3 class="">Max $ Min </h3>
              </div>
              <form action="" method="post" class="mt-4">
                  <div class="form-group">
                    <input type="number" name="first" id="first" class="form-control" placeholder="Please Enter The First Number" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <input type="number" name="second" id="second" class="form-control" placeholder="Please Enter The second Number" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <input type="number" name="third" id="third" class="form-control" placeholder="Please Enter The third Number" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                      <button class="alert alert-danger">Get Maxmium and get Minmium</button>
                  </div>
              </form>
              <?php echo $message;?>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>