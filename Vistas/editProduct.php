<?php
    include_once('../Vistas/master.php');
    include_once('../Vistas/header.php');
    require_once('../Clases/Producto.php');
    $idProductoSeleccionado = $_GET['idProductoSeleccionado'];
    $objProducto = new Producto();
    $producto = $objProducto->getProductoById($idProductoSeleccionado); 
?>

<div class="container">
    <h3>Editando: <?php echo $producto['nombre'] ?></h3>
    <form action="../Acciones/editProduct.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $idProductoSeleccionado?>" name="idProducto">
        <label for="">Nombre</label>
        <input class="form-control" type="text" name="nombreProducto" value="<?php echo $producto['nombre']; ?>">
        <label for="">Precio</label>
        <input class="form-control" type="text" name="precioProducto" value="<?php echo $producto['precio']; ?>">
        <label for="">Categoria</label>
            <select id="my-select" class="custom-select" name="categoriaProducto">
                <option> <?php echo $producto['categoria']; ?> </option>
            </select>
        <label for="">Foto</label>
        <input class="form-control" type="text" name="fotoProducto" value="<?php echo $producto['foto']; ?>">
        <button type="submit">Editar!</button>
    </form>

</div>
