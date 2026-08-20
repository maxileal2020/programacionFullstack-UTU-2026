<?php
$producto = [
    "nombre" => "Mouse",
    "precio" => 800,
    "stock" => 10
];

$cantidadSolicitada = 3;

if ($cantidadSolicitada <= $producto["stock"]) {
    $total = $producto["precio"] * $cantidadSolicitada;
    $producto["stock"] = $producto["stock"] - $cantidadSolicitada;

    echo "Venta realizada <br>";
    echo "Producto: " . $producto["nombre"] . "<br>";
    echo "Cantidad vendida: $cantidadSolicitada <br>";
    echo "Total: $" . $total . "<br>";
    echo "Stock restante: " . $producto["stock"];
} else {
    echo "Error no hay stock suficiente";
}
?>