<?php

include "procesos/procesar_login.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameShop Login</title>
    <link rel="stylesheet" href="Css/registro.css">

</head>

<body>
    <div class="container">
        <!-- Sección de Inicio de Sesión (Izquierda) -->
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

        <!-- Sección de Bienvenida (Derecha) -->
        <div class="welcome-section">
            <h1>Bienvenido</h1>
            <h2>GameShop</h2>
            <a href="registro.php"><button class="register-button">Regístrate</button></a>
            
            <!-- Imagen del tubo verde -->
            <div class="pipe-icon">
                <img src="img_products/logo.png" alt="Tubo verde">
            </div>
        </div>
    </div>
</body>
</html>