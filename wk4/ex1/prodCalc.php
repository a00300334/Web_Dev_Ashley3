<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Product discount calculator</h1>
        
        <?php if (!empty($error_message)) { ?>
        <p class="error">
        <?php echo $error_message; ?></p>
        <?php } // end if ?>

        
        <form action="display_discount.php" method="POST">
        <table border="1">
            <tr>
                <td> <label> Product description </label></td>
                <td>
                   
                    <input name="desc" type="text"/>
                </td>
            </tr>
            <tr>
                <td> <label> List price </label></td>
                <td>
                    <input name="price" type="number"/>
                </td>
            </tr>
            <tr>
                <td> <label> Discount </label></td>
                <td>
                    <input name="discount" type="number"/>%
                </td>
            </tr>
            <tr>
                <td colspan="2">
                 <center>
                 <button> Calculate </button>
                </center>
                   
                </td>
            </tr>
        </table>
        </form>
        
        
        <?php
        // put your code here
      
        ?>
     
    </body>
</html>
