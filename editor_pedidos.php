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
            <?php
            include_once('procesos/admin_pedidos.php');
            ?>
            
        </section>
    </main>
</body>
</html>
