<?php
$edad = 10;
$precio = 500;

if ($edad < 12) {
    $precioFinal = $precio - ($precio * 0.5);
} else {
    $precioFinal = $precio;
}

echo "Precio final: $precioFinal";
?>