<?php
    if (isset($_POST["word"])){
        $spanish=$_POST["word"];

        $translation=array(
            "Alquimista" => "Alchemist",
            "Petate" => "Bedroll",
            "Camello" => "Camel",
            "Druid" => "Druida",
            "Esmeralda" => "Emerald",
            "Mayal" => "Flail",
            "Galera" => "Galley",
            "Martillo" => "Hammer",
            "Tinta" => "Ink",
            "Javalina" => "javelin",
            "Dragonshard" => "esquirla de dragón",
            "Escalera" => "Ladder",
            "Grilletes" => "Manacles",
            "Obsidiana" => "Obsidiana",
            "Colcha" => "Padded",
            "Pica" => "Quarterstaff",
            "Espada" => "Rapier",
            "Alforja" => "Saddlebag",
            "Yesquero" => "Tinderbox",
            "Vestiduras" => "Vestment",
            "Varita" => "Wand",
            "Caballo de batalla" => "Warhorse",
            "Xilofon" => "Xylophone",
            "Yate" => "Yatch");
        echo "La palabra " .$spanish ." se traduce al ingés como " .$translation[$spanish] .".";
    }
    else{
        echo "Qué lástima... No conocemos la traducción de esta palabra...<br>Pero denos un poco más de tiempo, ¡estamos mejorando nuestro diccionario freak!";
    }
?>

    

