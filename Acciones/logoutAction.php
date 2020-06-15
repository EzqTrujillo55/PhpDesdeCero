<?php
require_once '../Clases/Usuario.php';
$objUsuario = new Usuario();
$objUsuario->closeSession();
header('Location: ../Vistas/loginForm.php');