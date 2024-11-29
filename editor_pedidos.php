<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Shop - Pedidos</title>
    <link rel="stylesheet" href="Css/Editor_pedidos.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <span class="game">Game</span><span class="shop">Shop</span>
        </div>
        <h1>Pedidos</h1>
    </header>
    <main class="content">
        <section class="orders">
            <h2>Pedidos en proceso</h2>
            <p>Selección de artículos</p>

            <div class="order-card">
                <img src="control_negro.jpg" alt="Control PowerA" class="product-img">
                <div class="order-details">
                    <p><strong>Usuario:</strong> Maximiliano</p>
                    <p><strong>PowerA control alámbrico negro para Xbox Serie X|S</strong></p>
                    <p>$621.47</p>
                </div>
                <div class="order-actions">
                    <button class="btn-processing">Procesando</button>
                    <button class="btn-completed">Completado</button>
                </div>
            </div>

            <div class="order-card">
                <img src="xbox_series_x.jpg" alt="Xbox Series X" class="product-img">
                <div class="order-details">
                    <p><strong>Usuario:</strong> Maximiliano</p>
                    <p><strong>Xbox Series X 1TB Consola</strong></p>
                    <p>$11,497.00</p>
                </div>
                <div class="order-actions">
                    <button class="btn-processing">Procesando</button>
                    <button class="btn-completed">Completado</button>
                </div>
            </div>

            <div class="order-card">
                <img src="control_blanco.jpg" alt="Razer Wolverine V2" class="product-img">
                <div class="order-details">
                    <p><strong>Usuario:</strong> Maximiliano</p>
                    <p><strong>Razer Wolverine V2 - Control con cable para Xbox Series X|S</strong></p>
                    <p>$1,529.25</p>
                </div>
                <div class="order-actions">
                    <button class="btn-processing">Procesando</button>
                    <button class="btn-completed">Completado</button>
                </div>
            </div>
        </section>

        <aside class="sidebar">
            <div class="add-order">
                <p>Agregar algún pedido nuevo</p>
                <button class="btn-add">Añadir</button>
                <div class="pipe"></div>
            </div>
        </aside>
    </main>
</body>
</html>
