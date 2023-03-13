<?php
/**
 * @author Juan Garcia
 */
include_once('config/config.php');
function creaaleatorios ($aux){
    $localidades = array();
    for ($i=0; $i < $aux; $i++) { 
        do {
            $n = rand(1,AFORO);
        } while (in_array($n,$localidades));
        $localidades[]+=$n;
    }
    return $localidades;
}
function limpiarDatos($dato){
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
?>