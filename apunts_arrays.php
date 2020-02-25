<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Els arrays són estructures d'elements que fan que un element tingui "Dimensions"
Els arrays comencen sempre desde 0.
És una forma de, amb una única fórmula.

Els tipus de dades que coneixem no permeten manegar grans quantitats de dades a la vegada.
En la gran majoria de llenguatges es poden enmagatzemar ó agrupar una serie de variables
del mateix tipus en una mateixa estructura, coneguda com "Array", que permet referir-nos a tots els elements,
però també accedir individualment a cadascun d'ells.
Els arrays són col.leccions de dades a les que assignem un identificador.
Els arrays són variables amb capacitat d'enmagatzemar una sèrie de valors. per accedir a una dada de la col.lecció,
s'ha d'utilitzar la seva posició dintre de l'Array. 
La posició és un número enter que es diu "índex". Així, per accedir a la cinquena nota, utilitzarem
l'expressió $nota[4], ja que els arrays comencen sempre per 0.
Aquesta és la definicio d'Array per tots els lleguatges, però en PHP els arrays sçón més complexes,
ja uqe admeten dades de diferents tipus (associen un valor i una clau).

4.3.2. ARRAYS ESCALARS:
els arrays escalars són un conjunt de valors als que hi accedim mitjançant un índex (un número sencer
en el que el primer número de l'índex és 0. Les notes es poden enmagatzemar dde la següent manera:
$nota[0]=7;
$nota[1]=8;
$nota[2]=6;
$nota[3]=6;
$nota[4]=5;
$nota[5]=4;
Accedir a un anota, requereix de conèixer l'índex. No cal declarar l'array,
simplement s'utilitza. Aquest valor següent és vàlid:
$nota[0]=18;
$nota[1]="Hola";
$nota[2]=true;
$nota[3]=3.4;
Les dades poden ser heterogènies, de diferent tipus. I podem assignar
valors a un array sense indicar un index:


-->
    <?php
    /*La primera forma de fer un array és:
        $item[0]=50;
        $item[1]=35;
        $item[2]=47;
        $item[3]=73;
      
    La segona manera de fer-ho és:  
        
       $item=array(50,35,47,73);
        for($i=0;$i<=3;$i++){
            echo $item[$i]."<br>";
        }

    
    A més, el contador del bucle del array es pot definir amb un "count"     
        */
        $item=array(50,35,47,73,23,12,45,54,78,43);
        $frase="demà és la festa de la llum.";
        for($i=0;$i<count($item);$i++){
            echo $item[$i]."<br>";
        }




    ?>
</body>
</html>