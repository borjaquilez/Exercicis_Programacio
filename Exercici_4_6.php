<!DOCTYPE html>
<html lang="en">
<head>
<!--Realiza un programa que pinte una pirámide por pantalla.
La altura se debe pedir por teclado mediante un formulario.
La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen 
de las 5 que se deben dar a elegir mediante un formulario.
-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercici 4_6</title>
    <style>
        img{
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
<?php 
    if (isset($_GET["filas"]) and isset($_GET["menu"])){
        $filas=$_GET["filas"];
        $material=$_GET["menu"];
        echo "<p>Ha construido usted una fantástica pirámide de $filas filas con $material.<p><br>
        <b>¡Puede decirle a sus amistades que admiren su gran proyecto arquitectónico!<p>";
           
        for ($counter=1;$counter<=$filas;$counter++){/*Es declaren la variable, el final del bucle i la incremental en la mateixa línia*/
            for ($counter2=1;$counter2<=$counter;$counter2++){
                echo "<img src=img/$material.jpg>";            
            } echo"<br>";
         }
    }else{
        ?>
        <form action="Exercici_4_6.php" method="get">
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
        </form>    
    <?php
    }
?>
</body>
</html>