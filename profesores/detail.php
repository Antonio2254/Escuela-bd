<?php

require_once ("../lib/functions.php");
$id = $_GET['id'];

$resultado = get_profesor($connect, $id);
$profesor = mysqli_fetch_array ($resultado);

?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor - escuela-bd</title>
</head>
<body>
    <h1> 

        Detalles de Profesor

        <?php 

         echo $profesor["apellidos"], $profesor["nombre"]

        ?> 

        <small> <a href="index3.php">Regresar</a></small>

    </h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>TELÉFONO</th>
                <th>CORREO ELECTRÓNICO</th>
                <th>ESTATUS</th>

            </tr>
        </thead>
        <tbody>
       
            <tr>
       
                <td><?php echo $profesor["id"]; ?></td>
                <td><?php echo $profesor["nombre"]; ?></td>
                <td><?php echo $profesor["apellidos"]; ?></td>
                <td><?php echo $profesor["telefono"]; ?></td>
                <td><?php echo $profesor["correo"]; ?></td>
                <td><?php echo $profesor["estatus"]; ?></td>
                
            </tr>
        </tbody>
    </table>

</body>
</html>