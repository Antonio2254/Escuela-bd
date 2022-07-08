<?php
require_once ("../lib/functions.php");

$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellidos"];
$telefono = $_POST ["telefono"];
$correo = $_POST ["correo"];


$estatus = $_POST ["estatus"];

insertar_profesores($nombre, $apellido, $telefono, $correo, $estatus);

header("Location: index3.php")


?>