<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*EXERCICI ORIGINAL BORXA:*/
    
    function discount1($a,$b=0.10){
        return $a-($a*$b);
    }
    function discount2($a,$b=0.15){
        return $a-($a*$b);     
    }
    $total=0;
    if (isset($_GET["bow"])){
        $P1=$_GET["bow"];
        $total=$total+$P1;
    }
    if (isset($_GET["axe"])){
        $P2=$_GET["axe"];
        $total=$total+$P2;
    }
    if (isset($_GET["staff"])){
        $P3=$_GET["staff"];
        $total=$total+$P3;
    }
    if (isset($_GET["sword1"])){
        $P4=$_GET["sword1"];
        $total=$total+$P4;
    }
    if (isset($_GET["sword2"])){
        $P5=$_GET["sword2"];
        $total=$total+$P5;
    }
    if (isset($_GET["potion1"])){
        $P6=$_GET["potion1"];
        $total=$total+$P6;
    }
    if (isset($_GET["arrows"])){
        $P7=$_GET["arrows"];
        $total=$total+$P7;
    }
    if (isset($_GET["axe2"])){
        $P8=$_GET["axe2"];
        $total=$total+$P8;
    }
    if (isset($_GET["armor1"])){
        $P9=$_GET["armor1"];
        $total=$total+$P9;
    }
    if (isset($_GET["helmet"])){
        $P10=$_GET["helmet"];
        $total=$total+$P10;
    }
    if (isset($_GET["armor2"])){
        $P11=$_GET["armor2"];
        $total=$total+$P11;
    }
    if (isset($_GET["hammer"])){
        $P12=$_GET["hammer"];
        $total=$total+$P12;
    }

/*PROGRAMACIÓ INICIAL DE LES VARIABLES
    $P1=$_GET["bow"];
    $P2=$_GET["axe"];
    $P3=$_GET["staff"];
    $P4=$_GET["sword1"];
    $P5=$_GET["sword2"];
    $P6=$_GET["potion1"];
    $P7=$_GET["arrows"];
    $P8=$_GET["axe2"];
    $P9=$_GET["armor1"];
    $P10=$_GET["helmet"];
    $P11=$_GET["armor2"];
    $P12=$_GET["hammer"];
*/
    
    if ($total<=100){
        echo "No sea usted tacaño, ¡gaste unas pocas monedas de oro más para obtener un descuento!<br>
        El precio le queda igual, serán $total";
    }elseif ($total>100 and $total<=500){
        echo "Voy a hacerle un descuento del 10% por haber gastado hasta $total monedas!<br>
        El precio le queda en:"; 
        echo discount1($total); 
    }else{
        echo "Le llamaremos el Derrochador! Le aplicaré un 15% por haber gastado hasta $total monedas!<br>
        El precio le queda en:";
        echo discount2($total); 
    }


/* EXEMPLE PAU

function descuento($x){
    if ($x<100){
        return 0;
    }elseif ($x>=100 and $x<500){
        return $x*0.10;
    }else{
        return $x*0.15;
    }
}

if (!isset($_GET["precio"])){}
?>
    <form action="Exercic_5_2.php" method="GET">
        <p>
            PRECIO: <input type="number" name="precio" min="1" max="10000" autofocus="">
            euros
        </p>
        <input type="submit" value="Calcular">
    </form>
<?php
}else{
    $precio=$_GET["precio"];
    $resul=$precio-descuento($precio);
    echo "El resultado es <strong>$resul</strong>";
}*/
?>
</body>
</html>