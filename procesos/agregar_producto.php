<?php
include "../conexion.php";

// Verificar si se recibieron los datos del formulario
if (isset($_POST['nombre'], $_POST['precio'], $_POST['categoria'], $_POST['imagenURL'], $_POST['descripcion'])) {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $imagenURL = $_POST['imagenURL'];
    $descripcion = $_POST['descripcion'];

    // Insertar el producto en la base de datos
    $sql = "INSERT INTO productos (Nombre, Precio, Categoria, ImagenURL, Descripcion) 
            VALUES ('$nombre', '$precio', '$categoria', '$imagenURL', '$descripcion')";

    if (mysqli_query($conexion, $sql)) {
        // Redirigir a la página de productos después de agregar
        header("Location: ../anadir_inventario.php");
    } else {
        echo "Error al agregar el producto: " . mysqli_error($conexion);
    }
}
?>
