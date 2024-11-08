<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Shop</title>
    <link rel="stylesheet" href="inicio_pri.css">
</head>

<body>
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

    <section class="banner">
        <h2>Descubre videojuegos por menos de $699</h2>
    </section>

    <section class="categories">
        <div class="category">Nintendo Switch</div>
        <div class="category">PlayStation 5</div>
        <div class="category">Xbox Series X|S</div>
        <div class="category">Controles y accesorios</div>
        <div class="category">Videojuegos</div>
    </section>

    <!-- <section class="products"> -->
        <!-- Each product item -->
        <!-- <div class="product"> -->
            <!-- <img src="img/cod.jpg" alt="Call of Duty: Black Ops 6 - PS5"> -->
            <!-- <p>Call of Duty: Black Ops 6 - PS5 - PlayStation 5</p> -->
            <!-- <span class="price">$1,439.00</span> <span class="original-price">$1,599.00</span> -->
        <!-- </div> -->
        <!-- <div class="product"> -->
            <!-- <img src="img/mario-party.jpg" alt="Super Mario Party - Nintendo Switch"> -->
            <!-- <p>Super Mario Party - Nintendo Switch</p> -->
            <!-- <span class="price">$1,599.00</span> -->
        <!-- </div> -->
        <!-- Add more products as needed following this format -->
    <!-- </section> -->
    
    <?php

    include "procesos/mostrar_productos.php";

    ?>
    
</body>

</html>