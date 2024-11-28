<?php

session_start();
include "procesos/ver_detalle_producto.php";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto - Game Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Css/produc.css">
</head>
<style>
    .detalle-producto img {
    width: 30%;
    height: auto;
}
</style>
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

    <main class="contenido-producto">
        <section class="detalle-producto">
            <img src=" <?php echo $ImagenURL ?> " class="imagen-producto">

            <div class="info-producto">
                <h2> <?php echo $Nombre ?> </h2>
                <p class="plataforma"> <?php echo $Categoria ?> </p>
                <p class="precio"> $<?php echo $Precio ?> </p>

                <!-- <button class="boton-comprar">Comprar</button> -->
                <!-- <button class="boton-carrito">Agregar al carrito</button> -->
                <form action="procesos/agregar_al_carrito.php" method="POST">
                    <input type="hidden" name="ProductoID" value="<?php echo $ProductoID; ?>">
                    <button type="submit" class="boton-carrito">Agregar al carrito</button>
                </form>

                <div class="descripcion-producto">
                    <h3>Acerca de este artículo</h3>
                    <ul>
                        <p> <?php echo $Descripcion ?> </p>
                    </ul>
                </div>
            </div>
        </section>

        <section class="productos-relacionados">
            <h3>Productos relacionados</h3>
            <div class="productos-grid">
                <?php
                include "procesos/productos_relacionados.php"
                ?>
            </div>
        </section>
    </main>
</body>

</html>