<?php
    include_once('conexion.php');
    $idSeleccionado = $_GET['idSeleccionado'];
    $queryDelete = 'DELETE FROM peliculas WHERE idPelicula= ?';
    $pdoDelete = $conn->prepare($queryDelete);
    $pdoDelete->execute(array($idSeleccionado));
    header('Location: index.php');

?>