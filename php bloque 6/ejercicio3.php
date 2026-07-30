<?php
$total = 3500;

if ($total < 1000) {
    $descuento = 0;
} else if ($total < 5000) {
    $descuento = $total * 0.10;
} else {
    $descuento = $total * 0.20;
}

$totalFinal = $total - $descuento;

echo "Total original: $total <br>";
echo "Descuento: $descuento <br>";
echo "Total final: $totalFinal";
?>