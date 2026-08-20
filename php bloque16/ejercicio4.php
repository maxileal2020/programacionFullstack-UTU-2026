<?php
$productos = [
    ["nombre" => "Teclado", "precio" => 1200, "stock" => 5],
    ["nombre" => "Mouse", "precio" => 500, "stock" => 8],
    ["nombre" => "Monitor", "precio" => 8000, "stock" => 3]
];

$valorTotal = 0;

foreach ($productos as $producto) {
    $valorProducto = $producto["precio"] * $producto["stock"];
    $valorTotal += $valorProducto;

    echo "Producto: " . $producto["nombre"] . " - Valor en inventario: $" . $valorProducto . "<br>";
}

echo "<br>Valor total del inventario: $" . $valorTotal;
?>