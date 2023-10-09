<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style> 
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">a
        </style>
    </head>
    <body>
        <div>
            <p>This is an example of a GET REQuest with action display.php</p>
        
        <form action="display.php" method="GET">
            <label> First Name: </label>
            <input type ="text" name="first_name">
            <label> Last Name: </label>
            <input type="text" name="last_name">
            <button type="submit"> submit </button>
        </form>
        </div>
        
        <hr>
        
         <div>
            <p>This is an example of a POST REQuest with action display.php</p>
        
        <form action="display.php" method="POST">
            <label> First Name: </label>
            <input type ="text" name="first_name">
            <label> Last Name: </label>
            <input type="text" name="last_name">
            <button type="submit"> submit </button>
        </form>
        </div>
        
    </body>
</html>
