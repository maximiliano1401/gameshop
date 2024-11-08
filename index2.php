<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola <?php 
    
    if(!isset($_SESSION["Nombre"])){
        echo "Mundo";
        echo "</h1>";
    } else {
        echo $_SESSION["Nombre"];
        echo "</h1>";
        echo"<br>";
        echo "<a href='procesos/cerrar_sesion.php'>Cerrar Sesion</a>";
    }
    ?>
<br>
    <?php
    include "procesos/mostrar_productos.php"
    ?>

<br><br>
------
<br>
    <?php
    //  include "procesos_test/mostrar_productos_paginados.php"
    ?>

 

</body>
</html>