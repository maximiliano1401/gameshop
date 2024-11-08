 <?php
    session_start();
    // Incluir conexión
    include "conexion.php";

    $correoError = "";
    $contrasenaError = "";

    if (isset($_SESSION["UsuarioID"])) {
        header("Location: index.php");
        exit;
    }

    // Procesar login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Correo = trim($_POST["Correo"]);
        $Contrasena = trim($_POST["Contrasena"]);

        // Consultar el usuario en la base de datos usando su correo
        $sql = "SELECT * FROM usuarios WHERE Correo = '$Correo'";
        $resultado = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_assoc($resultado);

        // Comprobar si existen datos guardados con ese correo
        if (mysqli_num_rows($resultado) > 0) {
            // Comprobar contraseñas
            if (password_verify($Contrasena, $fila["Contrasena"])) {

                $_SESSION['UsuarioID'] = $fila['UsuarioID'];
                $_SESSION['Correo'] = $fila['Correo'];
                $_SESSION['Nombre'] = $fila['Nombre'];
                $_SESSION['Direccion'] = $fila['Direccion'];
                $_SESSION['Telefono'] = $fila['Telefono'];

                header("Location: index.php");
            } else {
                // En caso de no coincidir contraseñas
                $contrasenaError = "Contraseña incorrecta";
            }
        } else {
            // En caso de no existir datos con ese correo
            $correoError = "Correo no existe";
        }
    }

    // Cerrar conexion
    mysqli_close($conexion);
    ?>
