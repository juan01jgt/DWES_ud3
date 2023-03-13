<?php

/**
 * @author Juan Garcia
 */
include_once('config/config.php');
include_once('lib/functions.php');

session_start();
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
    $_SESSION['abonos'] = creaaleatorios(NABONOS);
    $_SESSION['usuario'] = 'invitado';
    // $_SESSION['entradas_vendidas']= array();
}

$msgError="";
if (isset($_POST["login"])) {
    $user= limpiarDatos($_POST['user']);
    $pass= limpiarDatos($_POST['pass']);
    if (($user == 'usuario') and ($pass == 'usuario')) {
        $_SESSION['usuario'] = 'Usuario';
    }
    else{
        $msgError="Error en credenciales";
    }
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
    <div>
        <?php
            if ($_SESSION['usuario']=='invitado') {
                include("include/login_form.html");
                echo $msgError;
            }
            else{
                echo 'Usuario: '.$_SESSION['usuario'].'<a href="logout.php">Salir</a>';
            }
        ?>
    </div>
    <h2>Pública</h2>
    <div>
        <a href="index.php">Home</a>
        <?php
            if ($_SESSION['usuario']=='Usuario') {
                echo '<a href="ventas.php">Ventas</a>';
            }
        ?>
    </div>
    <iframe width="1250" height="703" src="https://www.youtube.com/embed/T4R9Jc96rtQ" title="15 MEJORES JUGADAS DE MICHAEL JORDAN EN SU CARRERA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>

</html>