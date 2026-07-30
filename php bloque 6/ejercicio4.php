<?php
$producto = "Mouse";
$precio = 800;
$stock = 20;
$cantidadSolicitada = 12;

if ($cantidadSolicitada <= $stock) {
    $subtotal = $precio * $cantidadSolicitada;

    if ($cantidadSolicitada >= 10) {
        $descuento = $subtotal * 0.15;
    } else {
        $descuento = 0;
    }

    $totalFinal = $subtotal - $descuento;

    echo "Producto: $producto <br>";
    echo "Subtotal: $subtotal <br>";
    echo "Descuento: $descuento <br>";
    echo "Total final: $totalFinal";
} else {
    echo "Error: no hay stock suficiente";
}
?>