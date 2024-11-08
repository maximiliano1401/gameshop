<?php

include "conexion.php";

// Definir cuántos productos mostrar por página
$productosPorPagina = 5;

// Obtener el número de página actual desde la URL, si no existe se establece en 1
$paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Calcular el offset
$offset = ($paginaActual - 1) * $productosPorPagina;

// Consultar productos en base de datos con limitación
$sql = "SELECT * FROM productos LIMIT $productosPorPagina OFFSET $offset";
$resultado = mysqli_query($conexion, $sql);

// Verificar si hay resultados
if (mysqli_num_rows($resultado) > 0) {
    // Mostrar resultados
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<img src='". $fila["ImagenURL"] . "'> <br> " . $fila["Nombre"] . " - " . $fila["Descripcion"] . " - " . $fila["Precio"] . " - " . $fila["Stock"] . " - " . $fila["Categoria"] . "<br><br><br>";
    }

    // Contar el total de productos para calcular el total de páginas
    $sqlTotal = "SELECT COUNT(*) as total FROM productos";
    $resultadoTotal = mysqli_query($conexion, $sqlTotal);
    $totalProductos = mysqli_fetch_assoc($resultadoTotal)['total'];
    $totalPaginas = ceil($totalProductos / $productosPorPagina);

    // Enlaces de paginación
    for ($i = 1; $i <= $totalPaginas; $i++) {
        echo "<a href='?pagina=$i'>$i</a> ";
    }
} else {
    echo "No hay productos en la base de datos.";
}
?>
