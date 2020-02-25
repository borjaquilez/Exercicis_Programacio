<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    $var=mt_rand(1,7);  
    ?>
    
</head>
<body>
    <?php
    echo $var;
    if($var==1){
        echo "<p>Dilluns:Creació de Pàgines amb el llenguatge de Marques.</p>";
    }elseif ($var==2){
        echo "<p>Dimarts: UF1305-Programació amb llenguatge de Guió en Pàgines Web.</p>";
    }elseif ($var==3){
        echo "<p>Dimecres:(a veure si comencem ja!) El.laboració de fulls d'estil.</p>";
    }elseif ($var==4){
        echo "<p>Dijous: UF1305-Programació amb llenguatge de Guió en Pàgines Web (Again!).</p>";
    }elseif ($var==5){
        echo "<p>Divendres: Publicació de Pàgines Web (en sevridors i mandangues!).</p>";
    }elseif ($var==6){
        echo "<p>Dissabte:Fem neteja de casa, que tota la setman hem estat de curs!.</p>";
    }else{  
        echo "<p>Diumenge, el día del Senyor!</p>";
    }
    ?>
    /*La Sentència Swich pot substituïr el condicional "if"/"else if"/"else"
    Funcionaria de la següent manera: 
    <?php
    $nota=mt_rand(0,10);
    switch ($nota){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            $notatxt="Suspès";
        break;
        case 5:
            $notatxt="Suficient";
        break;
        case 6:
            $notatxt="Bé";
        break;
        case 7:
        case 8:
            $notatxt="Notable";
        break;
        case 9:
            $notatxt="Excel·lent";
        break;
        case 10:
            $notatxt="Matrícula";
        break;
    }
    echo "<p>La teva nota és $nota, per tant, la teva evaluació  és $notatxt.</p>";
    ?> */
</body>
</html>