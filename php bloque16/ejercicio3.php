<?php
$productos = [
    ["nombre" => "Teclado", "precio" => 1200, "stock" => 5],
    ["nombre" => "Mouse", "precio" => 500, "stock" => 8],
    ["nombre" => "Monitor", "precio" => 8000, "stock" => 3],
    ["nombre" => "Pendrive", "precio" => 300, "stock" => 15]
];

foreach ($productos as $producto) {
    if ($producto["precio"] > 1000) {
        echo "Producto: " . $producto["nombre"] . " - Precio: $" . $producto["precio"] . "<br>";
    }
}
?>