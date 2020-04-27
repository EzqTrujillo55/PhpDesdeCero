<?php
    $movies=[
        [
          'title' => 'Harry Potter',
          'year' => '2006',
          'category' => 'Aventura' 
        ],
        [
            'title' => 'Rambo',
            'year' => '1990',
            'category' => 'Acción' 
        ],
        [
            'title'=> 'Animale Nocturnos',
            'year' => '2016',
            'category' => 'Drama'
        ]
        ];
    
    function selectCategory($category, $movies){
        switch ($category) {
            case 'Aventura':
                echo listMovies($category, $movies);
            break;
            case 'Acción':
                echo listMovies($category, $movies);
                break;
            case 'Drama':
                echo listMovies($category, $movies);
                break;
            case '':
                echo listMovies($category, $movies);
                break; 
            default:
                echo 'Ha seleccionado otra categoría';
                break;
        }
    }

    function listMovies($category, $movies){
        echo '<h3>' . $category . '<h3/>';
        echo 'Lista de peliculas: </br>';
            if($category!=""){
                foreach($movies as $movie){
                    if($movie['category']==$category){
                        echo $movie['title'] . '<hr/>';
                    }
                }
            }else{
                foreach($movies as $movie){
                        echo $movie['title'] . '<hr/>';
                }
            }
                
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  include('header.php'); ?>
    <div class="container">
    <div class="jumbotron mt-4">
    <?php echo selectCategory($busquedaCategory, $movies);?>
    </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>