<?php
function esPar($numero) {
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(esPar(8));
var_dump(esPar(7));
?>