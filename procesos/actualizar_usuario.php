<?php
session_start();
include_once "conexion.php";

if (!isset($_SESSION["UsuarioID"])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $UsuarioID = $_POST['UsuarioID'];


    $sql = "UPDATE usuarios
    SET Nombre = '$Nombre', Correo = '$Correo', Direccion = '$Direccion', Telefono = '$Telefono'
    WHERE UsuarioID = '$UsuarioID'";

if (mysqli_query($conexion, $sql)) {
    echo json_encode(["message" => "Datos guardados correctamente"]);
} else {
    echo json_encode(["message" => "Error al guardar los datos: "]);
}

}

mysqli_close($conexion);

?>