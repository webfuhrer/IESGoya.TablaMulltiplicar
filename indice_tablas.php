<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="GET">
        <?php
        echo "<select name='numero'>";
        for ($i=0; $i<=10; $i++)
        {
            echo "<option value='$i'>Tabla del $i</option>";
        }
         echo "</select>";
         
        ?>
        <input type="submit" value="Ver tabla">
        </form>
    </body>
</html>
