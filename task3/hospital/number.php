<?php
include_once "layout/header.php";
$message ="";
  if($_POST){
     if(!empty($_POST['phone'])){
       header("location:review.php");
     }else{
          $message .="<div class='mt-2 text-primary text-left'><h5>Please Enter Phone Number *</h5></div>";
     }
 
}

?>
    <div class="container mt-5 text-center">
    <div class="card mb-3 mt-5 border border-0">
  <div class="row no-gutters mt-5 border border-0">
    <div class="col-md-6">
      <img src="images/hospital.jpg" alt="hospital">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h2 class="card-title">Hospital</h2>
        <form action="" method="post">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Phone Number</span>
                        </div>
             <input type="tel" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                   </div>
                   
                     <?php echo $message ; ?>
                   
                 <div class="form-group mt-2">
                  <button class="alert alert-success">Submit</button>
                 </div>
                 </form>   
      </div>
    </div> 
  </div>
    </div>
    </div>
    

                
    
  
  <?php include_once "layout/footer.php" ; ?>