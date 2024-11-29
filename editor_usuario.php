<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Shop - Usuarios</title>
    <link rel="stylesheet" href="Css/editor_usuario.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <span class="game">Game</span><span class="shop">Shop</span>
        </div>
        <h1>Usuarios</h1>
    </header>
    <main class="content">
        <h2>Selección de cuentas</h2>

        <?php
        include_once('procesos/admin_usuarios.php');
        ?>
        
    </main>
    <footer class="footer">
        <div class="pipe"></div>
    </footer>
</body>
</html>
