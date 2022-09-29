<?php
/**
 * @author Juan Garcia
 * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le corresponde. Cada celda será un enlace a una página que mostrará un fondo de pantalla con el colorseleccionado.
 */

$x=255;
$incremento=51;
echo "<table border='1'>";
for ($r=0; $r <= $x; $r+=$incremento) {
    for ($g=0; $g <= $x; $g+=$incremento) {
        echo "<tr>";
        for ($b=0; $b <= $x; $b+=$incremento) {
            echo "<td  style='background-color: rgb($r,$g,$b)'><a href=''><h4 style='margin: 0px 15px 0px 15px;'>",RGBToHex($r,$g,$b),"</h4></a></td>";
        }
        echo "</tr>";
    }
}
echo "</table>";

function RGBToHex($r,$g,$b)
{
	$hex = "#";
	$hex.= str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
	$hex.= str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
	$hex.= str_pad(dechex($b), 2, "0", STR_PAD_LEFT);
	return $hex;
}

echo "</br><a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicioclase4.php'>Código</a>";
