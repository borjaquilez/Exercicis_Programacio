<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function double($valor){
        return 2*$valor;
    } /*això és un "mini-programa" que podrem utilitzar durant tot el codi.
    Seri algo semblant a les classes i els id's de CSS*
    Les variables que establim dintre d'una funció NOMÉS SÓN VÀLIDES DINS DE LA FUNCIÓ!*/ 

    $x=4;
    $z=double($x);
    $y=double(9);
    $result=$y+$z;
    echo "$z+$y=$result <br>";
    echo bold("Hi there! How're You?");

    function bold($text){
        echo "<strong>$text</strong><br>";
    }/*Aquest segon exemple, és vàlid, però no se sol utilitzar*/

    function potencia($x, $exponente){
        $valor=1;
        for ($i=1;$i<=$exponente;$i++){
            $valor=$valor*$x;
        }
        return $valor;
    }
    echo potencia(3,3);

    function potencia2($y,$exponente=2){
        $valor=1;
        for ($i=1;$i<=$exponente;$i++){
            $valor=$valor*$y;
        }
        return $valor;
    }
    echo potencia2(3);


    ?>
</body>
</html>