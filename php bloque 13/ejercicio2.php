<?php
$notas = [8, 5, 9, 4, 7, 6, 3];

$contador = 0;

foreach ($notas as $nota) {
    if ($nota >= 6) {
        $contador++;
    }
}

echo "Cantidad de notas aprobadas: $contador";
?>