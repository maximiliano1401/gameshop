<?php
session_start();
include_once "conexion.php";

if (!isset($_SESSION["UsuarioID"])) {
    header("Location: index.php");
    exit;
}

$contrasenaActualError = "";
$contrasenaNuevaError = "";
$actualizado = false;

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
        $resultado = mysqli_query($conexion, $sqlActualizarContrasena);
        $fila = mysqli_fetch_assoc($resultado);

        if (password_verify($ContrasenaActual, $fila["Contrasena"])) {

            if ($ContrasenaNueva == $ConfContrasenaNueva) {

                $ContrasenaNueva = password_hash($ContrasenaNueva, PASSWORD_DEFAULT);
                // Actualizar contraseña en la base de datos
                $sqlActualizarContrasena = "UPDATE usuarios SET Contrasena = '$ContrasenaNueva' WHERE UsuarioID = '$UsuarioID'";
                if (mysqli_query($conexion, $sqlActualizarContrasena)) {
                    $actualizado = true;
                } else {
                    echo "Error al actualizar la contraseña.";
                }
            } else {
                $contrasenaNuevaError = "Las contraseñas deben coincidir.";
                // echo "Las contrasenas deben coincidir";
            }
        } else {
            $contrasenaActualError = "Contrasena actual incorrecta.";
            // echo "Contrasena actual incorrecta";
        }
    }
    // FIN DE ACTUALIZAR CONTRASENA----------

    // ACTUALIZAR NOMBRE
    if (!empty($Nombre)) {
        $sqlActualizarNombre = "UPDATE usuarios SET Nombre = '$Nombre' WHERE UsuarioID = '$UsuarioID'";
        if (mysqli_query($conexion, $sqlActualizarNombre)) {
            $actualizado = true;
        }    
    }
    // ACTUALIZAR TELÉFONO
    if (!empty($Telefono)) {
        $sqlActualizarTelefono = "UPDATE usuarios SET Telefono = '$Telefono' WHERE UsuarioID = '$UsuarioID'";
        if (mysqli_query($conexion, $sqlActualizarTelefono)) {
            $actualizado = true;
        }
    }

    if ($actualizado) {
        echo json_encode(["message" => "Datos guardados correctamente"]);
    } else {
        echo json_encode(["message" => "No se realizaron cambios."]);
    }
}

mysqli_close($conexion);
?>