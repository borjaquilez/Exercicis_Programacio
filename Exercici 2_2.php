<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <?php
    $red=mt_rand(0,255);//Etiqueta pels números aleatoris ("rand" de random!)
    $green=mt_rand(0,255);
    $blue=mt_rand(0,255);
    echo "<style>body
        {background-color: rgb($red,$green,$blue);}
    </style>";
    ?>
    
    <!-- UNA ALTRA MANERA DE FER-HO, EN HTML ÉS:
    <style>
        body{
        background-color: rgb(<?=$red?>, <?=$green?>,<?=$blue?>);)
    };</style> -->
    
</head>
<body>
   
</body>
</html>