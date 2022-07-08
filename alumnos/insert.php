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

<form action="update.php" method= "post">
    
    <p> Nombre <input type="text" id= "nombre"  name= "nombre"></p>
    <p> Apellidos <input type="text" id= "apellidos" name= "apellidos" ></p>
    <p> Correo <input type="text" id= "correo" name= "correo"></p>
    <p> Telefono <input type="text" id= "telefono" name= "telefono"></p>
    <p> Licenciatura <input type="text" id= "licencitura" name= "licenciatura"></p>
    <p> Cuatrimestre <input type="text" id= "cuatrimestre" name= "cuatrimestre"></p>
    <p> Estatus <input type="text" id= "estatus" name="estatus"></p>


    <p> <input type="submit" value = "Mandar soli"></p>
    

</form>
    
</body>
</html>