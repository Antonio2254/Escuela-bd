<?php
require_once ("../lib/functions.php");

$nombre = $_POST ["nombre"];
$licenciatura = $_POST ["licenciatura"];
$cuatrimestre = $_POST ["cuatrimestre"];
$id = $_POST ["id"];


update_materias ($nombre, $licenciatura, $cuatrimestre, $id);

header("Location: index2.php")


?>