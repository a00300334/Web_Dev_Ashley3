<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->


<html>
    <head>
        <title>Add_car_form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <form  method="POST" action="add_car.php"  target="_self">
             <fieldset>
               <legend> Add the car.... </legend>
                <label for="text">Make:</label><br>
                <input type="text" id="make" name="make"><br>
                
                <label for="text">Model:</label><br>
                <input type="text" id="model" name="model"><br>
                <input type="submit" value="Submit"><br><br>
             </fieldset>
             </form>
    </body>
</html>
