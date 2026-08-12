<?php
$numeros = [10, 20, 30, 40, 50];

$suma = 0;
foreach ($numeros as $numero) {
    $suma += $numero;
}

$cantidad = count($numeros);
$promedio = $suma / $cantidad;

echo "Suma total: $suma ";
echo "Cantidad de elementos: $cantidad ";
echo "Promedio: $promedio";
?>