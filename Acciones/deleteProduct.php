<?php 
    require_once('../Clases/Producto.php');
    $idProductoSeleccionado=$_GET['idProductoSeleccionado'];
    $objProducto = new Producto();
    $objProducto->deleteProducto($idProductoSeleccionado);
    header('Location: ../Vistas/homeAdmin.php');
?>