<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercici 4_5</title>
</head>
<body>
    <?php
    $seeform=true;
    if (isset($_GET["secret"])){
        $secret=$_GET["secret"];
        $good="1234";
        $counter=$_GET["counter"];
        
        if ($secret==$good){
            echo "Es usted un fenómeno y ha podido abrir la caja fuerte!";
            $seeform=false;
        }else if ($secret!=$good and $counter<4){
            echo "<p>Esa no es la combinación, <strong>Madarfacar</strong>!!!</p>";
            $counter=$counter+1;
            $seeform==true; 
        }else{
            echo "<p>Ha agotado usted todos los intentos, es de ser inútiles...</p>";
            $seeform=false;
        }
    }else{
        $counter=0;
    }
    
    if ($seeform==true){    
        ?>
        <form action="Exercici 4_5.php" method="get">
            <h1>INTRODUZCA AQUÍ EL NÚMERO SECRETO DE CUATRO CIFRAS DE LA CAJA FUERTE</h1>
            <p><input type="password" name="secret" minlength="4" maxlength="4" placeholder="Introduzca su password"></p>
            <p><input type="hidden" name="counter" value="<?=$counter?>"></p>
            <p><input type="submit" value="enviar"></p>
        </form>
    <?php } ?>
</body>
</html>