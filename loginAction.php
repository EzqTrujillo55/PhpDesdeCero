<?php
    include_once('conexion.php');
    session_start();
    $userName = $_POST['inputUsuario'];
    $password = $_POST['inputClave'];
    
    $queryFindUser = 'SELECT * FROM users WHERE username=?';
    $pdoFindUser = $conn->prepare($queryFindUser);
    $pdoFindUser->execute(array($userName));
    $userCoincidence = $pdoFindUser->fetch();
    //var_dump($coincidence);
    if(!$userCoincidence){
        echo 'No existe ese usuario, recuerda bien !';
        die();
    }

    if(password_verify($password, $userCoincidence['passw'])){
        echo "Contraseña correcta, Bienvenido {$userCoincidence['username']}";
        $_SESSION['username'] = $userCoincidence['username'];
        header('Location: perfil.php');
    }else{
        echo "Contraseña incorrecta, intenta de nuevo!";
    }

    

?>