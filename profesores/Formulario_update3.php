<?php

require_once ("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_profesor($connect, $id);
$profesor = mysqli_fetch_array ($resultado);
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

<small> <a href="index3.php">Regresar</a></small>

</h1>

<form action="update_query3.php" method= "post">
    
    <p> Nombre       <input type="text"     id= "nombre"       name= "nombre"       value= "<?php  echo $profesor['nombre'] ?>">        
                     <input type="hidden"   id= "id"           name= "id"           value= "<?php  echo $profesor['id'] ?>"></p>
    <p> Apellidos    <input type="text"     id= "apellidos"    name= "apellidos"    value= "<?php  echo $profesor['apellidos'] ?>"></p>
    <p> Telefono     <input type="text"     id= "telefono"     name= "telefono"     value= "<?php  echo $profesor['telefono'] ?>"></p>
    <p> Correo       <input type="text"     id= "correo"       name= "correo"       value= "<?php  echo $profesor['correo'] ?>"></p>
    <p> Estatus      <input type="text"     id= "estatus"      name= "estatus"      value= "<?php  echo $profesor['estatus'] ?>"></p>

    <p> <input type="submit" value = "Mandar soli"></p>
    

</form>
    
</body>
</html>