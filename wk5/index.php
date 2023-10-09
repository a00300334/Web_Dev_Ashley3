<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->

<?php require "connect.php"; 

$query = 'SELECT * FROM car_details';
$cars = $db->query($query);

?>


<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <h2>Car List</h2>
            		<table> <tr> <th>Identity</th> <th>Make</th>  <th>Model</th></tr>
            			<?php foreach ($cars as $car) : ?>
                		<tr>
                    			<td><?php echo $car['id']; ?></td>
                  			<td><?php echo $car['make']; ?></td>
                    			<td><?php echo $car['model']; ?></td>
                		</tr>
            			<?php endforeach; ?>
            		</table>
        
        <a href="add_car_form.php"> Add the car </a>
    </body>
</html>
