<?php
    session_start();
    include_once "conexion.php";
    header('Content-Type: application/json');

    if (!isset($_SESSION["UsuarioID"])) {
        header("Location: login.php");
        exit;
    }
    

    // Procesar registro
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $UsuarioID = trim($_POST["UsuarioID"]);
        $NumeroTarjeta = trim($_POST["NumeroTarjeta"]);
        $NombreTitular = trim($_POST["NombreTitular"]);
        $FechaExpiracion = trim($_POST["FechaExpiracion"]);
        $CVV = trim($_POST["CVV"]);
        $TipoTarjeta = trim($_POST["TipoTarjeta"]);


        // Validamos que ninguna variable esté vacái
        $validaciones = [$NumeroTarjeta, $NombreTitular, $FechaExpiracion, $CVV, $TipoTarjeta];
        foreach ($validaciones as $validar) {
            if (empty($validar)) {
                echo json_encode(["status"=> "error","message"=> "Por favor llenar todos los campos."]);
                exit;
            }
        }

        if (!is_numeric($NumeroTarjeta) || strlen($NumeroTarjeta) < 13 || $NumeroTarjeta < 0) {
            echo json_encode(["status" => "error", "message" => "Ingrese una tarjeta válida."]);
            exit;
        }
        
        if (!is_numeric($CVV) || strlen($CVV) < 3 || $CVV < 0) {
            echo json_encode(["status" => "error", "message" => "No pudimos validar la tarjeta, compruebe los datos."]);
            exit;
        }

        $sqlDireccion = "UPDATE tarjetas 
        SET NumeroTarjeta = '$NumeroTarjeta', NombreTitular = '$NombreTitular', FechaExpiracion = $FechaExpiracion, CVV = $CVV, TipoTarjeta = $TipoTarjeta 
        WHERE UsuarioID = '$UsuarioID'";
        
        if(mysqli_query($conexion, $sqlDireccion)) {
            echo json_encode(["status"=> "success","message"=> "Tarjeta actualizada."]);
        } else {
            echo json_encode(["status"=> "error","message"=> "Error al actualizar tarjeta."]);
        }

    }

    // Cerrar conexion
    mysqli_close($conexion);
    ?>