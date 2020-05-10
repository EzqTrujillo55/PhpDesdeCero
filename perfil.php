<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: loginForm.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil <?php echo $_SESSION['username']; ?> </title>
</head>
<body>
    <h3>Bienvenid@ <?php echo $_SESSION['username']; ?></h3>
    <a href="index.php">Crud de Peliculas</a>
    <a href="logoutAction.php">Cerrar Sesión</a>
</body>
</html>