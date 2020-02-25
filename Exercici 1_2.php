<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <style>
        h1{
            font-family: 'Roboto'
        }
        th, tr, td{
            border: 1px solid black; text-align: center;
        }
        th{
            font-family: 'Roboto', sans-serif; color: red; font-style: strong;
        }
        tr, td{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $par01="Taula";
    $word01="Table";
    $par02="Cadira";
    $word02="Chair";
    $par03="Jaqueta";
    $word03="Jacket";
    $par04="Ratolí";
    $word04="Mouse";
    $par05="Pantalla";
    $word05="Screen";
    $par06="Portàtil";
    $word06="Laptop";
    $par07="Teclat";
    $word07="Keyboard";
    $par08="Llibreta";
    $word08="Notebook";
    $par09="Bolígraf";
    $word09="Ballpoint Pen";
    $par10="Texans";
    $word10="Throusers";
    ?>
   <h1>DICCIONARI CATALÀ-ANGLÈS!</h1>
   <table>
    <td><b>CATALÀ</b></td>
    <td><b>ANGLÈS</b></td>
   <tr>
    <td><?=$par01?></td>
    <td><?=$word01?></td>
    </tr>
    <tr>
    <td><?=$par02?></td>
    <td><?=$word02?></td>
    </tr>
    <tr>
    <td><?=$par03?></td>
    <td><?=$word03?></td>
    </tr>
    <tr>
    <td><?=$par04?></td>
    <td><?=$word04?></td>
    </tr>
    <tr>
    <td><?=$par05?></td>
    <td><?=$word05?></td>
    </tr>
    <tr>
    <td><?=$par06?></td>
    <td><?=$word06?></td>
    </tr>
    <tr>
    <td><?=$par07?></td>
    <td><?=$word07?></td>
    </tr>
    <tr>
    <td><?=$par08?></td>
    <td><?=$word08?></td>
    </tr>
    <tr>
    <td><?=$par09?></td>
    <td><?=$word09?></td>
    </tr>
    <tr>
    <td><?=$par10?></td>
    <td><?=$word10?></td>
    </tr>
   </table>
</body>
</html>