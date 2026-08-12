<?php
$nombres = ["Ana", "Carlos", "Lucía", "Mateo", "Sofía"];
$nombreBuscado = "Lucía";

$encontrado = false;

foreach ($nombres as $nombre) {
    if ($nombre == $nombreBuscado) {
        $encontrado = true;
    }
}

if ($encontrado) {
    echo "El nombre fue encontrado";
} else {
    echo "El nombre no existe";
}
?>