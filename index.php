<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Shop</title>
    <link rel="stylesheet" href="Css/inicio_pri.css">
</head>

<body>

<!-- Menú -->
    <header>
        <div class="header-container">
            <h1 class="logo">Game<span>Shop</span></h1>
            <input type="text" placeholder="Buscar productos" class="search-bar">
            <nav class="nav-links">

                <?php
// Detecta si el usuario ha iniciado sesión pra colocar su nombre, de lo contrario muestra botones para iniciar sesion o registrarse
                if (!isset($_SESSION["Nombre"])) {
                    echo "<a href='registro.php'>Crear cuenta</a>";
                    echo "<a href='login.php'>Ingresar</a>";
                } else {
                    echo "<a href=''>" . $_SESSION["Nombre"] . "</a>";
                    echo "<a href='procesos/cerrar_sesion.php'>Cerrar Sesion</a>";
                }
                ?>
                <a href="">Categorías</a>
                <a href="">Ofertas</a>
                <a href="">Historial</a>
                <a href="">Mis compras</a>
            </nav>
        </div>
    </header>
<!-- Banner -->
    <section class="banner">
        <h2>Descubre videojuegos por menos de $699</h2>
    </section>
<!-- Categorías -->
    <section class="categories">
        <div class="category">Nintendo Switch</div>
        <div class="category">PlayStation 5</div>
        <div class="category">Xbox Series X|S</div>
        <div class="category">Controles y accesorios</div>
        <div class="category">Videojuegos</div>
    </section>
    <?php

// esta parte muestra los productos
    include "procesos/mostrar_productos.php";

    ?>
    
</body>

</html>