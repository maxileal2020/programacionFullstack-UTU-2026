<?php
$productos = [
    ["id" => 1, "nombre" => "Teclado", "precio" => 1200, "stock" => 5],
    ["id" => 2, "nombre" => "Mouse", "precio" => 500, "stock" => 8],
    ["id" => 3, "nombre" => "Monitor", "precio" => 8000, "stock" => 3]
];

$idBuscado = 2;

foreach ($productos as $producto) {
    if ($producto["id"] == $idBuscado) {
        echo "Producto encontrado: <br>";
        echo "ID: " . $producto["id"] . "<br>";
        echo "Nombre: " . $producto["nombre"] . "<br>";
        echo "Precio: $" . $producto["precio"] . "<br>";
        echo "Stock: " . $producto["stock"];
    }
}
?>