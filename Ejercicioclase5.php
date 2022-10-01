<?php
/**
 * @author Juan Garcia
 * Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual correspondiente. Marcar el día actual en verde y los festivos en rojo.
 */
$dia=2;
$mes=10;
$año=2022;
$dias=[[1,1],[6,1],[15,4],[15,8],[12,10],[1,11],[6,12],[8,12]];
$hoy = new DateTime();
$dia1 = new DateTime("1-$mes-$año");
$fecha = $hoy->diff($dia1);

switch ($mes) {
    case 2:
        if ($año%4 == 0 && $año%100 != 0) {
            $dias = 29;
        }else{
            $dias = 28;
        }
        break;
    case 4: 
    case 6:
    case 9:
    case 11:
        $dias = 30;
        break;
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $dias = 31;
        break;
    default:
        echo "Mes incorrecto no existe";
        break;
}
$jd=gregoriantojd($mes,1,$año);
echo jddayofweek($jd,1);
$espacioblanco=0;
switch (jddayofweek($jd,1)) {
    case 'Tuesday':
        $espacioblanco=1;
        break;
    case 'Wednesday':
        $espacioblanco=2;
        break;
    case 'Thursday':
        $espacioblanco=3;
        break;
    case 'Friday':
        $espacioblanco=4;
        break;
    case 'Saturday':
        $espacioblanco=5;
        break;
    case 'Sunday':
        $espacioblanco=6;
        break;
    default:
        break;
}

echo "<table>";
echo "<tr>
<td>Lunes</td>
<td>Martes</td>
<td>Miercoles</td>
<td>Jueves</td>
<td>Viernes</td>
<td>Sabado</td>
<td>Domingo</td>
</tr>";
for ($i=1; $i <= $espacioblanco; $i++) { 
    echo "<td></td>";
}
for ($i=1; $i <= $dias; $i++) { 
    if ($i==$dia) {
        echo "<td style='background-color: green;text-align-last: center;'>$i</td>";
    }elseif(($espacioblanco+$i)%7 == 0){
        echo "<td style='background-color: red;text-align-last: center;'>$i</td>";
    }else{
        echo "<td style='text-align-last: center;'>$i</td>";
    }
    if (($espacioblanco+$i)%7 == 0) {
        echo "<tr>";
    }
}
echo "</table>";

echo "</br><a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicioclase5.php'>Código</a>";
