<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    define("PI",3.141592); //això és una constant.
    const Cander=3.141592; //és una altra menra d'escriure les constants.
    $var1=true; //true és equivalent a un 1.
    $var2=false; //false és l'equivalent a un 0.
    echo PI;
    /*les constants s'utilitzen per aquelles coses
    que sempre tindran el mateix valor.
    També s'escriuen sempre en majúscules, per poder identificar-les sempre.*/
    /*Operacions:
    les operacions més utilitxades són: +, -, *, i / a més del "resto": % */
    $var3=5;
    $var4=4;
    $multiplicacio=$var3*$var4;
    echo "<p>$var3 x $var4 són $multiplicacio.</p>";

    
?>
</body>
</html>