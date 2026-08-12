<?php
$notas = [8, 5, 9, 4, 7, 3, 6];

foreach ($notas as $nota) {
    if ($nota >= 6) {
        echo "Nota: $nota - Aprobado ";
    } else {
        echo "Nota: $nota - Desaprobado ";
    }
}
?>