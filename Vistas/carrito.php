<?php
include_once '../Vistas/master.php';
require_once '../Clases/Usuario.php';
$objUsuario = new Usuario();
$carritoActual = $objUsuario->getCart();
//var_dump($carritoActual);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito actual</title>
</head>

<body>
    <?php include '../Vistas/header.php';?>
    <div class="container mt-2">
        <ul class="list-group">
            <?php
$_SESSION['suma'] = 0;
foreach ($carritoActual as $productoCarrito): ?>
            <li class="list-group-item"> <?php echo $productoCarrito['nombre'] . '- $' . $productoCarrito['precio']; ?>
            </li>
            <?php
$_SESSION['suma'] += $productoCarrito['precio'];
endforeach?>
            <li class="list-group-item active">
                <?php echo $_SESSION['suma']; ?>
            </li>
        </ul>
        <br>
        <?php include '../Scripts/paypalScript.php';?>
    </div>
</body>