<?php

include "conexion.php";

// Consultar productos en base de datos
$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);

// Verificar si hay resultados
if (mysqli_num_rows($resultado) > 0) {

    // Mostrar resultados
    echo "<section class='products'>"; // Inicia la sección de productos
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<a href='ver_detalles.php?id=" . $fila["ProductoID"] . "'><button>";
        echo "<div class='product'>"; // Inicia cada producto
        echo "<img src='" . $fila["ImagenURL"] . "' alt='" . $fila["Nombre"] . "'>"; // Muestra la imagen del producto
        echo "<p>" . $fila["Nombre"] . "</p>"; // Nombre y descripción
        echo "<span class='price'>$" . $fila["Precio"] . "</span>"; // Muestra el precio con formato
        echo " </button></a>"; // Botón para ver más detalles
        echo "</div>"; // Cierra el div de cada producto
    }
    echo "</section>"; // Cierra la sección de productos
} else {
    echo "No hay productos en la base de datos.";
}
?>
