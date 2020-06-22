<?php
    include_once('../Vistas/master.php');
    require_once('../Clases/Producto.php');
    require_once('../Clases/Categoria.php');
    $objProducto = new Producto();
    $productos = $objProducto->getProductos();
    $objCategoria = new Categoria();
    $categorias = $objCategoria->getCategorias(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gestión de productos</title>
</head>

<body>
   <?php include('../Vistas/header.php'); ?>
    <div class="container">
        <h3 class="text-center">Gestión Productos</h3>
        <form action="../Acciones/addProduct.php" method="post" enctype="multipart/form-data">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="inputNombreProducto">
            <label for="">Precio</label>
            <input class="form-control" type="text" name="inputPrecio">
            <div class="form-group">
                <label for="my-select">Categoria</label>
                <select id="my-select" name="selectCategoria" class="custom-select" name="">
                        <?php foreach($categorias as $categoria): ?>
                        <option> <?php echo $categoria['nombreCategoria']; ?> </option>
                        <?php endforeach ?>
                </select>
            </div>
            <label for="">Foto</label>
            <input class="form-control" type="file" name="inputFoto">
            <button type="submit" class="btn btn-primary mt-2">Agregar Producto</button>
        </form>
        <div class="row py-3">
            <?php foreach($productos as $producto): ?>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $producto['foto']; ?>" alt="No se ha encontrado la imagen">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $producto['nombre']; ?></h5>
                        <p class="card-text"><?php echo '$'. $producto['precio']; ?></p>
                        <p class="card-text">  
                            <a href="../Vistas/editProduct.php?idProductoSeleccionado=<?php echo $producto['id'];?>" class="btn btn-success">Editar Producto</a>
                            <a href="../Acciones/deleteProduct.php?idProductoSeleccionado=<?php echo $producto['id'];?>" class="btn btn-danger">Eliminar Producto</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>

