<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<style>
    p{ 
        font-family: 'Dancing Script', cursive;
    }
</style>
</head>
<body>
    <?php
    /* CONDICIONS
LA BASE DE LA PROGRAMACIÓ: FER UNA CONPARACIÓ.
per exemple SI (If) la nota d'un alumne és superior a 5 és un aprobat,
si és menor, és un suspens.
*/
    $aprovats=0;
    $suspesos=0;
    $nota=5;
    $nota2=4.9;
    $nota3=7.6;
    $nota4=6.2;
    $nota5=3.5;
    $nota6=2.2;
    $nota7=9.7;
    $nota8=8.1;
    $nota9=1.6;
    $nota10=10;
    if($nota>5){//Les comparatives sempre s'escriuen amb dos iguals!)
        echo "<p>L'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
        // $aprovats++; significa el mateix que el comand anterior.
    }elseif ($nota==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }
    if($nota2>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota2==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }
    if($nota3>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota3==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }
    if($nota4>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota4==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }
    if($nota5>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota5==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }
    if($nota6>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota6==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }if($nota7>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota7==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }
    if($nota8>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota8==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }if($nota9>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota9==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }if($nota10>=5){
        echo "<p>l'Alumne està aprovat.</p>";
        $aprovats=$aprovats+1;
    }elseif ($nota10==5){
        echo "<p>L'alumne està aprovat pels pèls!</p>";
        $aprovats=$aprovats++;
    }else{
        echo "<p>L'Alumne està suspès</p>";
        $suspesos++;
    }
    echo "<p>El número <strong>d'aprovats és $aprovats</strong>.</p>";
    echo "<p>El número de <strong>suspesos és $suspesos<strong>.</p>";
    ?>
</body>
</html>