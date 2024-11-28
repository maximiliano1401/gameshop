<?php
include_once('conexion.php');

// Verificar si la sesión está activa y si el correo es el correcto (para administradores, por ejemplo)
if (!isset($_SESSION['UsuarioID']) || $_SESSION['Correo'] !== 'max1@outlook.com') {
    header("Location: index.php");
    exit;
}

// Consulta para obtener todos los pedidos
$sql = "SELECT * FROM pedidos";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

// Comprobar si se han encontrado pedidos
if (mysqli_num_rows($resultado) > 0) {
    // Mostrar los pedidos
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='pedido-item'>
            <h3>Pedido ID: " . $fila['PedidoID'] . "</h3>
            <p>Fecha de Pedido: " . $fila['FechaPedido'] . "</p>
            <p>Dirección de Envío: " . $fila['DireccionEnvio'] . "</p>
            <p>Total: $" . $fila['Total'] . "</p>
            <p>Estado Actual: " . $fila['Estado'] . "</p>
            
            <!-- Formulario para cambiar el estado del pedido -->
            <form action='cambiar_estado.php' method='POST'>
                <input type='hidden' name='PedidoID' value='" . $fila['PedidoID'] . "'>
                <select name='nuevo_estado'>
                    <option value='Activo' " . ($fila['Estado'] == 'Activo' ? 'selected' : '') . ">Activo</option>
                    <option value='Enviado' " . ($fila['Estado'] == 'Enviado' ? 'selected' : '') . ">Enviado</option>
                    <option value='Entregado' " . ($fila['Estado'] == 'Entregado' ? 'selected' : '') . ">Entregado</option>
                    <option value='Cancelado' " . ($fila['Estado'] == 'Cancelado' ? 'selected' : '') . ">Cancelado</option>
                </select>
                <button type='submit'>Actualizar Estado</button>
            </form>
        </div>";
    }
} else {
    echo "No se encontraron pedidos.";
}

// Cerrar la conexión
mysqli_close($conexion);
?>