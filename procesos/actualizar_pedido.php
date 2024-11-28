<?php
include_once('conexion.php');

// Verificar si la sesión está activa
if (!isset($_SESSION['UsuarioID']) || $_SESSION['Correo'] !== 'max1@outlook.com') {
    header("Location: index.php");
    exit;
}

// Verificar si el formulario fue enviado
if (isset($_POST['PedidoID']) && isset($_POST['nuevo_estado'])) {
    $pedidoID = $_POST['PedidoID'];
    $nuevoEstado = $_POST['nuevo_estado'];

    // Actualizar el estado del pedido
    $sql = "UPDATE pedidos SET Estado = '$nuevoEstado' WHERE PedidoID = $pedidoID AND UsuarioID = " . $_SESSION['UsuarioID'];

    if (mysqli_query($conexion, $sql)) {
        echo "Estado del pedido actualizado correctamente.";
    } else {
        echo "Error al actualizar el estado del pedido: " . mysqli_error($conexion);
    }
} else {
    echo "Datos inválidos.";
}

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir de nuevo a la página de pedidos
header("Location: pedidos.php");
exit;
?>
