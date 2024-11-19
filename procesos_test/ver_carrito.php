<?php
include('conexion.php');

session_start();
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
    echo "<h1>Mi Carrito de Compras</h1>";
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>

            </tr>";

    // Mostrar los productos del carrito
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
        <td><img src='" . $fila['ImagenURL'] . "' width='100'></td>
        <td>" . $fila['Producto'] . "</td>
        <td>$" . $fila['PrecioUnitario'] . "</td>
        </tr>";
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

    echo "</table>";

    // Mostrar total del carrito
    echo "<h2>Total del Carrito: $" . $totalCarrito['TotalCarrito'] . "</h2>";
    echo "<a href='pago.php'>Proceder al Pago</a>";

} else {
    echo "<p>No hay productos en tu carrito.</p>";
}

mysqli_close($conexion);
?>
