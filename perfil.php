<?php
session_start();
// Incluir conexión
include "conexion.php";


if (!isset($_SESSION["UsuarioID"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Game Shop</title>
    <link rel="stylesheet" href="Css/perfil.css">

</head>

<body>
    <div class="container">
        <div class="header">
            Game Shop - Perfil
        </div>
        <div class="profile-info">
            <img src="https://via.placeholder.com/140" alt="Perfil">

            <button class="button">
                <span class="title">Tu información y seguridad</span>
                <span class="description">Nombre, datos y contraseña para identificarte</span>
            </button>
            <button class="button">
                <span class="title">Tarjetas</span>
                <span class="description">Información de tarjetas</span>
            </button>
            <button class="button">
                <span class="title">Dirección</span>
                <span class="description">Direcciones</span>
            </button>
        </div>
    </div>
</body>

</html>