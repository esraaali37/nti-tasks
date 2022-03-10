<?php
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        'gender' => (object)[
         'gender' => 'm'
        ],
        'hobbies' => [
            'football','swimming','running'
        ],
        'activities' => [
            'school' =>'drawing',
            'home' => 'painting'
        ],
    ],
 
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        'gender' => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming','running'
        ],
        'activities' => [
            'school' =>'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        'gender' => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running'
        ],
        'activities' => [
            'school' =>'painting',
            'home' => 'drawing'
        ],
    ],

];
$message ="";
$message .= "<table>";
foreach($users as $index => $user){
    // $message .= "<tr>";
    foreach($user as $key => $prodructs){ 
     $message .="<th style ='padding:5px'> {$key } </th> "; 
     foreach($prodructs as $num => $product){
        $message .= "<tr>";
        if(is_array($prodructs) || is_object($prodructs)) {
        //     if($product -> gender == 'm'){
        //     $product -> gender = 'male';}
        //    else{
        //      $product -> gender  = 'femele';
        //    }
        $message .="<td style ='padding:5px'> {$product} </td> "; 
        
     }
     elseif(!((is_array($prodructs) || is_object($prodructs)) )) {
        $message .="<td style ='padding:5px'> {$prodructs} </td> ";
     }
     $message .= "</tr>";
    }
    
    }
    
     }

     
    




$message .= "</table>";

echo $message;


?>
