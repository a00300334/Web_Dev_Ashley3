<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

<?php 
    
$desc = "";
$price = 0;
$discount = 0;
$fin = 0;


 $desc = $_POST['desc'];
 $price = $_POST['price'];
 $discount = $_POST['discount'];
  
 if(empty($desc)){
     $error_message = "Description is required";
     include('prodCalc.php');
     exit();
 }
 
  if(empty($discount)){
     $error_message = "Discount is required";
     include('prodCalc.php');
     exit();
 }elseif (!is_numeric($discount)) {
     $error_message = "Discount should be an numeric value";
     include('prodCalc.php');
     exit();
}
 
  if(empty($price)){
     $error_message = "Price is required";
     include('prodCalc.php');
     exit();
  }elseif (!is_numeric($price)) {
       $error_message = "Price must be an number";
     include('prodCalc.php');
     exit();
 }elseif ($price < 0 ) {
    $error_message = "Price must be greater than 0";
     include('prodCalc.php');
     exit();
}
 
  if($price != 0 && $discount !=0 ){
        $fin = $price - ($price * $discount / 100);
        //original price - (original price × discount / 100)
        // or discount /100    * price

       
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .border{
                border: 1px darkcyan dashed
            }    
        </style>
    </head>
    <body>
        <h1> Product discount calculator</h1>
   
        <div class="border">
            Product description: &nbsp; <?php echo $desc ?>  <br>
            Listed price: &nbsp; <?php echo "&euro;". number_format($price,2) ?>  <br>
            Standard discount: &nbsp; <?php echo $discount ?>  <br>
            Discount price: &nbsp; <?php echo "&euro;".number_format($fin,2) ?>  <br>
        </div>
        
     
    </body>
</html>
