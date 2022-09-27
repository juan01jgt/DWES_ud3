<?php
/**
 * @author Juan Garcia
 * Cargo en variables mes y año e indico el número de días del mes. Utilizo la estructura de control switch
 */

$mes=9;
$año=2022;
switch ($mes) {
    case 2:
        if ($año%4 == 0 && $año%100 != 0) {
            echo "El mes ",$mes," del año ",$año," tiene 29 dias";
        }else{
            echo "El mes ",$mes," del año ",$año," tiene 28 dias";
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "EL mes ",$mes," del año ",$año," tiene 30 dias";
        break;
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "EL mes ",$mes," del año ",$año," tiene 31 dias";
        break;
    default:
        echo "Mes incorrecto no existe";
        break;
}

echo "</br>Código <a href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicio2.php'>aqui</a>";
