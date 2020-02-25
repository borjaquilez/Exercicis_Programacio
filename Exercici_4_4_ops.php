<?php
    $number1=$_GET["money"];
?>
<body>
    <?php
    $irpf=$number1*0.15;
    $iva=$number1*0.21;
    $result=$number1-$irpf+$iva;
    echo "Su factura asciende a $result euros";
    ?>
</body>