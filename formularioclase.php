<?php
/**
 * gestion de formularios
 * @author Juan Garcia Toril
 */

 $aDatosPersonales = array(
    ["nombre","text"],
    ["apellidos","text"],
    ["telefono","text"],
    ["edad","number"]
);

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
    <form action="procesa_formulario1.php" method="post">
        <?php
        foreach ($aDatosPersonales as $key => $value) { 
            echo "<input type='$value[1]' name='$value[0]'><br>";
        }
        ?>
        <input type="color" name="color">
        <input type="checkbox" name="checkbox">
        <input type="submit" name="send" value="Enviar">
    </form>
</body>
</html>