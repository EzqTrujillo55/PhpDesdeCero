<?php
    require_once('../Clases/Producto.php');
    $nombre = $_POST['inputNombreProducto'];
    $precio = $_POST['inputPrecio'];
    $categoria = $_POST['selectCategoria'];
    $foto = $_POST['inputFoto'];
    $infoProducto = array($nombre, $categoria, $precio, $foto);
    $objProducto = new Producto();
    $objProducto->insertProducto($infoProducto);
    header('Location: ../Vistas/homeAdmin.php');
?>