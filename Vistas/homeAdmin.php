<?php
    require_once('../Clases/Producto.php');
    $objProducto = new Producto();
    $productos = $objProducto->getProductos();
    //var_dump($productos);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de productos</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Gestión Productos</h3>
        <form action="../Acciones/addProduct.php" method="post">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="inputNombreProducto">
            <label for="">Precio</label>
            <input class="form-control" type="text" name="inputPrecio">
            <div class="form-group">
                <label for="my-select">Categoria</label>
                <select id="my-select" name="selectCategoria" class="custom-select" name="">
                    <option>Text</option>
                </select>
            </div>
            <label for="">Foto</label>
            <input class="form-control" type="text" name="inputFoto">
            <button type="submit" class="btn btn-primary mt-2">Agregar Producto</button>
        </form>
        <div class="row py-3">
            <?php foreach($productos as $producto): ?>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $producto['nombre']; ?></h5>
                        <p class="card-text"><?php echo '$'. $producto['precio']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>