<?php

require_once ("../lib/functions.php");
$profesores = get_all_profesores($connect);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFESORES - escuela-bd</title>
</head>
<body>
    <h1>PROFESORES <small> <a href="insert.php">Crear Profesor</a></small> <small> <a href="../">Regresar</a></small></h1> 
    <table>
        <thead>
        <tr><th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>TELÉFONO</th>
        <th>CORREO ELECTRÓNICO</th>
        <th>ESTATUS</th>

        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = mysqli_fetch_array($profesores))
        {
        ?>
        <tr>
            <td><?php echo $fila["id"]?> </td>
            <td><?php echo $fila["nombre"]?> </td>
            <td><?php echo $fila["apellidos"]?> </td>
            <td><?php echo $fila["telefono"]?> </td>
            <td><?php echo $fila["correo"]?> </td>
            <td><?php echo $fila["estatus"]?> </td>
            <td> <a href="#">Editar</a></td>
            <td> <a href="#">Elimiar</a></td>
            <td> <a href=detail.php?id=<?php echo $fila['id'] ?>>Detalles</a></td>
        </tr>
        <?php    
        }
        ?>
    </tbody>
    </table>

</body>
</html>