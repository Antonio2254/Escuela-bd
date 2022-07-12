<?php
require_once ("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_alumno($connect, $id);
$alumno = mysqli_fetch_array ($resultado);

delete_alumnos ($id);

header("Location: index.php")
?>