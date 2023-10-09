<?php

// Connect using DBO 
$dsn ='mysql:host=127.0.0.1:3306;dbname=cars';
$username = "root";
$password = "";

try{
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo "<p>An error occurred while connecting to  the database: $error_message </p>";
}

       