<?php

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
       
        if( isset($_GET['first_name']) && isset($_GET['last_name']) ){
            $first_name = $_GET['first_name'];
            $last_name = $_GET['last_name'];
            echo "This was delivered trough GET ".$first_name .'  '.$last_name;
        }
    }
   
       
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        echo "This was delivered trough POST ".$first_name .'  '.$last_name;
    }

