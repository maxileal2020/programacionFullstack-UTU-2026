<?php
$numeros = [15, 42, 8, 23, 4, 56, 19];

$suma = 0;
$mayor = $numeros[0];
$menor = $numeros[0];
$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    echo "$numero ";
    $suma += $numero;

    if ($numero > $mayor) {
        $mayor = $numero;
    }

    if ($numero < $menor) {
        $menor = $numero;
    }

    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

$promedio = $suma / count($numeros);

echo "<br>Suma: $suma ";
echo "Promedio: $promedio ";
echo "Mayor: $mayor ";
echo "Menor: $menor ";
echo "Pares: $pares ";
echo "Impares: $impares";
?>