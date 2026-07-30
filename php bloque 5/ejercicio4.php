<?php
$edad = 15;
$tieneEntrada = true;
$acompañadoDeAdulto = true;

if (($edad >= 18 && $tieneEntrada) || $acompañadoDeAdulto) {
    echo "Puede entrar al evento";
} else {
    echo "No puede entrar al evento";
}
?>