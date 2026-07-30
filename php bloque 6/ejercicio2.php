<?php
$precioUnitario = 200;
$cantidad = 6;

$subtotal = $precioUnitario * $cantidad;

if ($cantidad >= 5) {
    $descuento = $subtotal * 0.10;
} else {
    $descuento = 0;
}

$totalFinal = $subtotal - $descuento;

echo "Subtotal: $subtotal <br>";
echo "Descuento: $descuento <br>";
echo "Total final: $totalFinal";
?>