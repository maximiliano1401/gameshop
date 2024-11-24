<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="Css/carrito_compras.css">
</head>
<body>
    <header class="header">
        <div class="logo">Game <span class="highlight">Shop</span></div>
        <input type="text" class="search-bar" placeholder="Buscar productos">
        <nav>
            <a href="#">Categorías</a>
            <a href="#">Ofertas</a>
            <a href="#">Historial</a>
            <a href="#">Crear cuenta</a>
            <a href="#">Ingresar</a>
            <a href="#">Mis compras</a>
        </nav>
    </header>
    <main class="main-content">
        <h1>Carrito de compras</h1>
        <h2>Selección de artículos</h2>
        <div class="cart-item">
            <img src="img_bd/mando.avif" alt="PowerA Control">
            <div class="item-details">
                <h3>PowerA control alámbrico negro para Xbox Serie X|S</h3>
                <p>$621.47</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="xbox-console.png" alt="Xbox Series X">
            <div class="item-details">
                <h3>Xbox Series X 1TB Consola</h3>
                <p>$11,497.00</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="razer-control.png" alt="Razer Wolverine V2">
            <div class="item-details">
                <h3>Razer Wolverine V2 - Control con cable para Xbox Series X|S</h3>
                <p>$1,529.25</p>
            </div>
        </div>
        <div class="subtotal">
            <p>Subtotal (3 productos): <span>$13,647.00</span></p>
            <button>Pagar</button>
        </div>
    </main>
</body>
</html>
