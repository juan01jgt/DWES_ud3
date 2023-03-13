<?php

/**
 * @author Juan Garcia
 */
include_once('config/config.php');
include_once('lib/functions.php');

session_start();
if (!isset($_SESSION['carrito']) OR ($_SESSION['usuario']=='invitado')) {
    header('Location:index.php');
}

$procesalocal=false;
$mostrarcarrito=false;

if (isset($_POST['local'])) {
    if (isset($_POST['partido']) && isset($_POST['zona'])) {
        $_SESSION['partido'] = $_POST['partido'];
        $_SESSION['zona'] = $_POST['zona'];
        foreach ($tarifas as $key => $value) {
            if ($value['equipo'] == $_SESSION['partido']) {
                foreach ($value['tarifas'] as $key2 => $value2) {
                    if ($value2['zona'] == $_SESSION['zona']) {
                        $_SESSION['precio']= $value2['precio'];
                    }
                }
            }
        }
        $procesalocal = true;
    }
    else{
        $infContexto = "Seleccione una zona";
    }
}
else if (isset($_POST['send'])) {
    $cont=0;
    foreach ($_POST as $key => $value) {
        if ($value == "on") {
            array_push($_SESSION['carrito'],["partido"=>$_SESSION['partido'],"zona"=>$_SESSION['zona'],"numero"=>$key,"precio"=>$_SESSION['precio']]);
            $mostrarcarrito=true;
            $cont++;
        }
    }
    if ($cont==0) {
        $infContexto = "Seleccione al menos una entrada";
    }
}
else{
    $infContexto = "";
    $_SESSION['partido'] = "";
    $_SESSION['zona'] = "";
    $_SESSION['precio'] = 0;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CB Pokemons</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>CB Pokemons</h1>
    <form action="" method="POST">
        <?php
        if (!$mostrarcarrito) {
        ?>
        <select name="partido" id="">
            <?php
            foreach ($equipos as $key => $value) {
                if ($_SESSION['partido'] == $value) {
                    echo '<option value="' . $value . '" selected>' . $value . '</option>';
                } else {
                    echo '<option value="' . $value . '">' . $value . '</option>';
                }
            }
            ?>
        </select>
        <br>
        <br>
        <?php
        foreach ($zonas as $key => $value) {
            if ($_SESSION['zona'] == $value['zona']) {
                echo '<input type="radio" name="zona" value="' . $value['zona'] . '" checked>' . $value['zona'].' ';
            } else {
                echo '<input type="radio" name="zona" value="' . $value['zona'] . '">' . $value['zona'].' ';
            }
        }
        ?>
        <br>
        <br>
        <input type="submit" value="Ver Localidades" name="local">
        <br>
        <?php
        if ($procesalocal) {
        ?>
            <table>
                <tr>
                    <?php
                    foreach ($zonas as $key => $value) {
                        if ($_SESSION['zona'] == $value['zona']) {
                            for ($i=$value['primera_localidad']; $i <= $value['ultima_localidad']; $i++) {
                                if (in_array($i, $_SESSION['abonos'])) {
                                    echo '<td class="vendido"><input type="checkbox" name="'.$i.'" disabled>'.$i.' '.$_SESSION['precio'].'€</td>';
                                }
                                else{
                                    echo '<td><input type="checkbox" name="'.$i.'" >'.$i.' '.$_SESSION['precio'].'€</td>';
                                }
                                if ($i % 10 == 0) {
                                    echo '</tr> <tr>';
                                }
                            }
                        }
                    }
                    ?>
                </tr>
            </table>
            <input type="submit" value="Añadir al carrito" name="send">
        <?php
            }
            else{
                echo"<p class='clase_error'>".$infContexto."</p>";
            }
        }
        else{
            $total=0;
            $archivo = fopen("data/entradas.txt","w");
            foreach ($_SESSION['carrito'] as $key => $value) {
                echo '<h4 class="margen0"> Partido: '.$value['partido'].'</h4>';
                echo '<h5 class="margen0">Zona: '.$value['zona'].'</h5>';
                echo '<p class="margen0">Entrada nº: '.$value['numero'].' por '.$value['precio'].'€<p>';
                echo '<hr>';
                $total += $value['precio'];
                fwrite($archivo,"Partido ".$value['partido'].";Zona ".$value['zona'].";Numero ".$value['numero'].";Precio ".$value['precio']."€\n");
            }
            fwrite($archivo,"TOTAL:".$total."€\n");
            fclose($archivo);
            echo '<h3>TOTAL: '.$total.'€<h3>';
            echo '<br><a href="index.php">Volver al inicio</a>';
            echo '<br><a href="ventas.php">Seguir comprando</a>';
            echo '<br><a download href="data/entradas.txt">Descargar entradas</a>';
        }
        ?>
    </form>
</body>

</html>