<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, td, tr{
        border: 2px solid black;
        padding: 2px;
    }
    </style>
    <?php
    $number= mt_rand(1, 10000);
    ?>
</head>
<body>
    <h1>Exercici 3.5</h1>
    <p>Muestra la tabla de multiplicar de un número aleatorio. <br>
    El resultado se debe mostrar en una tabla</p>
<?php
    echo "La taula del $number!!!"
?>
<table>
<?php
    for ($sum=0;$sum<11;$sum=$sum+1){/*Es declaren la variable i la incremental en la mateixa línia*/
        $result=$number*$sum;
        echo "<tr>";
        echo "<td>";
        echo "$number per $sum és igual a $result";
        echo "</td>";
        echo "</tr>";
    }
?>
</table>
<hr>
<?php
    echo "La taula del $number en bucle Do While!!!"
?>
<table>
<?php
    $per=0;
    do{
        $result=$number*$per;
        echo "<tr>";
        echo "<td>";
        echo "$number per $per és igual a $result";
        echo "</td>";
        $per=$per+1;
        echo "</tr>";   
    }
    while ($per<11);
?>
</table>
<hr>
<?="La taula del $number en bucle!!!"?>
<table>
<?php
    $sum=0;
    while($sum<11){
        $result=$number*$sum;
        echo "<td>";
        echo "$number per $sum és igual a $result";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
            $sum=$sum+1;   
    }
?>
<hr>

</body>
</html>