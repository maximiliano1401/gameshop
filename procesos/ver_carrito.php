<?php
include_once('conexion.php');

if (!isset($_SESSION['UsuarioID'])) {
    echo "Por favor, inicia sesión primero.";
    exit;
}

$usuarioID = $_SESSION['UsuarioID'];

// Consulta SQL para obtener los productos del carrito
$sql = "
    SELECT 
        p.ProductoID,
        p.Nombre AS Producto,
        p.Descripcion,
        c.Cantidad,
        p.Precio AS PrecioUnitario,
        (c.Cantidad * p.Precio) AS Subtotal,
        p.ImagenURL
    FROM 
        carritodecompras c
    JOIN 
        productos p ON c.ProductoID = p.ProductoID
    WHERE 
        c.UsuarioID = $usuarioID
";

$resultado = mysqli_query($conexion, $sql);

// Comprobar si se han encontrado productos en el carrito
if (mysqli_num_rows($resultado) > 0) {

    // Mostrar los productos del carrito
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='cart-item'>
            <img src='" . $fila['ImagenURL'] . "' alt='" . $fila['Producto'] . "'>
            <div class='item-details'>
            <h3>" . $fila['Producto'] . "</h3>
            <p>$" . $fila['PrecioUnitario'] . "</p>
            </div>
            </div>";
    }


    // Sumar el total del carrito
    $totalCarritoSQL = "
        SELECT SUM(c.Cantidad * p.Precio) AS TotalCarrito
        FROM carritodecompras c
        JOIN productos p ON c.ProductoID = p.ProductoID
        WHERE c.UsuarioID = $usuarioID
    ";

    $totalCarritoResultado = mysqli_query($conexion, $totalCarritoSQL);
    $totalCarrito = mysqli_fetch_assoc($totalCarritoResultado);
    // $totalCarrito = $totalCarritoResultado->fetch_assoc()['TotalCarrito'];

    echo "
    <div class='subtotal'>
    <p>Subtotal: <span>$" . $totalCarrito['TotalCarrito'] . " </span></p>
    <button>Pagar</button>
    </div>";

} else {
    echo "<p>No hay productos en tu carrito.</p>";
}

mysqli_close($conexion);
