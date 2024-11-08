<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto - Game Shop</title>
    <link rel="stylesheet" href="produc.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1 class="logo">Game<span>Shop</span></h1>
            <input type="text" placeholder="Buscar productos" class="barra-busqueda">
            <nav class="nav-enlaces">
                <a href="#">Categorías</a>
                <a href="#">Ofertas</a>
                <a href="#">Historial</a>
                <a href="#">Crear cuenta</a>
                <a href="#">Ingresar</a>
                <a href="#">Mis compras</a>
            </nav>
        </div>
    </header>

    <main class="contenido-producto">
        <section class="detalle-producto">
            <img src="img/control-rojo.jpg" alt="Control Inalámbrico Xbox - Pulse Red" class="imagen-producto">

            <div class="info-producto">
                <h2>Control Inalámbrico Xbox– Pulse Red - Standard Edition</h2>
                <p class="plataforma">Plataforma: Xbox One, Windows, Xbox, Xbox Series S, Xbox Series X</p>
                <p class="precio">$1,200.</p>

                <button class="boton-comprar">Comprar</button>
                <button class="boton-carrito">Agregar al carrito</button>

                <div class="descripcion-producto">
                    <h3>Acerca de este artículo</h3>
                    <ul>
                        <li>Vive la experiencia del diseño modernizado del Control Inalámbrico de Xbox, Pulse Red, con superficies esculpidas y una geometría refinada para una mayor comodidad durante el juego con una duración de la batería de hasta 40 horas.</li>
                        <li>Mantén siempre tu objetivo con el pad direccional híbrido y el agarre texturizado en los gatillos, en los botones superiores y en la carcasa trasera. Conecta cualquier auricular compatible con la entrada de audio estéreo de 3.5 mm.</li>
                        <li>Conéctate usando el puerto USB-C para conectarte y jugar directamente a la consola o PC.</li>
                        <li>Comparte y comparte contenido sin dificultad con el nuevo botón para Compartir.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="productos-relacionados">
            <h3>Productos relacionados</h3>
            <div class="productos-grid">
                <!-- Each related product item -->
                <div class="producto-relacionado">
                    <img src="img/control-negro.jpg" alt="Control Inalámbrico Xbox">
                    <p>GameSir Controller para Xbox</p>
                    <span class="precio">$1,468</span>
                </div>
                <div class="producto-relacionado">
                    <img src="img/control-azul.jpg" alt="Control DualSense PS5">
                    <p>Control DualSense - Chroma</p>
                    <span class="precio">$1,799</span>
                </div>
                <!-- Add more related products as needed -->
            </div>
        </section>
    </main>
</body>
</html>
