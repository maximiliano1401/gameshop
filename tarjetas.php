<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Dirección</title>
    <style>
        :root {
            --color-principal: #FFA500;
            --color-fondo: #F8F8F8;
            --radio-bordes: 8px;
            --sombra-caja: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: var(--color-fondo);
        }

        .contenedor {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            background-color: var(--color-principal);
            color: white;
            padding: 15px;
            text-align: center;
            margin: 0;
        }

        .direccion-contenedor {
            background: #FFF3E0;
            padding: 20px;
            border-radius: var(--radio-bordes);
            box-shadow: var(--sombra-caja);
        }

        .boton {
            padding: 10px 15px;
            border: none;
            border-radius: var(--radio-bordes);
            font-size: 14px;
            cursor: pointer;
        }

        .boton-actualizar {
            background-color: var(--color-principal);
            color: white;
        }

        /* Modal */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-activo {
            display: flex;
        }

        .modal-contenido {
            background: white;
            padding: 20px;
            border-radius: var(--radio-bordes);
            width: 90%;
            max-width: 400px;
            max-height: 90%;
            overflow: auto;
            box-shadow: var(--sombra-caja);
        }

        .modal-titulo {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .modal-formulario input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: var(--radio-bordes);
        }

        .modal-botones {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 10px;
        }

        .boton-cancelar {
            background-color: #ccc;
            color: white;
        }

        .boton-guardar {
            background-color: var(--color-principal);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Información del Perfil</h1>
    <div class="contenedor">
        <div class="direccion-contenedor">
            <h2>Dirección</h2>
            <p>Maximiliano Rueda<br>
               Andador Veracruz Mza 89 Lote 161<br>
               FIDEL VELAZQUEZ<br>
               SAN FRANCISCO DE CAMPECHE, CAMPECHE, 24023
            </p>
            <button class="boton boton-actualizar" id="abrirModal">Actualizar Dirección</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="modal">
        <div class="modal-contenido">
            <div class="modal-titulo">Actualizar Dirección</div>
            <form class="modal-formulario">
                <input type="text" placeholder="Nombre completo" required>
                <input type="text" placeholder="Calle y número" required>
                <input type="text" placeholder="Colonia" required>
                <input type="text" placeholder="Ciudad" required>
                <input type="text" placeholder="Estado" required>
                <input type="text" placeholder="Código Postal" required>
                <div class="modal-botones">
                    <button type="button" class="boton boton-cancelar" id="cerrarModal">Cancelar</button>
                    <button type="submit" class="boton boton-guardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Referencias a los elementos
        const modal = document.getElementById('modal');
        const abrirModal = document.getElementById('abrirModal');
        const cerrarModal = document.getElementById('cerrarModal');

        // Abrir el modal
        abrirModal.addEventListener('click', () => {
            modal.classList.add('modal-activo');
        });

        // Cerrar el modal
        cerrarModal.addEventListener('click', () => {
            modal.classList.remove('modal-activo');
        });

        // Cerrar el modal al hacer clic fuera del contenido
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('modal-activo');
            }
        });
    </script>
</body>
</html>
