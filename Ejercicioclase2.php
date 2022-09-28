<?php
/**
 * @author Juan Garcia
 * Sumar los 3 primeros números pares.
 */

$i = 1;
$res = 0;
$cont = 0;
do {
    if ($i%2 == 0) {
        $res += $i;
        $cont++;
    }
    $i++;
} while ($cont < 3);
echo "Resultado: ",$res;

echo "</br>Código <a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicioclase2.php'>aqui</a>";
