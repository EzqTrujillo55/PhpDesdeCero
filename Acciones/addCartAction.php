<?php
require_once '../Clases/Usuario.php';
session_start();
$productoSeleccionado = unserialize($_GET['productoSeleccionado']);
array_push($_SESSION['carritoActual'], $productoSeleccionado);
header('Location: ../Vistas/carrito.php');