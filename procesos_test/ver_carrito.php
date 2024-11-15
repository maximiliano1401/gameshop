<?php
// Incluir archivo de conexión
include('conexion.php');

// Obtener el ID del usuario desde la sesión (suponiendo que el usuario ya está autenticado)
session_start(); // Iniciar sesión
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

// Ejecutar la consulta
$resultado = $conexion->query($sql);

// Comprobar si se han encontrado productos en el carrito
if ($resultado->num_rows > 0) {
    echo "<h1>Mi Carrito de Compras</h1>";
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Subtotal</th>
                <th>Imagen</th>
            </tr>";

    // Mostrar los productos del carrito
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['Producto'] . "</td>
                <td>" . $row['Descripcion'] . "</td>
                <td>" . $row['Cantidad'] . "</td>
                <td>$" . number_format($row['PrecioUnitario'], 2) . "</td>
                <td>$" . number_format($row['Subtotal'], 2) . "</td>
                <td><img src='" . $row['ImagenURL'] . "' alt='" . $row['Producto'] . "' width='100'></td>
              </tr>";
    }

    // Sumar el total del carrito
    $totalCarritoSQL = "
        SELECT SUM(c.Cantidad * p.Precio) AS TotalCarrito
        FROM carritodecompras c
        JOIN productos p ON c.ProductoID = p.ProductoID
        WHERE c.UsuarioID = $usuarioID
    ";

    $totalCarritoResultado = $conexion->query($totalCarritoSQL);
    $totalCarrito = $totalCarritoResultado->fetch_assoc()['TotalCarrito'];

    echo "</table>";

    // Mostrar total del carrito
    echo "<h2>Total del Carrito: $" . number_format($totalCarrito, 2) . "</h2>";
    echo "<a href='pago.php'>Proceder al Pago</a>";

} else {
    echo "<p>No hay productos en tu carrito.</p>";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
