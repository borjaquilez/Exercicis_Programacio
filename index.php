<html>
    <head>
        <title>La meva primera p&agravegina web total!</title>
        <meta charset="utf-8">
    </head>
    <body>
   <!-- Els comentaris en HTML, que es veuran al "Ver código fuente", però no a la web,
   s'escriuen amb  el tag, l'exclamació. i els dos guions, i s'han de tancar,
   com qualsevol etiqueta-->
    <?php
    //els comentaris en php s'escriuen amb les dues barres. No cal tancar-los!
    /*Els comentaris amb varies línies,
    s'han d'obrir amb la barra i l'asterisc,
    i també s'han de tancar!*/
    $x=10; //Això és una variable de x = 10
        echo "<p>Hem començat a estudiar HTML i <strong>PHP!</strong></p>";
        echo $x; // Ara escrivim el valor de x per pantalla.   
    ?>
        <h1>Aquesta &eacutes la meva primera web</h1>
        <p>LLISTAT DE TAGS B&AgraveSICS D'HTML</p>
        <p><strong>Text en Negreta!!!</strong> (Compte!: el text Strong no és el mateix que el text en negreta!)</p>
        <p><i>Text en Cursiva!!!</i></p>
        <p><u>Text Subratllat!!!</u></p>
        <p>Aquest text és una <b>prova de Caràcters</b> UTF-8: ñ - ç</p>
        <p>Això és <a href="https://www.marvel.com/">un enllaç</a> a la web de Marvel</p>
        <p>I aquí... la meva primera Taula!</p>
        <table>
            <tr>
                <td>
                    <p style="color: darkslateblue;"><b>La primera fila!</b></p>
                </td>
                <td>
                    <p>1</p>
                </td>
                <td>
                    <p>2</p>
                </td>
                <td>
                    <p>3</p>
                </td>              
            </tr>
            <tr>
                <td>
                    <p style="color:firebrick;"><b>La segona fila!</b></p>
                </td>
                <td>
                    <p>4</p>
                </td>
                <td>
                    <p>5</p>
                </td>
                <td>
                    <p>6</p>
                </td>              
            </tr>
            <tr>
                <td>
                    <p style="color:green;"><b>La tercera fila!</b></p>
                </td>
                <td>
                    <p>7</p>
                </td>
                <td>
                    <p>8</p>
                </td>
                <td>
                    <p>9</p>
                </td>              
            </tr>
            </table>
    </body>
</html>