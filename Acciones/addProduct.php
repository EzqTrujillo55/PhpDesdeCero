<?php
    require_once('../Clases/Producto.php');
    require_once('../Clases/Usuario.php'); 
    $objUsuario = new Usuario(); 
    $usuarioLogeado = $objUsuario->getSession();
    $idUsuarioLogeado = $usuarioLogeado['idUsuario'];   
    $nombre = $_POST['inputNombreProducto'];
    $precio = $_POST['inputPrecio'];
    $categoria = $_POST['selectCategoria'];
    $nombreFoto = $_FILES['inputFoto']['name']; //contiene el nombre de la foto
    $archivoFoto = $_FILES['inputFoto']['tmp_name']; //contiene el archivo de la foto 
    $ruta = '../imagenes/' . $nombreFoto; //imagenes/deber2.png
    move_uploaded_file($archivoFoto, $ruta); //guardamos la imagen en el servidor 
    $infoProducto = array($nombre, $categoria, $precio, $ruta); //guardar la ruta dentro de la BDD
    $objProducto = new Producto();
    var_dump($objProducto->insertProducto($infoProducto, $idUsuarioLogeado));
    //header('Location: ../Vistas/homeAdmin.php');
?>