<?php
require 'connect.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$status = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $make = $_POST['make'];
    $model = $_POST['model'];  
    
    require_once 'connect.php';
    $status = true;
} else {
    die();
}


if($status){
    $query = "INSERT INTO car_details (make, model) VALUES ('$make', '$model')";
    $action = $db->exec($query);
    

    
   include('index.php');
   die();
}







