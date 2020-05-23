<?php
  require_once('../Clases/Usuario.php');
  $nombreUsuario = $_POST['inputNombreUsuario'];
  $password = $_POST['inputPassword'];
  $rol = 'CLIENTE';
  $objUsuario = new Usuario();
  $respuesta = $objUsuario->registroUsuario($nombreUsuario, $password, $rol);
  if($respuesta){
    header('Location: ../Vistas/loginForm.php');
  }else{
    header('Location: ../Vistas/registerForm.php');
  }
?>
