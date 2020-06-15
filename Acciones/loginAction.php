<?php
require_once '../Clases/Usuario.php';
$nombreUsuario = $_POST['inputNombreUsuario'];
$password = $_POST['inputPassword'];
$objUsuario = new Usuario();
$respuesta = $objUsuario->login($nombreUsuario, $password);
if ($respuesta['estado']) {
    header('Location: ../Vistas/homeCustomer.php');
} else {
    header('Location: ../Vistas/loginForm.php');
}