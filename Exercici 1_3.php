<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    
</head>
<body>
    <h1>Operacions Matemàtiques amb PHP.</h1>
   <?php
    $x=144;
    $y=999;
    $suma=$x+$y;
    $resta=$y-$x;
    $multip=$x*$y;
    $divis=$y/$x;
    echo "<p>El valor de x és $x i el valor de y és $y";
    echo "<p>La suma de $x més $y és igual a $suma.</p>";
    echo "<p>La resta de $y menys $x és igual a $resta.</p>";
    echo "<p>El resultat de multiplicar $x per $y és igual a $multip.</p>";
    echo "<p>La divisió de $y entre $x és igual a $divis.</p>";
   ?>
</body>
</html>