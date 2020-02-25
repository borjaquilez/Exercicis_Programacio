<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<?php
    $random=mt_rand(0,700000000);
?>
</head>
<body>
    <?php
        echo "<p>El número incial és el $random.<br>
        i la seqüència resultant és:</p>";
    ?>
    <?php
    $i=$random;
    while ($i<$random+100){
        echo "$i, ";//La i a $i és el contador. La màquina "conta" fins a que li diguem//
        $i++;
    }
    ?>
    <hr>
    <table>
    <?php
    $i=$random; //$x és la condició!//
    while ($i<$random+100){
        echo "<tr>";
        echo "<td>";
        echo $i;
        echo "</td>";
        echo "</tr>";
        $i=$i+1;
    }
    ?>
    </table>
</body>
</html>