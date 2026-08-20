<?php
$productos = [
    ["nombre" => "Teclado", "precio" => 1200],
    ["nombre" => "Mouse", "precio" => 500],
    ["nombre" => "Monitor", "precio" => 8000]
];

foreach ($productos as $producto) {
    echo "Producto: " . $producto["nombre"] . " - Precio: $" . $producto["precio"] . "<br>";
}
?>