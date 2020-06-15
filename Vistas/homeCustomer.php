<?php
include_once '../Vistas/master.php';
require_once '../Clases/Producto.php';
require_once '../Clases/Usuario.php';
$objProducto = new Producto();
$productos = $objProducto->getProductos();
$objUsuario = new Usuario();
$infoUsuarioLogeado = $objUsuario->getSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <?php include '../Vistas/header.php';?>
    <div class="container">
        <div class="row">
            <?php foreach ($productos as $producto): ?>
            <div class="col-4">
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                        <p class="card-text"><?php echo '$' . $producto['precio']; ?></p>
                        <p class="card-text">
                            <a href="../Acciones/addCartAction.php?productoSeleccionado=<?php echo urlencode(serialize($producto)); ?>"
                                class="btn btn-success">Agregar a carrito</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
</body>

</html>