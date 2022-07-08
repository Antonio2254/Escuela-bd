<?php
require_once ("../lib/functions.php");

$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellidos"];
$telefono = $_POST ["telefono"];
$correo = $_POST ["correo"];
$licenciatura = $_POST ["licenciatura"];
$cuatrimestre = $_POST ["cuatrimestre"];
$estatus = $_POST ["estatus"];

insertar_alumnos ($nombre, $apellido, $telefono, $correo, $licenciatura, $cuatrimestre, $estatus);

header("Location: index.php")


?>