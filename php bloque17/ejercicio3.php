<?php
$productos = [
    ["nombre" => "Teclado", "precio" => 1200],
    ["nombre" => "Mouse", "precio" => 500],
    ["nombre" => "Monitor", "precio" => 8000],
    ["nombre" => "Pendrive", "precio" => 300]
];

$masCaro = $productos[0];

foreach ($productos as $producto) {
    if ($producto["precio"] > $masCaro["precio"]) {
        $masCaro = $producto;
    }
}

echo "El producto más caro es: " . $masCaro["nombre"] . " - Precio: $" . $masCaro["precio"];
?>