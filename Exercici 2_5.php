<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    $nota1=mt_rand(0,10);
    $nota2=mt_rand(0,10);
    $nota3=mt_rand(0,10);
    $notamitjafinal=(($nota1+$nota2+$nota3)/3);
    $notafinal=intval($notamitjafinal);
   ?>
    
</head>
<body>
    <?php
     switch ($notafinal){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            $notatxt="SUSPÈS";
        break;
        case 5:
            $notatxt="APROVAT SUFICIENT";
        break;
        case 6:
            $notatxt="BÉ";
        break;
        case 7:
        case 8:
            $notatxt="APROVAT NOTABLE";
        break;
        case 9:
            $notatxt="APROVAT EXCEL·LENT";
        break;
        case 10:
            $notatxt="MATRÍCULA";
        break;    
    }

   
    /*if($notamitjafinal<5){
        $notatxt="suspès";
    }elseif($notamitjafinal>=5 and $notamitjafinal<6){
        $notatxt="aprovat just";
    }elseif($notamitjafinal>=6 and $notamitjafinal<7){
        $notatxt="aprovat amb bé";
    }elseif($notamitjafinal>=7 and $notamitjafinal<9){
        $notatxt="aprpvat amb notable";
    }elseif($notamitjafinal>=9 and $notamitjafinal<10){
        $notatxt="aprovat amb excel.lent";
    }else{
        $notatxt="aprovat amb matrícula";
    }
     */
   
    echo
    "<p>La nota de la teva primera evaluació és $nota1.<br>
    La nota de la teva segona evaluació és $nota2.<br>
    La nota de la teva tercera evaluació és $nota3.<br>
    La teva nota mitja final és $notamitjafinal.<br>
    Hem arrodonit la nota, i queda en $notafinal.<br>
    Serà just o no, però estàs $notatxt.</p>";
    ?>
    
</body>
</html>