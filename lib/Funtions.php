<?php
require_once("connect.php");

function get_all_alumnos(){
$consulta= "SELECT * FROM alumnos";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}
?>