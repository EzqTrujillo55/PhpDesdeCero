<?php
/*Mysql --> obsoleta
Mysqli --> Solo sirve para Mysql
PDO --> 1. No solamente sirve para conectar con mysql 
        2. Sentencias preparadas= EVITAR INYECCIONES SQL. 
*/
try {
    $usuario = 'root';
    $pass = ''; 
    $mbd = new PDO('mysql:host=localhost;dbname=cine', $usuario, $pass);
    foreach($mbd->query('SELECT * from peliculas') as $fila) {
        print_r($fila);
    }
    //$mbd = null;
    echo '<br> Coneccion satisfactoria';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}



