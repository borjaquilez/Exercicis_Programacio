<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*1 Realiza un programa que pida dos números y luego muestre el resultado pudiendo elegir entre las siguientes operaciones:
Suma Resta Multiplicacion Division*/
function sum($sum1, $sum2){
    return $sum1+$sum2;
}
function minus($minus1, $minus2){
        return $minus1-$minus2;
}
function mult($mult1, $mult2){
    return $mult1*$mult2;
}
function divis($divis1, $divis2){
    return $divis1/$divis2;
}
function potents($x, $exponente){
    $valor=1;
    for ($i=1;$i<=$exponente;$i++){
        $valor=$valor*$x;
    }
    return $valor;
}
if (isset($_GET["one"]) and isset($_GET["two"]) and isset($_GET["ops"])){
        $ops=$_GET["ops"];
        $numberone=$_GET["one"];
        $numbertwo=$_GET["two"];
    if ($ops=="suma"){
        echo sum($numberone,$numbertwo);
    }else if ($ops=="resta"){      
        echo minus($numberone,$numbertwo);
    }else if ($ops=="multiplicación"){       
        echo mult($numberone,$numbertwo);
    }else if ($ops=="división"){       
        echo divis($numberone,$numbertwo);
    }else if ($ops=="elevar potencias"){
        echo potents($numberone,$numbertwo);
    }
}else{  
?>
<form action="Exercici_5_1.php" method="get">
            <p>Realice una operación matemática...</p>
            <p>Escriba aquí el primer número <input type="number" name="one" min="1" max="1000000" placeholder="primer número"></p>
            <p>Escriba aquí el segundo número <input type="number" name="two" min="1" max="1000000" placeholder="segundo número"></p>
            <p>Indique qué operación desea realizar<p>
                <select name="ops">
                    <option selected>suma</option>
                    <option>resta</option>
                    <option>multiplicación</option>
                    <option>división</option>
                    <option>elevar potencias</option>
                </select>
            <p><input type="submit" value="enviar"></p>
        </form>
    <?php
    }
    ?>   
</body>
</html>