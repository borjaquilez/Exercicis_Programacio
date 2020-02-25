<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $dia=mt_rand(1,7);
    switch ($dia){
        case 1:
            $diasetmana="Dilluns";
            $assignatura="Creació de Pàgines web amb Llenguatge de Marques.";
        break;
        case 2:
            $diasetmana="Dimarts";
            $assignatura="Programació amb Llenguatge de Guió en Pàgines Web.";
        break;
        case 3:
            $diasetmana="Dimecres";
            $assignatura="El.loaboració de Fulles d'Estil.";
        break;
        case 4:
            $diasetmana="Dijous";
            $assignatura="Programació amb Llenguatge de Guió en Pàgines Web.";
        break;
        case 5:
            $diasetmana="Divendres";
            $assignatura="Publicació de Pàgines Web.";
        break;
        case 6:
            $diasetmana="Dissabte";
            $assignatura="Neteja a casa";
        break;
        case 7:
            $diasetmana="Diumenge";
            $assignatura="el vago al sofà.";
        break;
    }
    echo "<p>$dia</p>";
    echo "<p>Avui és $diasetmana i farem $assignatura </p>";
    ?>
</body>
</html>