<?php
session_start();
include "../conexion.php";

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["UsuarioID"])) {
    header("Location: ../login.php");
    exit();
}

// Verificar si se ha enviado un ID de producto
if (isset($_POST['ProductoID'])) {
    $UsuarioID = $_SESSION["UsuarioID"];
    $ProductoID = $_POST['ProductoID'];

    // Verificar si el producto ya está en el carrito
    $sql = "SELECT Cantidad FROM carritodecompras 
    WHERE UsuarioID = $UsuarioID 
    AND ProductoID = $ProductoID";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado->num_rows > 0) {
        $fila = mysqli_fetch_assoc($resultado);

        if ($fila["Cantidad"] > 0) {
        
            echo "<script> alert('Producto ya en carrito.'); </script>";
            echo "<script> window.history.back(); </script>";
            // header("Location: ../ver_detalles.php?id=" . $ProductoID);

            exit();
        }

        } else {
        // Si el producto no está en el carrito, agregarlo
        $Cantidad = 1;
        $sql = "INSERT INTO carritodecompras (UsuarioID, ProductoID, Cantidad) 
        VALUES ('$UsuarioID', '$ProductoID', '$Cantidad')";

        if (mysqli_query($conexion, $sql)) {
            echo "<script>
                alert('Producto Añadido.');
                </script>";

            echo "<script> window.history.back(); </script>";

        } else {
            echo "Error al guardar los datos: " . mysqli_error($conexion);
        }
    }

    // Redirigir de vuelta a la página del producto
    // header("Location: ../ver_detalles.php?id=" . $ProductoID);
    exit();
} else {
    // Redirigir si no hay un ID del producto
    header("Location: ../index.php");
    exit();
}

mysqli_close($conexion);
