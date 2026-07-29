<?php
$stockDisponible = 10;
$cantidadSolicitada = 4;
$precio = 500;
$presupuestoCliente = 2500;

$totalCompra = $precio * $cantidadSolicitada;

if ($cantidadSolicitada <= $stockDisponible) {
    echo "Hay stock suficiente ";
} else {
    echo "No hay stock suficiente ";
}

if ($presupuestoCliente >= $totalCompra) {
    echo "El cliente tiene presupuesto suficiente ";
} else {
    echo "El cliente no tiene presupuesto suficiente ";
}
?>