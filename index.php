<?php
    include_once('conexion.php');
    //Leer 
    $querySelect = 'SELECT * FROM peliculas';
    $pdoSelect = $conn->prepare($querySelect);
    $pdoSelect->execute();
    $peliculas = $pdoSelect->fetchAll();

    //Agregar
    if($_POST){
    $titulo = $_POST['inputTitulo'];
    $sinopsis = $_POST['inputSinopsis'];
    $queryInsert = 'INSERT INTO peliculas(titulo, sinopsis) VALUES(?,?)';
    $pdoInsert = $conn->prepare($queryInsert);
    $pdoInsert->execute(array($titulo, $sinopsis));
    header('Location: index.php');
    }

    //Select unico
    if($_GET){
        $idSeleccionado = $_GET['idSeleccionado']; 
        $querySelectOne = 'SELECT * FROM peliculas WHERE idPelicula= ?';
        $pdoSelectOne = $conn->prepare($querySelectOne);
        $pdoSelectOne->execute(array($idSeleccionado));
        $pelicula = $pdoSelectOne->fetch();
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Peliculas</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-2">
        <?php if(!$_GET): ?>
        <form method="POST">
        <div class="form-group">
        <label for="exampleInputEmail1">Titulo</label>
        <input name="inputTitulo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Sinopsis</label>
        <input type="text" name="inputSinopsis" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
        <?php endif ?> 
        <?php if($_GET): ?>
        <form method="GET" action="editar.php">
        <div class="form-group">
        <label for="exampleInputEmail1">Titulo</label>
        <input value="<?php echo $pelicula['titulo']; ?>" name="inputTitulo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Sinopsis</label>
        <input value="<?php echo $pelicula['sinopsis']; ?>" type="text" name="inputSinopsis" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="hidden" name="inputIdSeleccionado" value="<?php echo $pelicula['idPelicula']; ?>">
        <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        <?php endif ?>   
        
        <form action="eliminarTodas.php" method="post">
         <button class="btn btn-danger mt-2">Eliminar Todas</button>
        </form>
        <table class="table table-hover table-dark mt-2">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Sinopsis</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($peliculas as $pelicula): ?>
    <tr>
      <th scope="row"> <?php echo $pelicula['idPelicula']; ?>  </th>
      <td> <?php echo $pelicula['titulo']; ?> </td>
      <td> <?php echo $pelicula['sinopsis']; ?></td>
      <td>
      <a class="btn btn-success" href="index.php?idSeleccionado=<?php echo $pelicula['idPelicula']; ?>">
      <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
    </svg>
    </a>
      <a class="btn btn-danger" href="eliminar.php?idSeleccionado=<?php echo $pelicula['idPelicula']; ?>">
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
    </div>
    </div>
</body>
</html>