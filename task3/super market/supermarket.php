<?php
$city =["cairo","Giza","alex","other"];

$table ="";
$table2 ="";
$table3 ="";
$bulid ="";
if($_POST){
  if(!empty($_POST['user'])){
      
  }
  if(!empty($_POST['city1']) ||!empty($_POST['city2']) || !empty($_POST['city3']) || !empty($_POST['city4'])){
     
}
if(!empty($_POST['number'])){
      $bulid .= $_POST['number'];
      $table .= "<table class='table'>
      <thead class='thead-dark'>
        <tr>
          <th>product name</th>
          <th>price</th>
          <th>Quantities</th> " ;
         
          $table .= "  </tr>   </thead>  <tbody>  ";
        for($product = 0; $product < $bulid ;$product++){
            $table .="<tr>";
            // for($prod =0 ;$prod <3 ;$prod++){
              // $table .=" <td>  $input[$prod]  </td>";
                $table .= "<td> <input type='text' name='productN$product' value=''  > </td>";
                $table .= "<td> <input type='text' name='price$product' value=''  > </td>";
                $table .= "<td> <input type='text' name='quant$product' value=''  > </td>";
            // }
            $table .="</tr>";
        }
       
    $table .= " </tbody>
    </table>
      ";
      $table .= " <div class='form-group'>
      <button class='btn btn-primary d-block text-center w-100'>Recelpt</button>
    </div>
      ";
      
}
}

for($product = 0; $product < $bulid ;$product++){
    if(!empty($_POST['productN'.$product]) && !empty($_POST['price'.$product]) && !empty($_POST['quant'.$product])){
  
    $table =" ";
    $table2 .= "<table class='table '>
    <thead class='thead-dark'>
      <tr>
        <th>product name</th>
        <th>price</th>
        <th>Quantities</th>
        <th>sub total </th>
          </tr>   </thead>  <tbody>  ";

          $tottttal =0;
      for($product = 0; $product < $bulid ;$product++){
        $valuee =[];
        $valuee[$product] = isset($_POST['productN'.$product]) ?  $_POST['productN'.$product] :'';
        $pricee =[];
        $pricee[$product] = isset($_POST['price'.$product]) ? $_POST['price'.$product]:' ' ;
        $quantttt =[];
        $quantttt[$product] =isset($_POST['quant'.$product]) ?  $_POST['quant'.$product]:' ' ;
          $table2 .="<tr>";
          $table2 .= "<td> <input type='text' name='productN$product' value ='$valuee[$product]' > </td>" ;
      
                $table2 .= "<td> <input type='text' name='price$product' value='$pricee[$product]'  > </td>";
                $table2 .= "<td> <input type='number' name='quant$product' value='$quantttt[$product]' > </td>";
                 $total = $pricee[$product] * $quantttt[$product];
                $table2 .= "<td> <input type='number' name='total$product' value='$total'  > </td>";
                $tottttal += $total;
          $table2 .="</tr>";
      }
            $table2 .= " </tbody> </table> ";
      $discount =0;
     if($tottttal< 1000){
       $discount =0;
     }
     elseif($tottttal< 3000 && $tottttal> 1000){
      $discount +=$tottttal * 0.1 ;
     }
     elseif($tottttal< 4500 && $tottttal> 3000){
      $discount +=$tottttal * 0.15 ;
     }
     elseif($tottttal< 4500 && $tottttal> 3000){
      $discount +=$tottttal * 0.15 ;
     }else{
      $discount +=$tottttal * 0.2 ;
     }
     $totalAfter = $tottttal - $discount ;
     $dilvery =0 ;
     if($_POST['city'] == $city[0]){
      $dilvery +=0 ;
    }elseif($_POST['city'] == $city[1]){
      $dilvery +=30 ;
    }
    elseif($_POST['city'] == $city[2]){
      $dilvery +=50 ;
    }
    elseif($_POST['city'] == $city[3]){
      $dilvery +=100 ;
    }
    $netTotal =$dilvery + $totalAfter;
    $table3 .= "<table>
     <tr>
     <th class='col-4'> Clinet Name</th> <th>";
     $table3 .= $_POST['user'];
     $table3 .= " </th> </tr>";
     $table3 .=" <tr> <th class='col-4'> City</th> <th>";
     $table3 .= $_POST['city'];
     $table3 .= " </th> </tr>";
     $table3 .=" <tr> <th class='col-4'> Total</th> <th>";
     $table3 .= $tottttal;
     $table3 .= " </th> </tr>";
     $table3 .=" <tr> <th class='col-4'> Disscount</th> <th>";
     $table3 .= $discount;
     $table3 .= " </th> </tr>";
     $table3 .=" <tr> <th class='col-4'> Total After Discount</th> <th>";
     $table3 .=$totalAfter;
     $table3 .= " </th> </tr>";
     $table3 .=" <tr> <th class='col-4'> Divlery</th> <th>";
     $table3 .=$dilvery;
     $table3 .= " </th> </tr>";
     $table3 .=" <tr> <th class='col-4'> NetTotal</th> <th>";
     $table3 .=$netTotal;
     $table3 .= " </th> </tr>";
     $table3 .="</table>";
     
}
}


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5 text-center ">
      <div class="card mb-3 border border-0" >
  <div class="row no-gutters">
    <div class="col-md-5">
      <img src="images/img.png" alt="super" class="w-100 img-fluid">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
              <label for="user " class="d-block text-left font-weight-bold" style ="color:crimson">User Name</label>
              <input type="text" name="user" id="user" class="form-control" value="<?= isset($_POST['user']) ? ($_POST['user']):""; ?>" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="city"  class="d-block text-left font-weight-bold" style ="color:crimson">City</label>
              <select name="city" id="city" class="d-block w-100 p-2" style="cursor: pointer;" name="city" value ="">
              <option name="selected" value="select city">select city</option>
               <option name="city1" value="<?= $city[0] ?>"><?= $city[0] ?></option>
               <option name="city2" value="<?= $city[1] ?>"><?= $city[1] ?></option>
               <option name="city3" value="<?= $city[2] ?>"><?= $city[2] ?></option>
               <option name="city4" value="<?= $city[3] ?>"><?=$city[3] ?></option>
              </select>
            </div>
            <div class="form-group">
              <label for="number" class="d-block text-left font-weight-bold" style ="color:crimson">Number of varieties</label>
              <input type="number" name="number" id="number" class="form-control" value ="<?= isset($_POST['number']) ? ($_POST['number']):""; ?>" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <button class="btn btn-primary d-block text-center w-100">Enter products</button>
            </div>
            <div>
                
                <?= $table ;?>
                <?= $table2 ;?>
                <?= $table3 ;?>
            </div>
        </form>
      </div>
    </div>
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