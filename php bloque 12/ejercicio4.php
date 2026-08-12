<?php
$numeros = [10, 20, 30, 40, 50];

// Con for manual
$sumaManual = 0;
for ($i = 0; $i < count($numeros); $i++) {
    $sumaManual += $numeros[$i];
}
echo "Suma con for manual: $sumaManual ";

// Con array_sum()
$sumaAutomatica = array_sum($numeros);
echo "Suma con array_sum(): $sumaAutomatica";
?>