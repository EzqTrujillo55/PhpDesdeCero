<?php
    include_once('conexion.php');
    session_start();
    if(!isset($_SESSION['username'])){
    	header('Location: loginForm.php');
    }
    $querySelect = 'SELECT  * FROM peliculas';
    $pdoSelect = $conn->prepare($querySelect);
    $pdoSelect->execute();
    $peliculas = $pdoSelect->fetchAll();
    //print_r($peliculas);
    
    if($_POST){
    $titulo = $_POST['inputTitulo'];
    $sinopsis = $_POST['inputSinopsis'];
    $queryInsert = 'INSERT INTO peliculas(titulo, sinopsis) VALUES (?,?)';
    $pdoInsert = $conn->prepare($queryInsert);
    $pdoInsert->execute(array($titulo, $sinopsis));
    header('Location: index.php');
    }

    if($_GET){
        $idSeleccionado = $_GET['idSeleccionado'];
        $querySelectOne = 'SELECT * FROM peliculas WHERE idPelicula=?';
        $pdoSelectOne = $conn->prepare($querySelectOne);
        $pdoSelectOne->execute(array($idSeleccionado));
        $peliculaSeleccionada = $pdoSelectOne->fetch(); //fetch= un solo registro
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>
<div class="container">
<div class="jumbotron mt-2">
    <?php if(!$_GET): ?>
    <h3>Agregar Película</h3>
    <form method="post">
        <label for="inputTitulo"> Titulo </label>
        <input type="text" class="form-control" name="inputTitulo">
        <label for="inputSinopsis"> Sinopsis</label>
        <input type="text" class="form-control" name="inputSinopsis">
        <button type="submit" class="btn btn-success mt-2">Agregar Película</button>
    </form>
    <?php endif ?>
    <?php if($_GET): ?>
        <h3>Editar Película</h3>
    <form action="editar.php" method="GET">
        <label for="inputTitulo"> Titulo </label>
        <input type="text" class="form-control" name="inputTitulo" value="<?php echo $peliculaSeleccionada['titulo']; ?>">
        <label for="inputSinopsis"> Sinopsis</label>
        <input type="text" class="form-control" name="inputSinopsis" value="<?php echo $peliculaSeleccionada['sinopsis']; ?>">
        <input type="hidden" name="idSeleccionado" value="<?php echo $peliculaSeleccionada['idPelicula']; ?>">
        <button type="submit" class="btn btn-primary mt-2">Editar Película</button>
    </form>
    <?php endif ?>
    <form action="eliminarTodos.php" method="post">
        <button class="btn btn-danger mt-2"> Eliminar Todas!</button>
    </form>
    <h3 class="mt-2">Películas</h3>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Sinopsis</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($peliculas as $pelicula): ?>
    <tr>
      <th scope="row"><?php echo $pelicula['idPelicula'] ?></th>
      <td><?php echo $pelicula['titulo'] ?></td>
      <td><?php echo $pelicula['sinopsis'] ?></td>
      <td> 
        <a class="btn btn-warning" href="index.php?idSeleccionado=<?php echo $pelicula['idPelicula'];?>">
        <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
        </svg>
        </a>
        
        <a class="btn btn-danger" href="eliminar.php?idSeleccionado=<?php echo $pelicula['idPelicula'];?>">
        <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
        </svg>
        </a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
  <a href="perfil.php">Perfil</a>  
  <a href="logoutAction.php">Cerrar Sesión</a>

</div>
</div>
</body>
</html>