<?php
    include_once('conexion.php');
    $newUser = $_POST['inputUsuario'];
    $plainPassword = $_POST['inputClave'];
    $plainPassword2 = $_POST['inputClave2'];
    $hashPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
    //echo 'La clave encriptada es:' . $hashPassword;

    $queryFindUser = 'SELECT * FROM users WHERE username=?';
    $pdoFindUser = $conn->prepare($queryFindUser);
    $pdoFindUser->execute(array($newUser));
    $coincidence = $pdoFindUser->fetch();
    if($coincidence){
        echo 'El usuario ya existe, intenta con otro nombre!';
        die();
    }

    if(password_verify($plainPassword2, $hashPassword)){
        //echo 'Las claves coinciden, el usuario se puede registrar';
        $queryInsert = 'INSERT INTO users(username, passw) VALUES(?,?)';
        $pdoInsert = $conn->prepare($queryInsert);
        $pdoInsert->execute(array($newUser, $hashPassword ));
        $respuesta = $pdoInsert->execute(array($newUser, $hashPassword ));
        if($respuesta){
            echo 'Se registró exitosamente el usuario!';
        }else{
            echo 'No se registró el usuario';
        }
    }else{
        echo 'Las claves no coinciden, no se puede registrar';
    }
?>