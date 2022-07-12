<?php
require_once ("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_profesor($connect, $id);
$profesore = mysqli_fetch_array ($resultado);

delete_profesores($id);

header("Location: index3.php")
?>