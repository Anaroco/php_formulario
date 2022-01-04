

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h2>Rellena tu CV</h2>

<form action="./index.php" method="post" enctype="multipart/form-data">
Nombre 
<input type="text" name="nombre"  class="form-control" />

Apellidos <br/>
<input type="text" name="apellidos"  class="form-control" />

Contraseña 
<input type="password" name="contrasena" class="form-control" />

DNI 
<input type="text" name="dni"class="form-control" />
<br>

Sexo <br/>
<input type="radio" name="sexo1" value="hombre"/> Hombre <br/>
<input type="radio" name="sexo2" value="mujer"/> Mujer

<br/><br/>

Incluir mi foto <input type="file" name="foto" />

<br></br>

<input name="suscribir" type="checkbox" value="suscribir" checked="checked"/> Suscribirme al boletín de novedades

<br><br/>

<input type="submit" name="enviar" value="Guardar cambios" />
<input type="reset" name="limpiar" value="Borrar los datos introducidos" />


</form>
</body>
</html>

<?php 

$nombre = $_POST['nombre'];
echo$nombre;

$surname = $_POST['apellidos'];
echo$surname;

$password= $_POST['contrasena'];
echo$password;

$dni = $_POST['dni'];
echo$dni;

// $sexo1 = $_POST['sexo1'];
// echo$sexo1;
// $sexo2 = $_POST['sexo2'];
// echo$sexo2;

$subcription = $_POST['suscribir'];
echo$subcription;

// $photo= $_POST['foto'];
// echo$photo;




?>
