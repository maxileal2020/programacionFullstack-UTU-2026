<?php
$nota = 9;

if ($nota < 1 || $nota > 12) {
    echo "Error: la nota debe estar entre 1 y 12";
} else if ($nota < 6) {
    echo "Insuficiente";
} else if ($nota <= 8) {
    echo "Aprobado";
} else if ($nota <= 10) {
    echo "Muy bueno";
} else {
    echo "Excelente";
}
?>