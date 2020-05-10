<?php
    include_once('conexion.php');
    $titulo = $_GET['inputTitulo'];
    $sinopsis = $_GET['inputSinopsis'];
    $idSeleccionado = $_GET['idSeleccionado'];
    $queryUpdate = 'UPDATE peliculas SET titulo=?, sinopsis=? WHERE idPelicula=?';
    $pdoUpdate = $conn->prepare($queryUpdate);
    $pdoUpdate->execute(array($titulo, $sinopsis, $idSeleccionado));
    header('Location: index.php');

?>