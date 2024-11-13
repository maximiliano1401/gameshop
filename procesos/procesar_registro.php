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

    // Procesar registro
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Nombre = trim($_POST["Nombre"]);
        $Correo = trim($_POST["Correo"]);
        $Contrasena = trim($_POST["Contrasena"]);
        $Telefono = trim($_POST["Telefono"]);
        // $Direccion = trim($_POST["Direccion"]);
        $Confirmar_Contrasena = trim($_POST["Confirmar_Contrasena"]);

        // Validamos que ninguna variable esté vacái
        $validaciones = [$Nombre, $Correo, $Contrasena, $Contrasena, $Telefono, $Confirmar_Contrasena];
        foreach ($validaciones as $validar) {
            if (empty($validar)) {
                echo "<script>
                alert('Por favor llenar todos los campos.');
                window.history.back();
              </script>";
                exit;
            }
        }

        // Comprobar si las contraseñas iguales
        if ($Contrasena == $Confirmar_Contrasena) {

            // Comprobar si ya existe el correo
            $sql = "SELECT * FROM usuarios WHERE Correo = '$Correo'";
            $resultado = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                $correoError = "Correo ya está registrado";
            } else {

                // Si no está registrado prosigue con el registro
                // Encriptar contraseña
                $Contrasena = password_hash($Contrasena, PASSWORD_DEFAULT);

                // Insertar el registro en la base de datos
                $sql = "INSERT INTO usuarios (Nombre, Correo, Contrasena, Telefono)
                VALUES ('$Nombre', '$Correo', '$Contrasena', '$Telefono')";


                if (mysqli_query($conexion, $sql)) {
                    echo "<script>
                alert('Usuario Registrado.');
              </script>";
                } else {
                    echo "Error al guardar los datos: " . mysqli_error($conexion);
                }
            }
        } else {
            $contrasenaError = "Las contraseñas no coinciden.";
        }
    }

    // Cerrar conexion
    mysqli_close($conexion);
    ?>