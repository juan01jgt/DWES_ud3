<?php
/**
 * @author Juan Garcia
 * Prueba de codigo en hecha para una explicación.
 */
// $contactos = array(
//     array("id"=>1,"nombre"=>"Mafalda","telefono"=>666123123),
//     array("id"=>2,"nombre"=>"Manolito","telefono"=>674221100),
//     array("id"=>3,"nombre"=>"Felipe","telefono"=>662285692)
// );
// // print_r($contactos[1]["nombre"]);
// echo "<table>";
// foreach ($contactos as $key => $value) {
//     echo "<tr>";
//     echo $key;
//     foreach ($value as $key2 => $value2) {
//         echo "<td>".$value2."</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
$contactos = [["id"=>1,"nombre"=>"Mafalda","telefono"=>666123123],
    ["id"=>2,"nombre"=>"Manolito","telefono"=>674221100],
    ["id"=>3,"nombre"=>"Felipe","telefono"=>662285692]];
// print_r($contactos[1]["nombre"]);
echo "<table>";
foreach ($contactos as $key => $value) {
    echo "<tr>";
    echo $key;
    foreach ($value as $key2 => $value2) {
        echo "<td>".$value2."</td>";
    }
    echo "</tr>";
}
echo "</table>";