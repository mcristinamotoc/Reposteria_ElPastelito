<?php 

// Conectarse a la base de datos: localhost, nombre de usuario, contraseña, nombre de la base de datos

$mysqli = new mysqli('localhost', 'root', '', 'REPOSTERrIA_ONLINE');

if ($mysqli->connect_errno) {
    echo "Fallo al conectarse a MySQL debido a: \n";
    echo "Error numero: " . $mysqli->connect_errno . "\n";
    exit;
}
$mysqli->set_charset("utf8");
?>