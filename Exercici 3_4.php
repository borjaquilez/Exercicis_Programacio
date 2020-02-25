<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, td, tr{
        border: 2px solid red;
        padding: 2px;
    }
    </style>
</head>
<body>
<h1>Exercici 3.4</h1>
<h2>EN BUCLE WHILE</h2>
<table>
<?php
    $i=1;
    while ($i<=1000){
        echo "<tr>";
        echo "<td>";
        echo $i;
        echo "</td>";
        echo "<td>";
        echo $i+1;
        echo "</td>";
        echo "<td>";
        echo $i+2;
        echo "</td>";
        echo "<td>";
        echo $i+3;
        echo "</td>";
        echo "<td>";
        echo $i+4;
        echo "</td>";
        echo "</tr>";
        $i=$i+5;
    }
?> 
</table>
<hr>
<h2>EN BUCLE FOR</h2>
<table>
<?php
for  ($i=0;$i<1000;$i=$i+5){
        echo "<tr>";
        echo "<td>";
        echo $i+1;
        echo "</td>";
        echo "<td>";
        echo $i+2;
        echo "</td>";
        echo "<td>";
        echo $i+3;
        echo "</td>";
        echo "<td>";
        echo $i+4;
        echo "</td>";
        echo "<td>";
        echo $i+5;
        echo "</td>";
        echo "</tr>";
    }
?>    
</table>
<hr>
<h2>EN BUCLE DO-WHILE</h2>
<table>
<?php
    $i=0;
    do{
        echo "<tr>";
        echo "<td>";
        echo $i+1;
        echo "</td>";
        echo "<td>";
        echo $i+2;
        echo "</td>";
        echo "<td>";
        echo $i+3;
        echo "</td>";
        echo "<td>";
        echo $i+4;
        echo "</td>";
        echo "<td>";
        echo $i+5;
        echo "</td>";
        echo "</tr>";
        $i=$i+5;
    }
    while ($i<1000);
?>
</table>
<hr>
<h2>EN BUCLE CONCATENADO</h2>
<table>
<?php
    $i=1;
    while($i<=1000){
        $a=0;
        echo "<tr>";
        while($a<5){
            echo "<td>";
            echo $i;
            echo "</td>";
            $i=$i+1;
            $a=$a+1;
        }
        echo "</tr>";
    }
?>
<hr>
</table>
<h2>EN BUCLE CON IF</h2>
<table>
<?php
    $i=1;
    while($i<=1000){
        echo "<td>";
        echo $i;
        echo "</td>";
        if ($i%5==0){
        echo "</tr>";
        echo "<tr>";
        }
            $i=$i+1;
    }
?>
</table>
</body>

</html>