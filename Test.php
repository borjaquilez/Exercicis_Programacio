<?php
/*Aquesta etiqueta es col.loca on comença el codi, i es tanca amb
un interrogant i el símbol de més petit que (com a sota). */
echo "<p>Estic estudiant <b>programació<b></p>"; 
    /* Això és un comentari 
    de varies línies*/
    //Això és un comentari d'una sola línia

    echo "<p>primer texte</p>" , "<p>segon texte</p>";
    print "aquest comandament és semblant al de echo";
?>
<?= "<p>Posar el símbol - igual - és el mateix que posar echo, també és vàlid</p>"

    /*VARIABLES
    les variable són contenidoprs per enmagatzemar les dades
    que utilitza un programa. Són els noms que asociem a
    determinades dades.
    El simbol del dòlar és el que estableix les variables.*/
    $var_edad=15; //donem un valor i l'escrivim.
    //les variables, amb paraules compostes, s'escriuen la primera en majúscula i la segona en minúscula.
    //aquesta é la manera stàndard d'escriure-les.
    $sum_edad=$var_edad+20;
    echo $sum_edad;
    echo "<p>Paquito tiene $var_edad años</p>";
    echo '<p>Paquito tiene $var_edad años</p>';
    echo '<p>Paquito tiene' .$svar_edad. 'años</p>';
    echo '<p>Paquito tiene "15" años</p>';
    echo "<p>paquito tiene \15\ años</p>";
    /* OJO! les comilles dobles interpreten els valors,
però les comilles simpes interpreten literalment el que hem escrit!
La concatenación: S'escriuen dos punts a costat ui costat de la variable.*/
/*A la pàgina 129 dels apunts, */

    $precio=15;
    echo '<p>El cargador vale' .$precio.'</p>';
    echo '<p>El cargador vale' .isset($sumPrecio).'</p>'; 
/* Els Valors poden es poden escriure en negatiu!
També s'han d'escriure en sistema americà, és a dir, els decimals s'escriuen amb punts.*/

    ?>

    
    