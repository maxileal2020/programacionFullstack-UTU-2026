<?php
$ahorro = 0;
$meses = 0;

while ($ahorro < 5000) {
    $ahorro += 500;
    $meses++;
    echo "Mes $meses: $ahorro <br>";
}

echo "Se necesitaron $meses meses para alcanzar la meta.";
?>