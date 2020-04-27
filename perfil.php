<?php
    session_start();
    if(!isset($_SESSION['nombreUsuario'])){ 
        echo "No tienes accesos para acá, adiós.";
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h2> <?php echo "Bienvenido " . strtoupper($_SESSION['nombreUsuario']); ?></h2>
    <p> <?php echo 'Cookie: ' . $_COOKIE['mensajeCookie'] ?></p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>