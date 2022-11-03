<?php
/**
 * @author Juan Garcia
 */
include('config/config.php');
function existeAsiento ($asiento,$arra) : bool{
    $Existe=false;
    foreach ($arra as $key => $value) {
        if ($key == $asiento) {
            $Existe=true;
        }
    }
    return $Existe;
}
function creaaleatorios ($arra){
    for ($i=0; $i < ABONOS; $i++) { 
        $asiento = mt_rand(1,400);
        $arra[$asiento]=false;
    }
    return $arra;
}
?>