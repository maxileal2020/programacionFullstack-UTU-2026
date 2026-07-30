<?php
$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        $suma += $i;
    }
}

echo "La suma de los multiplos de 3 es: $suma";
?>