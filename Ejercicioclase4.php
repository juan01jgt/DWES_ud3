<?php
/**
 * @author Juan Garcia
 * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le corresponde. Cada celda será un enlace a una página que mostrará un fondo de pantalla con el colorseleccionado.
 */

echo "<table border='1'>";
for ($i=1; $i < 11; $i++) { 
    echo "<tr>";
    for ($x=1; $x < 11; $x++) { 
        echo "<td><h3>$i x $x = ",$i*$x,"</h3></td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "</br>Código <a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicioclase4.php'>aqui</a>";
