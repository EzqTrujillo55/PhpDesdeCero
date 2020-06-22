<?php
    require_once('../Clases/Producto.php'); 
    $idProducto = $_POST['idProducto'];
    $nombreProducto = $_POST['nombreProducto'];
    $precioProducto = $_POST['precioProducto'];
    $categoriaProducto = $_POST['categoriaProducto'];
    $fotoProducto = $_POST['fotoProducto'];  
    $infoProducto = array($nombreProducto, $precioProducto, $categoriaProducto, $fotoProducto, $idProducto);
    $objProducto = new Producto();
    $objProducto->updateProducto($infoProducto);
    header('Location: ../Vistas/homeAdmin.php'); 
?>