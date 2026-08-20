<?php
$producto = [
    "nombre" => "Teclado",
    "precio" => 1200,
    "stock" => 5
];

echo "Producto original: <br>";
echo "Precio: $" . $producto["precio"] ;
echo "Stock: " . $producto["stock"] ;

$producto["precio"] = $producto["precio"] + 200;
$producto["stock"] = $producto["stock"] - 1;
$producto["categoria"] = "Periféricos";

echo "Producto actualizado: <br>";
echo "Precio: $" . $producto["precio"] ;
echo "Stock: " . $producto["stock"] ;
echo "Categoría: " . $producto["categoria"];
?>