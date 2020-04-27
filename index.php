<?php
    session_start(); 
    $mensaje= "este es el mensaje que quiero que se guarde en la cache del navegador";
    $momentoDestruccion= time()+3600;
    setcookie("mensajeCookie", $mensaje, $momentoDestruccion); 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <form action="login.php" method="post">
    <input type="text" placeholder="ingresa tu nombre para acceder" name="inputNombre">
    <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="perfil.php">Perfil</a>
    <p> <?php echo isset($_SESSION['nombreUsuario'])?'Ha iniciado sesión como' . $_SESSION['nombreUsuario']: 'Aún no ha iniciado sesión'?></p>
    <p> <?php echo 'Cookie: ' . $_COOKIE['mensajeCookie']; ?></p>
</body>
</html>