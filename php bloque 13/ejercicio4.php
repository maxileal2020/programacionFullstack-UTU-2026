<?php
$numeros = [15, 42, 8, 23, 4, 56, 19];

$mayor = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
}

echo "El número mayor es: $mayor";
?>