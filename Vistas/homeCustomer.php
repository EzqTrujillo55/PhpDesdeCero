<?php
    include_once('../Vistas/master.php');
    require_once('../Clases/Producto.php');
    $objProducto = new Producto();
    $productos = $objProducto->getProductos();
    //var_dump($productos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <?php include('../Vistas/header.php'); ?>
    <?php foreach($productos as $producto): ?>
    <p> <?php echo $producto['nombre']; ?> </p>
    <?php endforeach ?>
</body>

</html>
