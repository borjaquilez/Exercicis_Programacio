<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Los Múltiples de 5 son:</h2>
<?php
    $i=0;
    while ($i<100){
        $i=$i+5;
        echo "$i, ";
    }
?>
<h2>Hecho de otra forma:</h2>
<?php
    $i=1;
    while ($i<100){
        if($i%5==0);
        $i=$i+1;
        echo "$i, ";

    }
?>
</body>
</html>