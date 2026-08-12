<?php
$nombres = ["Ana", "Carlos", "Lucía", "Mateo", "Sofía"];

echo "Usando for:";
for ($i = 0; $i < count($nombres); $i++) {
    echo $nombres[$i] ;
}

echo "<br>Usando foreach:" ;
foreach ($nombres as $nombre) {
    echo $nombre ;
}
?>