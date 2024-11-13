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
    <link rel="stylesheet" href="Css/produc.css">
</head>

<body>
    <header>
        <div class="header-container">
            <h1 class="logo">Game<span>Shop</span></h1>
            <input type="text" placeholder="Buscar productos" class="barra-busqueda">
            <nav class="nav-enlaces">
                <?php

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

    <main class="contenido-producto">
        <section class="detalle-producto">
            <img src=" <?php echo $ImagenURL ?> " class="imagen-producto">

            <div class="info-producto">
                <h2> <?php echo $Nombre ?> </h2>
                <p class="plataforma"> <?php echo $Categoria ?> </p>
                <p class="precio"> <?php echo $Precio ?> </p>

                <button class="boton-comprar">Comprar</button>
                <button class="boton-carrito">Agregar al carrito</button>

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