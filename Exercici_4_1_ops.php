<style>
    table, td, tr{
        border: 2px solid black;
        padding: 2px;
    }
    </style>
<?php
    $number=$_GET["num"];
    ?>
<body>
    <h1>Exercici 4.1</h1>
<?php
    echo "La taula del $number!!!"
?>
<table>
<?php
    for ($sum=0;$sum<11;$sum=$sum+1){
        $result=$number*$sum;
        echo "<tr>";
        echo "<td>";
        echo "$number per $sum és igual a $result";
        echo "</td>";
        echo "</tr>";
    }
?>
</table>