<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    $edat=mt_rand(20,60);
    $salari=mt_rand(600,3000);
    $salari1=($salari*1.03);
    $salari2=($salari*1.1);
    $salari3=($salari*1.15);
    ?>
</head>
<body>
    <?php
    echo "<p>Sou original: $salari</p>";
    if($salari>2000){
        $notatxt="És vosté molt afortunat i guanya molts calers.";
    }elseif($salari>=1000 and $salari<2000){
        if($edat>45){
            $notatxt="És vosté regularment afortunat. El seu salari serà de $salari <br>
            i l'any vinent li apujarem un 3% perquè vostè cobri ($salari1)";
        }else{
            $notatxt="És vostè jove i afortunat. El seu salari serà de $salari <br>
            i l'any vinent li apujarem un 10% perquè vostè cobri ($salari2)";
        }
    }else{
        if($edat<30){
            $notatxt="És vostè relativament desgraciat. El seu salari és de $salari <br>
            i l'any vonent cobrarà exactament 1100€";
        }elseif($edat>30 and $edat<45){
            $notatxt="És vostè l'animal més desgraciat de tota la cadena alimentària.<br>
            El seu salari és d'uns $salari tristos euros, i l'any entrant li apujarem <br>
            només un 3% perquè cobri $salari1 €.";
        }else{
            $notatxt="És vostè bastant desgraciat. El seu salari és de $salari <br>
            i l'any vinent cobrarà un 15% més, perquè cobri $salari3.";
        }
    }
    echo "<p>$notatxt</p>";
    ?>
    
</body>
</html>