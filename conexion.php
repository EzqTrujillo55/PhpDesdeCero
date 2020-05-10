<?php
/*
1. Mysql --> No usada actualmente. Obsoleta
2. Mysqli --> Muy usada, pero solo sirve para bases de datos Mysql
3. PDO --> Bastante implementada, no solamente sirve para bases Mysql, sentencias preparadas.
*/
try {
    $usuario= 'root';
    $pass='';
    $conn = new PDO('mysql:host=localhost;dbname=cine', $usuario, $pass);
    //echo 'Conexion satisfactoria';
    /*foreach($mbd->query('SELECT * from peliculas') as $fila) {
        print_r($fila);
    }
    $mbd = null;*/
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}



?>