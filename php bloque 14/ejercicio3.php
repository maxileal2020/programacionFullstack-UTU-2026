<?php
$notas = [8, 5, 9, 4, 7, 3, 6];

$suma = 0;
$aprobados = 0;
$desaprobados = 0;

foreach ($notas as $nota) {
    echo "$nota <br>";
    $suma += $nota;

    if ($nota >= 6) {
        $aprobados++;
    } else {
        $desaprobados++;
    }
}

$promedio = $suma / count($notas);

echo "<br>Promedio: $promedio <br>";
echo "Aprobados: $aprobados <br>";
echo "Desaprobados: $desaprobados";
?>