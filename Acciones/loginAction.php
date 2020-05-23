<?php
  require_once('../Clases/Usuario.php');
  $nombreUsuario = $_POST['inputNombreUsuario'];
  $password = $_POST['inputPassword'];
  $objUsuario = new Usuario();
  $objUsuario->login($nombreUsuario, $password);
 ?>
