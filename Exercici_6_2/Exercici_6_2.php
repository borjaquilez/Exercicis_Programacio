<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function discount1($a,$b=0.10){
    return $a-($a*$b);
}
function discount2($a,$b=0.15){
    return $a-($a*$b);     
}

$total=0;
    $item=$_GET["item"];
    for($i=0;$i<count($item);$i++){
        if (isset($item[$i])){
            $total=$total+$item[$i];
            echo "You have choosen a ".$item_nom[$i] ."<br>";
        }
    }

    if ($total<=1000){
        echo "You are an scrooge an miserable person... Spent more money, you idiot!>
        I won't apply any discount to this mean price... YOU OWE ME $total!";
    }elseif ($total>1000 and $total<=5000){
        echo "Voy a hacerle un descuento del 10% por haber gastado hasta $total monedas!<br>
        El precio le queda en:"; 
        echo discount1($total); 
    }else{
        echo "Le llamaremos el Derrochador! Le aplicaré un 15% por haber gastado hasta $total monedas!<br>
        El precio le queda en:";
        echo discount2($total); 
    }

?> 
</body>
</html>