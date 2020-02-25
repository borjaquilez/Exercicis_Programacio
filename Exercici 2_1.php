<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $var=mt_rand(0,1);//Etiqueta pels números aleatoris ("rand" de random!)
    echo $var;
    if($var==0)
    {
        echo '<img src="/img/vader.gif" alt="vader">';
    }else{
        echo '<img src="/img/yoda.gif" alt="yoda">';
    }
    ?>
</body>
</html>