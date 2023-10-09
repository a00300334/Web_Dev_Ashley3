<?php

    $number_one = 12;
    $number_two = 100;
    $counter = 0;
    
    $counter += $number_one;
    $counter += $number_two;
   

?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style> <link reel="stylesheet" href="bootstrap.min.css" </style>
    </head>
    <body>
            Relational Operators
          <?php  echo $counter ?> <br>
         <?php  echo ( 45 < 1 )  ?> <br>
         <?php  echo ( 45  <= 1 )  ?> <br>
         <?php  echo ( 45 > 1 )  ?> <br>
         <?php  echo ( 45 >= 1 )  ?> <br>           
         <?php  echo ( 45 != 1 )  ?> <br>
         
         <hr>
         Formmating Number <br>
        number_format(12345)  <?php  echo number_format(12345);  ?> <br>
        
        <hr> 
        Formating dates
        
        
        Dates 
        <?php 
            $date=date_create("2013-03-15");
            echo date_format($date,"Y/m/d H:i:s");
        ?>
       
        
         
         
    </body>
</html>
