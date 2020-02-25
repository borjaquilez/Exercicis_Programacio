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
    strong{
        font-size: 30px;
    }
    </style>
</head>
<body>
<?php
    $i=1;
    while ($i<100){
        echo "$i<br>";
        $i++;
    }
?>
<p>I s´ha acabat!</p>
<table>
<?php
    $i=1;
    while ($i<100){
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
        echo "</tr>";
        $i=$i+4;
    }
?> 
</table>
<table>
<?php
    $i=1;
    while ($i<100){
        if ($i%2!=0){
            echo "<tr>";
        }
        echo "<td>";
        echo $i;
        echo "</td>";
        if ($i%2==0){
            echo "</tr>";
        }
        $i=$i+1;
    }
?> 
</table>
<h2>EL BUCLE CENTINELA</h2>
<?php
    $i=0;
    $condition=false;
    while ($condition==false){
        $i=mt_rand(0,100);
        echo "$i. <br>";
        if ($i==99){
            $condition=true;
            echo "<strong>¡¡$i!!</strong>";
        }
    }
?>
<hr>
<h2>EL BUCLE CENTINELA 2: el método Do-While</h2>
<?php
    $i=0;
    do{
        echo "Hola.";
    }while ($i==10)
?>
<hr>
<h2>EL BUCLE FOR</h2>
<?php
/*El bucle "for" escriu totes les condicions a la mateixa línia!*/
    for ($i;$i<100;$i++){
        echo $i."<br>";
    }
?>

</body>
</html>