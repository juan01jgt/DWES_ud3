<?php
function existeCoordenada ($fila,$columna,$array) : bool{
    $Existe=false;
    foreach ($array as $key => $value) {
        if (($value['f'] == $fila) and ($value['c'] == $columna)) {
            $Existe = true;
        }
    }
    return $Existe;
}
?>