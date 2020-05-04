<?php
    include_once('conexion.php');
    $queryTruncate = 'TRUNCATE TABLE peliculas';
    $pdoTruncate = $conn->prepare($queryTruncate);
    $pdoTruncate->execute();
    header('Location:index.php');
?> 