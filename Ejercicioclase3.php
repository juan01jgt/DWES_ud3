<?php
/**
 * @author Juan Garcia
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas.
 */

$N=10;
$M=10;
echo "<table border='1'>";
//bucle para hacer la cabecera
for ($x=0; $x <= $M; $x++) { 
    echo "<td><h3 style='margin: 10px;'>",$x,"</h3></td>";
}
//bucle para hacer los tr y el primer td con el numero que multiplicamos
for ($i=1; $i <= $N; $i++) {
    echo "<tr>";
    echo "<td><h3 style='margin: 10px;'>",$i,"</h3></td>";
    //segundo bucle para crear los td con la multiplicación
    for ($x=1; $x <= $M; $x++) { 
        echo "<td style='background-color: aquamarine;'><h3 style='margin: 10px;'>",$i*$x,"</h3></td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "</br><a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicioclase3.php'>Código</a>";
