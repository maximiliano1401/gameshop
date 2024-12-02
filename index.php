<?php
session_start();

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Css/inicio_pri.css">
</head>

<body>
    <!-- Barra de navegación de escritorio -->
    <header>
        <div class="header-container">
        <h1 class="logo"><a href="index.php"> Game<span>Shop</span> </a></h1>
            <input type="text" placeholder="Buscar productos" class="search-bar">
            <nav class="nav-links-desktop">
                <?php
                if (isset($_SESSION["UsuarioID"])) {
                    if ($_SESSION['Correo'] == 'max1@outlook.com') {
                        echo "<a href='panel_admin.php' class='nav-link'>Panel de administrador</a>";
                    }
                    echo "<a href='perfil.php'>" . $_SESSION["PrimerNombre"] . "</a>";
                    echo "<a href='procesos/cerrar_sesion.php'>Cerrar Sesión</a>";
                } else {
                    echo "<a href='registro.php'>Crear cuenta</a>";
                    echo "<a href='login.php'>Ingresar</a>";
                }
                ?>
                <a href="">Categorías</a>
                <a href="carrito_compras.php">Carrito</a>
                <a href="mis_pedidos.php">Historial</a>
            </nav>
        </div>
    </header>
    <!-- Barra de navegación móvil -->
    <nav class="nav-links-mobile">
        <?php
        if (isset($_SESSION["UsuarioID"])) {
            if ($_SESSION['Correo'] == 'max1@outlook.com') {
                echo "<a href='panel_admin.php'class='nav-item'>
                <i class=''></i>
                <span> ADMIN </span>
                </a>";
            }
            echo "
            <a href='perfil.php' class='nav-item'>
                <i class='fas fa-user'></i>
                <span>" . $_SESSION["PrimerNombre"] . "</span>
            </a>";
        } else {
            echo "
            <a href='registro.php' class='nav-item'>
                <i class='fas fa-user-plus'></i>
                <span>Crear</span>
            </a>
            <a href='login.php' class='nav-item'>
                <i class='fas fa-sign-in-alt'></i>
                <span>Ingresar</span>
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
    <!-- Banner -->
    <section class="banner">
        <h2>Descubre videojuegos por menos de $699</h2>
    </section>
    <!-- Categorías -->
    <section class="categories" id="imagenesxd">
        <div class="category">
            <img src="img_products/nitendo.png" alt="Nintendo Switch">
            Nintendo Switch
        </div>
        <div class="category">
            <img src="img_products/play.webp" alt="PlayStation 5">
            PlayStation 5
        </div>
        <div class="category">
            <img src="img_products/xbox.png" alt="Xbox Series X|S">
            Xbox Series X|S
        </div>
        <div class="category">
            <img src="accessories.png" alt="Controles y accesorios">
            Controles y accesorios
        </div>
        <div class="category">
            <img src="accessories.png" alt="Controles y accesorios">
            Video Juegos
        </div>
    </section>
    <!-- Productos -->
    <?php include "procesos/mostrar_productos.php"; ?>
</body>

</html>