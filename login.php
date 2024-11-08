<?php

include "procesos/procesar_login.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameShop Login</title>
    <link rel="stylesheet" href="registro.css">

</head>

<body>
    <div class="container">
        <!-- Sección Izquierda -->

        <div class="login-section">
            <h2>Bienvenido</h2>
            <form action="" method="post">
                <label for="Correo">Email</label>
                <input type="email" id="email" name="Correo" placeholder="Correo electrónico">
                <p id="correo_login" style="color: red;"> <?php echo $correoError; ?> </p>

                <label for="Contrasena">Contraseña</label>
                <input type="password" id="password" name="Contrasena" placeholder="Introducir contraseña">
                <p id="contrasena_login" style="color: red;"> <?php echo $contrasenaError; ?> </p>
                
                <button type="submit">Iniciar</button>

            </form>
            <a href="">Recuperar contraseña</a>
        </div>

        <!-- Sección Derecha -->
        <div class="welcome-section">
            <h1>Bienvenido</h1>
            <h2>GameShop</h2>
            <button class="register-button">Regístrate</button>
            <div class="pipe-icon"></div>
        </div>
    </div>
</body>

</html>