<?php

require_once ("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_materia($connect, $id);
$materia = mysqli_fetch_array ($resultado);
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

<small> <a href="index2.php">Regresar</a></small>

</h1>

<form action="update_query2.php" method= "post">
    
    <p> Nombre       <input type="text"     id= "nombre"       name= "nombre"       value= "<?php  echo $materia['nombre'] ?>">        
                     <input type="hidden"   id= "id"           name= "id"           value= "<?php  echo $materia['id'] ?>"></p>
    <p> Licenciatura <input type="text"     id= "licencitura"  name= "licenciatura" value= "<?php  echo $materia['licenciatura'] ?>"></p>
    <p> Cuatrimestre <input type="text"     id= "cuatrimestre" name= "cuatrimestre" value= "<?php  echo $materia['cuatrimestre'] ?>"></p>

    <p> <input type="submit" value = "Mandar soli"></p>
    

</form>
    
</body>
</html>