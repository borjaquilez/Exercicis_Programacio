<?php
    $P1=$_GET["p01"];
    $P2=$_GET["p02"];
    $P3=$_GET["p03"];
    $P4=$_GET["p04"];
    $P5=$_GET["p05"];
    $P6=$_GET["p06"];
    $P7=$_GET["p07"];
    $P8=$_GET["p08"];
    $P9=$_GET["p09"];
    $P10=$_GET["p10"];
    $Result=$P1+$P2+$P3+$P4+$P5+$P6+$P7+$P8+$P9+$P10;

    if($Result<=10){
        echo "<p>¡Congratulations! Tu pareja parece ser totalmente fiel (Sólo lo parece...).";
    }else if($Result>10 and $Result<=22){
        echo "<p> ¡OJO, puede que te la estén pegando con otra persona! <br>
        Aunque es posible que sea algo sin importancia, No bajes la guardia.<p>";
    }else{
        echo "<p> Llevas unas astas que vas dejando marcas en las puertas.<br>
        Revisa los correos, las llamadas y confisca el móvil de tu pareja. <br>
        Y si tienes pasta, puedes ir contratando un Investigador Privado. ";
    }
?>