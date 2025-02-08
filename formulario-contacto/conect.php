<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "dataform";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
echo "Conexión exitosa";
?>