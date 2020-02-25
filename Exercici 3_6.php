<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    $number= mt_rand(1,20);
    $primo=true;
    ?>
</head>
<body>
    <h1>Exercici 3.7</h1>
    <p>Escribe un programa que diga si un número generado de manera aleatoria, es o no primo. (Un número primo es aquel que sólo es divisible por el mismo y 1)
    </p>
    <?php
        for ($i=2;$i<$number and $primo==true;){
            if ($number%$i==0){
            $primo==false;
            }
        }
        if ($primo==true){
                echo "<strong>¡¡$number És número Prim!!</strong>";
        }else{
            echo"$number No es primo";
        }
    ?>
</body>
</html>