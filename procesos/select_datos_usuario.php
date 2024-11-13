<?php
session_start();
include_once "conexion.php";

if (isset($_SESSION["UsuarioID"])) {

    $id = $_SESSION["UsuarioID"];

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_array($resultado);

        $Nombre = $fila["Nombre"];
        $Correo = $fila["Correo"];
        $Contrasena = $fila["Contrasena"];
        $Direccion = $fila["Direccion"];
        $Telefono = $fila["Telefono"];
    }
}

mysqli_close($conexion);

?>