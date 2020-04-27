<?php
    session_start();

    $_SESSION['nombreUsuario'] = $_POST['inputNombre']; 
    if(isset($_SESSION['nombreUsuario'])){
        header('Location: index.php'); 
    }else{
        echo 'El nombre de usuario no puede ser null'; 
    }

?>