<?php
include_once "conexion.php";

if (isset($_SESSION["UsuarioID"])) {

    $UsuarioID = $_SESSION["UsuarioID"];

    $sql = "SELECT * FROM usuarios WHERE UsuarioID = '$UsuarioID'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_array($resultado);

        $Nombre = $fila["Nombre"];
        $Correo = $fila["Correo"];
        $Direccion = $fila["Direccion"];
        $Ciudad = $fila["Ciudad"];
        $CodigoPostal = $fila["CodigoPostal"];
        $Telefono = $fila["Telefono"];
    }
}

mysqli_close($conexion);

?>