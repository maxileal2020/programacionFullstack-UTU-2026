<?php
$precio = 300;
$presupuesto = 2000;
$stock = 5;
$cantidadSolicitada = 4;

$totalCompra = $precio * $cantidadSolicitada;

if ($cantidadSolicitada <= $stock && $totalCompra <= $presupuesto) {
    echo "Compra realizada con éxito";
} else {
    echo "No se pudo realizar la compra";
}
?>