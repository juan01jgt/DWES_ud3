<?php

/**
 * @author Juan Garcia
 * Mostrar una tabla de multiplicar con espacios en blanco para rellenar.
 */

$procesaformulario = false;
$numale = [];
$aciertos = 0;
$x = 5;

if (isset($_POST['enviar'])) {
    $procesaformulario = true;
} else {
    $procesaformulario = false;
    for ($i = 0; $i < $x; $i++) {
        $ale = aleatorio($x);
        array_push($numale, $ale);
    }
}

function aleatorio($x)
{
    return rand(1, $x);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilotablamultiplicar.css" />
</head>
<body>
<form action='tablademultiplicar.php' method='post'>
<table border='1'>
<td style='text-align: center;'><h4 style='margin: 0px 15px 0px 15px;'>X</h4></td>
<?php
for ($i = 1; $i <= $x; $i++) {
    ?><td style='text-align: center;'><h4 style='margin: 0px 15px 0px 15px;'><?php echo $i ?></h4></td>
    <?php
}
for ($r = 1; $r <= $x; $r++) {
    ?><tr>
    <?php
    for ($g = 1; $g <= $x; $g++) {
        if ($g == 1) {
            ?><td style='text-align: center;'><h4 style='margin: 0px 15px 0px 15px;'><?php echo $r * $g ?></h4></td><?php
        }
        if ($g == $numale[$r-1]) {
            ?><td  class='num'><input type='number' name='numeros<?php echo "[".$r."][".$g."]" ?>'></td><?php
        } else {
            ?><td  class='num'><h4 style='margin: 0px 15px 0px 15px;'><?php echo $r * $g ?></h4></td><?php
        }
    }
    ?></tr><?php
}
?>
</table>
<input type='submit' name='enviar' value='Enviar'>
</br><a target='_blank' href='https://github.com/juan01jgt/DWES_ud3/blob/main/tablademultiplicar.php'>Código</a>
</body>
</html>