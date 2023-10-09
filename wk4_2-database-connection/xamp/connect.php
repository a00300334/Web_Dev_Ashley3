<?php
//$servername = "localhost";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password);
//
//// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";


// Connect using DBO 
$dsn ='mysql:host=127.0.0.1:3307;dbname=cars';
$username = "root";
$password = "";

$db = new PDO($dsn, $username, $password);

echo "Connected to the database";
       