<?php
$precios = [1200, 500, 3000, 750, 1800];

foreach ($precios as $precio) {
    echo "\$$precio ";
}

$cantidad = count($precios);
echo "El array contiene $cantidad precios.";
?>