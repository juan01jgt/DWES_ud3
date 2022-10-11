<?php
/**
 * Respuesta a un formulario y sus datos
 * @author Juan Garcia Toril
 */

foreach ($_POST as $key => $value) {
    if ($key != "send") {
        echo "<br>",$key,": ",$value;
    }
}
?>