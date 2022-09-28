<?php
/**
 * @author Juan Garcia
 * Almaceno tres números en variables y los escribo en pantalla de manera ordenada.
 */

$numero = 1;
$numero2 = 1;
$numero3 = 6;

echo "Numeros ordenados: ";

if ($numero>$numero2 && $numero>$numero3) {
    echo $numero,", ";
    if ($numero2>$numero3) {
        echo $numero2,", ";
        echo $numero3;
    }else {
        echo $numero3,", ";
        echo $numero2;
    }
}elseif ($numero2>$numero && $numero2>$numero3) {
    echo $numero2,", ";
    if ($numero>$numero3) {
        echo $numero,", ";
        echo $numero3;
    }else {
        echo $numero3,", ";
        echo $numero;
    }
}else{
    echo $numero3,", ";
    if ($numero>$numero2) {
        echo $numero,", ";
        echo $numero2;
    }else {
        echo $numero2,", ";
        echo $numero;
    }
}


echo "</br>Código <a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicio1.php'>aqui</a>";
