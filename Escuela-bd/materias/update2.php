<?php
require_once ("../lib/functions.php");

$nombre = $_POST ["nombre"];
$licenciatura = $_POST ["licenciatura"];
$cuatrimestre = $_POST ["cuatrimestre"];

insertar_materias ($nombre, $licenciatura, $cuatrimestre);

header("Location: index2.php")


?>