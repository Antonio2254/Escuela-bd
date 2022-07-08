<?php

require_once ("../lib/functions.php");
$id = $_GET['id'];

$resultado = get_alumno($connect, $id);
$alumno = mysqli_fetch_array ($resultado);

?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos - escuela-bd</title>
</head>
<body>
    <h1> 

        Detalles del Alumno

        <?php 

         echo $alumno["apellidos"], $alumno["nombre"]

        ?> 

        <small> <a href="index.php">Regresar</a></small>

    </h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>TELÉFONO</th>
                <th>CORREO ELECTRÓNICO</th>
                <th>LICENCIATURA</th>
                <th>CUATRIMESTRE</th>
                <th>ESTATUS</th>

            </tr>
        </thead>
        <tbody>
       
            <tr>
       
                <td><?php echo $alumno ["id"]; ?></td>
                <td><?php echo $alumno ["nombre"]; ?></td>
                <td><?php echo $alumno ["apellidos"]; ?></td>
                <td><?php echo $alumno ["telefono"]; ?></td>
                <td><?php echo $alumno ["correo"]; ?></td>
                <td><?php echo $alumno ["licenciatura"]; ?></td>
                <td><?php echo $alumno ["cuatrimestre"]; ?></td>
                <td><?php echo $alumno ["estatus"]; ?></td>
                
            </tr>
        </tbody>
    </table>

</body>
</html>