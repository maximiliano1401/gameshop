<?php
session_start();
include_once "conexion.php";

if (!isset($_SESSION["UsuarioID"])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $UsuarioID = $_POST['UsuarioID'];
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $ContrasenaActual = $_POST['ContrasenaActual'];
    $ContrasenaNueva = $_POST['ContrasenaNueva'];
    $ConfContrasenaNueva = $_POST['ConfContrasenaNueva'];

    // ACTUALIZAR CONTRASENA-----------------
    if (!empty($ContrasenaActual) && !empty($ContrasenaNueva) && !empty($ConfContrasenaNueva)) {

        $sqlActualizarContrasena = "SELECT * FROM usuarios WHERE UsuarioID = '$UsuarioID'";
        $resulado = mysqli_query($conexion, $sqlSeleccion);
        $fila = mysqli_fetch_assoc($resulado);

        if ($fila["Contrasena"] == $ContrasenaActual) {

            if ($ContrasenaNueva == $ConfContrasenaNueva) {

                $ContrasenaNueva = password_hash($ContrasenaNueva, PASSWORD_DEFAULT);
                // Actualizar contraseña en la base de datos
                $sql = "UPDATE usuarios SET Contrasena = '$ContrasenaNueva'";

            } else {
                echo "Las contrasenas deben coincidir";
            }
        } else {
            echo "Contrasena actual incorrecta";
        }
    }
    // FIN DE ACTUALIZAR CONTRASENA----------

    // ACTUALIZAR NOMBRE
    if (!empty($Nombre)) {
        $sqlActualizarNombre = "UPDATE usuarios SET Nombre = '$Nombre' WHERE UsuarioID = '$UsuarioID'";
    }
    // ACTUALIZAR TELÉFONO
    if (!empty($Telefono)) {
        $sqlActualizarTelefono = "UPDATE usuario SET Telefono = '$Telefono' WHERE UsuarioID = '$UsuarioID'";
    }

    if (mysqli_query($conexion, $sql)) {
        echo json_encode(["message" => "Datos guardados correctamente"]);
    } else {
        echo json_encode(["message" => "Error al guardar los datos: "]);
    }
}

mysqli_close($conexion);
