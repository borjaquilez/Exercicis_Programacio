<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    div{
        position:fixed;
        width: 50px;
        height: 50px;
    }
    </style>
</head>
<body>
    <!--Crea una ṕagina que muestre 2000 cuadrados de colores aleatorios
    de manera que estén colocados también de forma aleatoria por la pantalla. 
    Cada cuadrado debe medir 50x50 pixels utilizando la siguiente definicion:
div{
            position:fixed;
            width:60px;
            height:60px;
        }
<div style='left:x; top:y; background-color:rgb(colorR,colorG,colorB)'></div>
    -->
    <?php
    for ($box=1;$box<=2000;$box++){ /*OJO!Primer establim el bucle, i després les variables!!!*/
    $red= mt_rand(0,255);
    $green= mt_rand(0,255);
    $blue= mt_rand(0,255);
    $a= mt_rand(0,1);
    $x= mt_rand(0,100);
    $y= mt_rand(0,100);
        echo "<div style='left:$x%; top:$y%; background-color:rgba($red,$green,$blue,$a)'></div>";
    }
    ?>

</body>
</html>