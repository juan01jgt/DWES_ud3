<?php
/**
 * @author Juan Garcia
 * Mostrar una tabla de multiplicar con espacios en blanco para rellenar.
 */

function aleatorio($x){
    return rand(1,$x);
}

$x=5;
echo "<form action='tablademultiplicar.php' method='post'>
<table border='1'>
<td style='text-align: center;'><h4 style='margin: 0px 15px 0px 15px;'>X</h4></td>";
for ($i=1; $i <= $x; $i++) { 
    echo "<td style='text-align: center;'><h4 style='margin: 0px 15px 0px 15px;'>",$i,"</h4></td>";
}
for ($r=1; $r <= $x; $r++) {
    $ale=aleatorio($x);
    echo "<tr>";
    for ($g=1; $g <= $x; $g++) {
        if ($g==1) {
            echo "<td style='text-align: center;'><h4 style='margin: 0px 15px 0px 15px;'>",$r*$g,"</h4></td>";
        }
        if ($g==$ale) {
            echo "<td  class='num'><input type='number' name='num$r$g'  ></td>";
        }
        else {
            echo "<td  class='num'><h4 style='margin: 0px 15px 0px 15px;'>",$r*$g,"</h4></td>";
        }
        
    }
    echo "</tr>";
}
echo "</table>
<input type='submit' name='enviar' value='Enviar'>";

echo "</br><a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/tablademultiplicar.php'>Código</a>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .num{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>
<body>
</body>
</html>