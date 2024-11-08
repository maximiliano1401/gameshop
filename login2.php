<?php

include "procesos/procesar_login.php";

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

    <label for="Correo">Correo</label>
    <input type="email" name="Correo">
    <p id="correo_login" style="color: red;"> <?php echo $correoError; ?> </p>
    <br>
    <label for="Contrasena">Contrasena</label>
    <input type="password" name="Contrasena">
    <p id="contrasena_login" style="color: red;"> <?php echo $contrasenaError; ?> </p>
    <br>
    <input type="submit" value="Iniciar">

</form>

</body>
</html>