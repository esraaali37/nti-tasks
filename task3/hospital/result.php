<?php
include_once "layout/header.php";
session_start();
// print_r($_SESSION);
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
$table ="
<table class='table table-striped' >
      <thead class ='thead-success'> <tr>  <th >Question</th>
      <th>Review</th>
         </tr> </thead> <tbody> " ; 
           for($x = 0 ;$x < count($question) ;$x++){
            $table .="<tr>";
            $table .= "<td>" . $question[$x] . "</td>"; 
            for($m=0 ;$m <1 ; $m++){
            if($_SESSION['choose'.$x] == $review[0]){
                $table .= "<td>" . $review[0] . "</td>"; 
            }
            elseif($_SESSION['choose'.$x] == $review[1]){
                $table .= "<td>" . $review[1] . "</td>"; 
            }
            elseif($_SESSION['choose'.$x] == $review[2]){
                $table .= "<td>" . $review[2] . "</td>"; 
            }
            elseif($_SESSION['choose'.$x] == $review[3]){
                $table .= "<td>" . $review[3] . "</td>"; 
            }
        }
            $table .="</tr>";
        }
        $totalll = $_SESSION['total'];
           if($_SESSION['total'] >25){
               $table .= "<tr class='alert alert-primary'>
                <td> Total Review </td>";
                if($_SESSION['total']>=44){
                $table .= "<td>  $review[3] </td> 
                </tr>" ;
                }
                elseif($_SESSION['total']>=34){
                    $table .= "<td>  $review[2] </td> 
                    </tr>" ;
                    }
                    else{
                        $table .= "<td>  $review[1] </td> 
                        </tr>" ;
                        }
                $table .= "<tr class='alert alert-success'>
                <td> Thank You </td>
                </tr>" ;
           }
           else{
            $table .= "<tr class='alert alert-primary'>
            <td> Total Review </td>
            <td>  $review[0] </td> 
            </tr>" ;
            $table .= "<tr class='alert alert-danger'>
            <td> PLease contact the patient to find out the reason for the bad evaluation 01000498488 </td>
            </tr>" ;
           }
          
         
     $table .=" </tbody> </table>" ;
 
?>
 <div class="contanier mt-5 col-8 offset-2">
          <div class="text-center mt-5">
              <?= $table; ?>
          </div>
 </div>
<?php
include_once "layout/footer.php";
?>
