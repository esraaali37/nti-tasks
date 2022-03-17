<?php
$title ='result';
include_once "header.php";
$sporrt = ["Football","Swimming","Volley","Others"];
session_start();
// print_r($_SESSION);
$resultName = $_SESSION['member-name'];


$table = "<table class='table'>
<thead>
  <tr>
    <th >Subscriber</th>
    <th>$resultName</th>
  </tr>
      </thead>
    <tbody> 

    ";
     
    for($count=1 ; $count <=  $_SESSION['count-members'] ; $count++){
      $table .= "<tr>";
        $countMemberNameResult =  $_SESSION['member-namea'.$count];
       $table .= "<td>" . $countMemberNameResult ."</td>" ;
            
       if(isset($_POST['array'])){
        for($j=0; $j<4; $j++){
            $_SESSION['arrray'][j] = ;
            // $_SESSION['cat'][$j][1] = $check_array[$j][1];
        }
    
       $_SESSION['array'] =$xx;
     
            $table .= "<td>" . $_SESSION['array'] . "</td>" ;
          
          // if($_SESSION['check'][$count] == $sporrt[1]){
          //   $table .= "<td> Swimming </td>" ;
          // }
          // if($_SESSION['check'][$count] == $sporrt[2]){
          //   $table .= "<td> Volley </td>" ;
          // }
          // if($_SESSION['check'][$count] ==$sporrt[3]){
          //   $table .= "<td> Others </td>" ;
          // }  
        
        
        
        // $table .="<td>" . 20 ."LE </td>"; 
        $table .= "</tr>";
        
      }
    
    $table .="
  
</tbody>
</table>";
// print_r($_SESSION);
      
?>
 <div>
     <?= $table;?>
 </div>

<?php
include_once "footer.php";
?>