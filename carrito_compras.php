<?php
session_start();
include_once("conexion.php");

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
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Css/carrito_compras.css">
</head>

<body>
    <!-- Barra de navegación de escritorio -->
    <header>
        <div class="header-container">
            <h1 class="logo">Game<span>Shop</span></h1>
            <input type="text" placeholder="Buscar productos" class="search-bar">
            <nav class="nav-links-desktop">
                <?php
                if (!isset($_SESSION["Nombre"])) {
                    echo "<a href='registro.php'>Crear cuenta</a>";
                    echo "<a href='login.php'>Ingresar</a>";
                } else {
                    echo "<a href='perfil.php'>" . $_SESSION["Nombre"] . "</a>";
                    echo "<a href='procesos/cerrar_sesion.php'>Cerrar Sesión</a>";
                }
                ?>
                <a href="">Categorías</a>
                <a href="carrito_compras.php">Carrito</a>
                <a href="">Historial</a>
            </nav>
        </div>
    </header>
    <!-- Barra de navegación móvil -->
    <nav class="nav-links-mobile">
        <?php
        if (!isset($_SESSION["Nombre"])) {
            echo "
            <a href='registro.php' class='nav-item'>
                <i class='fas fa-user-plus'></i>
                <span>Crear</span>
            </a>
            <a href='login.php' class='nav-item'>
                <i class='fas fa-sign-in-alt'></i>
                <span>Ingresar</span>
            </a>";
        } else {
            echo "
            <a href='perfil.php' class='nav-item'>
                <i class='fas fa-user'></i>
                <span>" . $_SESSION["Nombre"] . "</span>
            </a>
            <a href='procesos/cerrar_sesion.php' class='nav-item'>
                <i class='fas fa-sign-out-alt'></i>
                <span>Salir</span>
            </a>";
        }
        ?>

        <a href="index.php" class="nav-item">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
        </a>
        <a href="carrito_compras.php" class="nav-item">
            <i class="fas fa-shopping-cart"></i>
            <span>Carrito</span>
        </a>
        <a href="" class="nav-item">
            <i class="fas fa-bars"></i>
            <span>Categorías</span>
        </a>
    </nav>

    <main class="main-content">
        <h1>Carrito de compras</h1>

        <?php
        include("procesos/ver_carrito.php");
        ?>

    </main>
</body>

</html>