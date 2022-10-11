<?php
/**
 * proceso de formularios con una suma
 * @author Juan Garcia Toril
 */

$num1=0;
$num2=0;
$error1="";
$error2="";
$procesaformulario=false;

if (isset($_POST['enviar'])) {
    $procesaformulario=true;
    $num1=$_POST['num1'];
    if (empty($_POST['num1'])) {
        
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos numeros</title>
</head>
<body>
    <?php
    if ($procesaformulario) {
        echo $num1+$num2;
    }
    else{
        echo "<form action='sumanumeros.php' method='post'>
        <input type='number' name='num1' value='$num1'><br>
        <input type='number' name='num2' value='$num2'><br>
        <input type='submit' name='enviar' value='Enviar'>
        </form>";
    }
    ?>
</body>
</html>