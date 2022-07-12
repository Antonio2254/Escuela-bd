<?php

require_once ("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_alumno($connect, $id);
$alumno = mysqli_fetch_array ($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario </title>


</head>
<body>

<h1> 

Formulario

<small> <a href="index.php">Regresar</a></small>

</h1>

<form action="update_query.php" method= "post">
    
    <p> Nombre       <input type="text"     id= "nombre"       name= "nombre"       value= "<?php  echo $alumno['nombre'] ?>">        
                     <input type="hidden"   id= "id"           name= "id"           value= "<?php  echo $alumno['id'] ?>"></p>
    <p> Apellidos    <input type="text"     id= "apellidos"    name= "apellidos"    value= "<?php  echo $alumno['apellidos'] ?>"></p>
    <p> Correo       <input type="text"     id= "correo"       name= "correo"       value= "<?php  echo $alumno['correo'] ?>"></p>
    <p> Telefono     <input type="text"     id= "telefono"     name= "telefono"     value= "<?php  echo $alumno['telefono'] ?>"></p>
    <p> Licenciatura <input type="text"     id= "licencitura"  name= "licenciatura" value= "<?php  echo $alumno['licenciatura'] ?>"></p>
    <p> Cuatrimestre <input type="text"     id= "cuatrimestre" name= "cuatrimestre" value= "<?php  echo $alumno['cuatrimestre'] ?>"></p>
    <p> Estatus      <input type="text"     id= "estatus"      name="estatus"       value= "<?php  echo $alumno['estatus'] ?>"></p>

    <p> <input type="submit" value = "Mandar soli"></p>
    

</form>
    
</body>
</html>