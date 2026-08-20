<?php
$productos = [
    ["nombre" => "Teclado", "precio" => 1200, "stock" => 5],
    ["nombre" => "Mouse", "precio" => 500, "stock" => 8],
    ["nombre" => "Monitor", "precio" => 8000, "stock" => 3]
];

$nombreBuscado = "Mouse";

foreach ($productos as $producto) {
    if ($producto["nombre"] == $nombreBuscado) {
        echo "Producto encontrado: <br>";
        echo "Nombre: " . $producto["nombre"] . "<br>";
        echo "Precio: $" . $producto["precio"] . "<br>";
        echo "Stock: " . $producto["stock"];
    }
}
?>