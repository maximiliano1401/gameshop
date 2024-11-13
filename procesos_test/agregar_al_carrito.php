<?php
session_start();
include "conexion.php"; // Incluye tu archivo de conexión a la base de datos

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["UsuarioID"])) {
    // Redirigir al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Verificar si se ha enviado un ID de producto
if (isset($_POST['ProductoID'])) {
    $UsuarioID = $_SESSION["UsuarioID"];
    $ProductoID = $_POST['ProductoID'];

    // Verificar si el producto ya está en el carrito
    $sql = "SELECT Cantidad FROM carritodecompras WHERE UsuarioID = $UsuarioID AND ProductoID = $ProductoID";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado->num_rows > 0) {
        // Si el producto ya está en el carrito, incrementar la cantidad
        $fila = $resultado->fetch_assoc();
        $nueva_cantidad = $fila['Cantidad'] + 1;

        $sql = $conn->prepare("UPDATE carritodecompras SET Cantidad = ? WHERE UsuarioID = ? AND ProductoID = ?");
        $sql->bind_param("iii", $nueva_cantidad, $UsuarioID, $ProductoID);
        $sql->execute();
    } else {
        // Si el producto no está en el carrito, agregarlo
        $Cantidad = 1; // Inicializar cantidad a 1
        $sql = "INSERT INTO carritodecompras (UsuarioID, ProductoID, Cantidad) VALUES ('$UsuarioID', '$ProductoID', '$Cantidad')";
    }

    // Redirigir de vuelta a la página del producto o a donde desees
    header("Location: ver_detalles.php?id=" . $ProductoID);
    exit();
} else {
    // Redirigir si no hay un ID del producto
    header("Location: index.php");
    exit();
}
?>