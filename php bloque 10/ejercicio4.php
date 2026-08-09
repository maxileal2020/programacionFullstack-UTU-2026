<?php
function calcularTotal($precio, $cantidad) {
    return $precio * $cantidad;
}

$total1 = calcularTotal(150, 3);
$total2 = calcularTotal(500, 10);

echo "Total 1: $total1 ";
echo "Total 2: $total2";
?>