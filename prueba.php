<?php
$procesaformulario = false;
$numale = [];
$aciertos = 0;

if (isset($_POST['enviar'])) {
    $procesaformulario=true;

}
else{
    $procesaformulario=false;
    //genera numale
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='tablademultiplicar.php' method='post'>
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
                echo "<td  class='num'><input type='number' name='$r$g'></td>";
            }
            else {
                echo "<td  class='num'><h4 style='margin: 0px 15px 0px 15px;'>",$r*$g,"</h4></td>";
            }
            
        }
        echo "</tr>";
    }
    
</body>
</html>