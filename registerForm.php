<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <form action="registerAction.php" method="post">
    <label>Nombre de usuario</label>
    <input type="text" name="inputUsuario">
    <label>Clave</label>
    <input type="text" name="inputClave">
    <label>Repite tu clave</label>
    <input type="text" name="inputClave2">
    <button>Registrar Usuario</button>
    <a href="loginForm.php">Ya tienes cuenta? Inicia sesión!</a>
    </form>
</body>
</html>