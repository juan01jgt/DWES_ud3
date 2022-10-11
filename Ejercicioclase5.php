<?php
/**
 * @author Juan Garcia
 * Dado el dia, mes y año almacenados en variables, escribir un programa que muestre el calendario mensual correspondiente. Marcar el día actual en verde y los festivos en rojo.
 */
$mes=10;
$año=2022;
// $dias=[[1,1],[6,1],[15,4],[15,8],[12,10],[1,11],[6,12],[8,12]];
$hoy = new DateTime();
$dia1 = new DateTime("1-$mes-$año");
$festmes=array();
$festivos = array(
    "nacional" => array(
        array("dia"=>1,"mes"=>1),
        array("dia"=>6,"mes"=>1),
        array("dia"=>1,"mes"=>5),
        array("dia"=>15,"mes"=>8),
        array("dia"=>12,"mes"=>10),
        array("dia"=>1,"mes"=>11),
        array("dia"=>6,"mes"=>12),
        array("dia"=>8,"mes"=>12),
    ),
    "comunidad" => array(
        array("dia"=>28,"mes"=>2),
    ),
    "local" => array(
        array("dia"=>8,"mes"=>9),
        array("dia"=>24,"mes"=>10),
    )
);

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
?>
<style>
    .dia{
        text-align-last: center;
    }
    .hoy{
        background-color: green;
        text-align-last: center;
    }
    .domingo{
        background-color: red;
        text-align-last: center;
    }
    .nacional{
        background-color: lightcoral;
        text-align-last: center;
    }
    .comunidad{
        background-color: orange;
        text-align-last: center;
    }
    .local{
        background-color: blue;
        text-align-last: center;
    }
</style>
<table>
<tr>
<td>Lunes</td>
<td>Martes</td>
<td>Miercoles</td>
<td>Jueves</td>
<td>Viernes</td>
<td>Sabado</td>
<td>Domingo</td>
</tr>
<?php
for ($i=1; $i <= $espacioblanco; $i++) { 
    echo "<td></td>";
}
foreach ($festivos as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if ($value2["mes"]==$mes) {
            array_push($festmes,[$key,$value2["dia"]]);
        }
    }
}
for ($i=1; $i <= $dias; $i++) { 
    if ($i==$hoy->format("d") && $mes==$hoy->format("m") && $año==$hoy->format("Y")) {
        echo "<td class='hoy'>$i</td>";
    }elseif(($espacioblanco+$i)%7 == 0){
        echo "<td class='domingo'>$i</td>";
        echo "<tr>";
    }else{
        $ban=0;
        foreach ($festmes as $key => $value) {
            if($value[1]==$i){
                echo "<td class='".$value[0]."'>$i</td>";
                $ban=1;
            }
        }
        if($ban==0){
            $ban=1;
            echo "<td class='dia'>$i</td>";
        }
    }
}
?>
</table>

</br><a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/Ejercicioclase5.php'>Código</a>
