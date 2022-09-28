<?php
/**
 * @author Juan Garcia
 * Cargo la fecha de nacimiento en variables y calculo la edad.
 */
$dia=26;
$mes=11;
$año=2001;
$fecha_nacimiento = new DateTime("$dia-$mes-$año");
$hoy = new DateTime();
$edad = $hoy->diff($fecha_nacimiento);
echo "Naciste hace ",$edad->y," años ",$edad->m," meses ",$edad->d," dias.";


echo "</br>Código <a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicio3.php'>aqui</a>";
