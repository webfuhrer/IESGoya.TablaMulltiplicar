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
        
        <?php
        
        $numero_elegido=$_GET["numero"];
        echo "<table>";
        for($i=0; $i<10; $i++)
        {
            echo "<tr><td>".$numero_elegido."x".$i."=".($numero_elegido*$i)."</td></tr>";
            
           
        }
        echo "</table>";
        ?>
    </body>
</html>
