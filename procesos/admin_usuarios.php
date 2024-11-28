<?php
include_once('conexion.php');

if (!isset($_SESSION['UsuarioID']) || $_SESSION['Correo'] !== 'max1@outlook.com') {
    header("Location: index.php");
    exit;
}

// Consulta para obtener todos los usuarios registrados
$sql = "SELECT * FROM usuarios";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

// Comprobar si se han encontrado usuarios
if (mysqli_num_rows($resultado) > 0) {
    // Mostrar los usuarios registrados
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='usuario-item'>
            <h3>" . $fila['Nombre'] . "</h3>
            <p>Edad: " . $fila['Edad'] . "</p>
            <p>Correo: " . $fila['Correo'] . "</p>
            <p>Teléfono: " . $fila['Telefono'] . "</p>
            <p>Dirección: " . $fila['Direccion'] . "</p>
            <p>Ciudad: " . $fila['Ciudad'] . "</p>
            <p>Código Postal: " . $fila['CodigoPostal'] . "</p>
        </div>";
    }
} else {
    echo "No se encontraron usuarios registrados.";
}

// Cerrar la conexión
mysqli_close($conexion);
?>