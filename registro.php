<?php

include "procesos/procesar_registro.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
<form action="" method="post">

    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre">
    <br><br>
    <label for="Correo">Correo</label>
    <input type="email" name="Correo">
    <p id="correo_registro" style="color: red;"> <?php echo $correoError; ?> </p>
    <label for="Contrasena">Contraseña</label>
    <input type="password" name="Contrasena">
    <br><br>
    <label for="Confirmar_Contrasena">Confirmar Contraseña</label>
    <input type="password" name="Confirmar_Contrasena">
    <p id="contrasena_registro" style="color: red;"> <?php echo $contrasenaError; ?> </p>
    <label for="Telefono">Teléfono</label>
    <input type="text" name="Telefono">
    <br><br>
    <label for="Direccion">Dirección</label>
    <input type="text" name="Direccion">
    <br><br>
    <input type="submit" value="Registrar">

</form>

</body>
</html>