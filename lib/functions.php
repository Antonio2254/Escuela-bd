<?php
require_once ("connect.php");

function get_all_alumnos ($connect){
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function get_alumno ($connect, $id){
     $consulta = "SELECT * FROM alumnos WHERE id = $id";
     $resultado = mysqli_query ($connect, $consulta);
     return $resultado;
}

function get_all_profesores ($connect){
    $consulta = "SELECT * FROM profesores";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function get_profesor ($connect, $id){
     $consulta = "SELECT * FROM profesores WHERE id = $id";
     $resultado = mysqli_query ($connect, $consulta);
     return $resultado;
}


function get_all_materias ($connect){
    $consulta = "SELECT * FROM materias";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function get_materia ($connect, $id){
     $consulta = "SELECT * FROM materias WHERE id = $id";
     $resultado = mysqli_query ($connect, $consulta);
     return $resultado;
}



?>