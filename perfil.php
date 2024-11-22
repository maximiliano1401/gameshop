<?php
session_start();
// Incluir conexión
include "conexion.php";
include "procesos/select_datos_usuario.php";

if (!isset($_SESSION["UsuarioID"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Game Shop</title>
    <link rel="stylesheet" href="Css/perfil.css">
    <style>
        /* Modales */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 500px;
        }

        .modal-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .modal-content input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .modal-footer {
            text-align: right;
        }

        .modal-footer button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .modal-footer .save-btn {
            background-color: #4CAF50;
            color: white;
        }

        .modal-footer .close-btn {
            background-color: #f44336;
            color: white;
        }

        /* Fondo oscuro al abrir el modal */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .modal-active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            Game Shop - Perfil
        </div>
        <div class="profile-info">
            <img src="https://via.placeholder.com/140" alt="Perfil">

            <button class="button" onclick="openModal('modal-info')">
                <span class="title">Tu información y seguridad</span>
                <span class="description">Nombre, datos y contraseña para identificarte</span>
            </button>

            <button class="button" onclick="openModal('modal-tarjetas')">
                <span class="title">Tarjetas</span>
                <span class="description">Información de tarjetas</span>
            </button>

            <button class="button" onclick="openModal('modal-direcciones')">
                <span class="title">Dirección</span>
                <span class="description">Direcciones</span>
            </button>
        </div>
    </div>

    <!-- Modales -->
    <div class="modal-overlay" id="modal-overlay"></div>

    <!-- Modal Información -->
    <div class="modal" id="modal-info">
        <div class="modal-header">Editar Información Personal</div>
        <div class="modal-content">
            <input type="hidden" value="<?php echo $UsuarioID ?>" name="UsuarioID" />
            <input type="text" placeholder="Nombre completo" value="<?php echo $Nombre ?>" name="Nombre" />
            <input type="text" placeholder="9876543210" value="<?php echo $Telefono ?>" name="Telefono" />
            <input type="password" placeholder="Contraseña Actual" name="ContrasenaActual" />
            <input type="password" placeholder="Nueva contraseña" name="ContrasenaNueva" />
            <input type="password" placeholder="Confirmar Nueva contraseña" name="ConfContrasenaNueva" />
        </div>
        <div class="modal-footer">
            <button class="close-btn" onclick="closeModal()">Cancelar</button>
            <button class="save-btn">Guardar</button>
        </div>
    </div>

    <!-- Modal Tarjetas -->
    <div class="modal" id="modal-tarjetas">
        <div class="modal-header">Editar Información de Tarjetas</div>
        <div class="modal-content">
            <input type="hidden" value="<?php echo $UsuarioID ?>" name="UsuarioID" />
            <input type="text" placeholder="Número de tarjeta" value="<?php echo $NumeroTarjeta ?>" name="NumeroTarjeta" />
            <input type="text" placeholder="Nombre del Titular" value="<?php echo $NombreTitular ?>" name="NombreTitular" />
            <input type="date" placeholder="Fecha de vencimiento" value="<?php echo $FechaExpiracion ?>" name="FechaExpiracion" />
            <input type="password" placeholder="CVV" value="<?php  ?>" name="CVV" />
            <select name="TipoTarjeta" id="TipoTarjeta">
                <option value="" disabled <?php echo ($TipoTarjeta == "") ? 'selected' : ''; ?> >Seleccione un tipo de tarjeta</option>
                <option value="Credito" <?php echo ($TipoTarjeta == "Credito") ? 'selected' : ''; ?> >Crédito</option>
                <option value="Debito" <?php echo ($TipoTarjeta == "Debito") ? 'selected' : ''; ?> >Débito</option>
            </select>
        </div>
        <div class="modal-footer">
            <button class="close-btn" onclick="closeModal()">Cancelar</button>
            <button class="save-btn">Guardar</button>
        </div>
    </div>

    <!-- Modal Direcciones -->
    <div class="modal" id="modal-direcciones">
        <div class="modal-header">Editar Dirección</div>
        <div class="modal-content">
            <input type="hidden" value="<?php echo $UsuarioID ?>" name="UsuarioID" />
            <input type="text" placeholder="Calle y número" value="<?php echo $Direccion ?>" name="Direccion" />
            <input type="text" placeholder="Ciudad" value="<?php echo $Ciudad ?>" name="Ciudad" />
            <input type="text" placeholder="Código postal" value="<?php echo $CodigoPostal ?>" name="CodigoPostal" />
        </div>
        <div class="modal-footer">
            <button class="close-btn" onclick="closeModal()">Cancelar</button>
            <button class="save-btn">Guardar</button>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('modal-active');
            document.getElementById('modal-overlay').classList.add('modal-active');
        }

        function closeModal() {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => modal.classList.remove('modal-active'));
            document.getElementById('modal-overlay').classList.remove('modal-active');
        }
    </script>
</body>

</html>
