<!doctype html>
<html lang="en">
  <head>
    <head>
        <title>The Spicy Cauldron</title>
        <link rel="icon" href="https://img.pngio.com/halloween-black-cauldron-png-clipart-image-gallery-yopriceville-cauldron-png-4122_3481.png" type="image/gif" sizes="16x16">
        <!-- Required meta tags Aquí un comentari de prova!!!-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="El Caldero Caliente: ¡Los mejores productos para la vida en el medievo!">
        <meta name="keywords" content="weapons,armors,helmets,potions,shields,robes.">
        <meta name="author" content="Franz Hauser">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Trade+Winds&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    
    </head>
  <body>
    <?php
    $var=mt_rand(0,1,3);//Etiqueta pels números aleatoris ("rand" de random!)
    echo $var;
    if($var==0){
        echo '<div class="error"><h1>404 error!</h1><h2>Page not found!</h2><p>You'.'re too drunk to find our Amazing Shop!</p><a href="javascript:history.back()" class="btn btn-primary">Please go back to the previous page</a></div>';
    }if($var==1){
        echo '<img src="https://takingonhealthy.com/wp-content/uploads/2019/05/mob_TOHhero_MansBestFriend_1334x630_2.jpg">';
    }else{
        echo '<img src="https://i2-prod.mirror.co.uk/incoming/article5869728.ece/ALTERNATES/s615b/Tickling-is-torture.jpg">';
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>