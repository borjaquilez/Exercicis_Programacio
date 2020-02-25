<!--Realiza un programa que pinte una pirámide por pantalla.
La altura se debe pedir por teclado mediante un formulario.
La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen 
de las 5 que se deben dar a elegir mediante un formulario.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercici 4_6</title>
    <style>
        img{
            width: 30px;
            heigth: 30px;
        }
    </style>
</head>
<body>
<?php 
    $seeform=true;
    $filas=$_GET["filas"];
    $material=$_GET["menu"];

    if (isset($_GET["filas"] and $_GET["menu"])){
        $seeform=false;
        echo "<p>Ha construido usted una fantástica pirámide de $filas filas con $material.<p><br>
        <b>¡Puede decirle a sus amistades que admiren su gran proyecto arquitectónico!<p>";
    
        
        for ($counter=1;$counter<=$filas;$counter=$counter+1){/*Es declaren la variable i la incremental en la mateixa línia*/
           for ($counter2=1;$counter2<=$filas;$counter2=$counter2+1){
            echo "<img src=img/$material.jpg><br>";
           } 
        }
    }if ($seeform=true){
        ?>
        <form action="Exercici 4_6.php" method="get">
            <p>Construya Su propia Pirámide.</p>
            <p>Escriba el número de filas <input type="number" name="filas" min="1" max="10" placeholder="filas"></p>
            <p>Escoja el material para fabricar su Pirámide<p>
                <select name="menu">
                    <option>Ladrillos</option>
                    <option>Piedras</option>
                    <option>Maderos</option>
                    <option>Paja</option>
                    <option selected>Corazones</option>
                </select>
            <p><input type="submit" value="enviar"></p>
    <?php}?>
</body>
</html>