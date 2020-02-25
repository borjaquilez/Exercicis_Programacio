<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    $hora=mt_rand(0,23);
    $minuts=mt_rand(0,59)
    ?>
</head>
<body>
    <?php
    /*if($hora>0 and $hora<06){
        $notatxt="Bona nit! Són les $hora de la matinada!";
    }elseif($hora>=6 and $hora<13){
        $notatxt="Good Morning Vietnam! Són les $hora del matí!";
    }elseif($hora>=13 and $hora<20){
        $notatxt="Bona tarda Amics! Són les $hora del vespre!";
    }else{
        $notatxt="Bona nit a Tothom! Són les $hora de la nit!";
    }
    echo "<p>$notatxt</p>";*/

    if($hora>3 and $hora<06 and $minuts){
        $notatxt="Bona nit! Són les $hora i $minuts de la matinada!";
    }elseif($hora>=6 and $hora<13){
        $notatxt="Good Morning Vietnam! Són les $hora i $minuts del matí!";
    }elseif($hora>20 or $hora<3){
        $notatxt="Bona nit a Tothom! Són les $hora i $minuts de la nit!";
    }else{
        $notatxt="Bona tarda Amics! Són les $hora i $minuts del vespre!";
    }
    echo "<p>$notatxt</p>";
    ?>
</body>
</html>