<?php

include "procesos/procesar_registro.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="Css/registro_u.css">
</head>
<body>
    <div class="container">
        <!-- Sección Izquierda -->
        <div class="form-section">
            <h2>Registro</h2>
            <form method="POST" action="">
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" placeholder="Nombre completo" required>

                
                <label for="Correo">Email</label>
                <input type="email" name="Correo" placeholder="Correo electrónico" required>
                <p id="correo_registro" style="color: red;"> <?php echo $correoError; ?></p>
                
                <label for="Contrasena">Contraseña</label>
                <input type="password" name="Contrasena" placeholder="Introducir contraseña" required>
                
                <label for="Confirmar_Contrasena">Contraseña</label>
                <input type="password" name="Confirmar_Contrasena" placeholder="Confirmar contraseña" required>
                <p id="contrasena_registro" style="color: red;"> <?php echo $contrasenaError; ?></p>
                
                <label for="Edad">Edad</label>
                <input type="number" name="Edad" placeholder="Edad" required>

                <label for="Telefono">Número celular</label>
                <input type="text" name="Telefono" placeholder="Número" required>

                <button type="submit">Registrar</button>
            </form>
        </div>

       

    </div>
</body>
</html>
