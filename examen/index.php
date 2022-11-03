<?php

/**
 * @author Juan Garcia
 */
include('config/config.php');
include('lib/functions.php');

$procesalocal = false;
$tabla = array();
$error = "";
$zona = "";
if (isset($_POST['zona'])) {
    $zona = $_POST['zona'];
}
$partido = "";
if (isset($_POST['partido'])) {
    $partido = $_POST['partido'];
}
$aux = 0;
$calculatotal = false;

if (isset($_POST['local'])) {
    if (isset($_POST['zona'])) {
        $procesalocal = true;
        switch ($zona) {
            case 'B':
                $aux = 100;
                break;
            case 'C':
                $aux = 200;
                break;
            case 'D':
                $aux = 300;
                break;
        }
        if (isset($_POST['send'])) {
            echo "MOSTRAR PRECIO";
        }
    } else {
        $error = "Selecciona una zona";
    }
}
$tabla = creaaleatorios($tabla);
if (isset($_POST['send'])) {
    $calculatotal = true;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Examen</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="" method="POST">
        <select name="partido" id="">
            <?php
            foreach (TARIFA as $key => $value) {
                if ($partido == $key) {
                    echo '<option value="' . $key . '" selected>Pokemons vs Visitante:' . $key . '</option>';
                } else {
                    echo '<option value="' . $key . '">Pokemons vs Visitante:' . $key . '</option>';
                }
            }
            ?>
        </select>
        <br>
        <?php
        foreach (['A', 'B', 'C', 'D'] as $key => $value) {
            if ($zona == $value) {
                echo '<input type="radio" name="zona" value="' . $value . '" checked>' . $value;
            } else {
                echo '<input type="radio" name="zona" value="' . $value . '">' . $value;
            }
        }
        ?>
        <br>
        <input type="submit" value="Ver Localidades" name="local">
        <br>
        <?php
        if ($procesalocal) {
        ?>
            <table>
                <tr>
                    <?php
                    for ($i = 1; $i <= 100; $i++) {
                        if (existeAsiento($i, $tabla)) {
                            echo '<td class="abono"><input type="checkbox" name="' . $i + $aux . '" disabled>' . $i + $aux . '</td>';
                            if ($i % 10 == 0) {
                                echo '</tr> <tr>';
                            }
                        } else {
                            echo '<td><input type="checkbox" name="' . $i + $aux . '" >' . $i + $aux . '</td>';
                            if ($i % 10 == 0) {
                                echo '</tr> <tr>';
                            }
                        }
                    }
                    ?>
                </tr>
            </table>
            <input type="submit" value="Comprar" name="send">
        <?php
        } else {
            echo $error;
        }
        if ($calculatotal) {
            $i = 0;
            foreach ($_POST as $key => $value) {
                if ($value == "on") {
                    $i++;
                }
            }
            if ($i > 0) {
                echo 'Precio total: ' . TARIFA[$partido][$zona] * $i . '€';
            } else {
                echo 'Debe seleccionar al menos un local';
            }
        }
        ?>
    </form>
</body>

</html>