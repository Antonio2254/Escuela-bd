<?php
require_once("../lib/connect.php");
$consulta= "SELECT * FROM materias";
$resultado = mysqli_query($connect, $consulta);

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>materias - escuela-bd</title>
</head>
<body>
    <h1>MATERIAS</h1> <table><thead>
        <tr><th>ID</th>
        <th>NOMBRE</th>
        <th>LICENCIATURA</th>
        <th>CUATRIMESTRE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = mysqli_fetch_array($resultado))
        {
        ?>
        <tr>
            <td><?php echo $fila["id"]?> </td>
            <td><?php echo $fila["nombre"]?> </td>
            <td><?php echo $fila["licenciatura"]?> </td>
            <td><?php echo $fila["cuatrimestre"]?> </td>

        </tr>
        <?php    
        }
        ?>
    </tbody>
    </table>

</body>
</html>