<?php
/**
 * @author Juan Garcia
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas.
 */

$N=10;
$M=10;
echo "<table border='1'>";
for ($i=0; $i <= $N; $i++) {
    if ($i == 0) {
        for ($x=0; $x <= $M; $x++) { 
            echo "<td><h3 style='margin: 10px;'>",$x,"</h3></td>";
        }
    }else {
        echo "<tr>";
        echo "<td><h3 style='margin: 10px;'>",$i,"</h3></td>";
        for ($x=1; $x <= $M; $x++) { 
            echo "<td style='background-color: aquamarine;'><h3 style='margin: 10px;'>",$i*$x,"</h3></td>";
        }
        echo "</tr>";
    }
}
echo "</table>";

echo "</br>Código <a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicioclase3.php'>aqui</a>";
