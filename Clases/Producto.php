<?php
    
    require_once('Conexion.php');
    class Producto extends Conexion{ 
        public function getProductos(){
            $sqlSelect = 'SELECT * FROM productos';
            $productos = $this->selectGenerico($sqlSelect);
            return $productos;
        }

        public function insertProducto($infoProducto){
            $sqlInsert = 'INSERT INTO productos(nombre, categoria, precio, foto) VALUES(?,?,?,?)';
            $conexion = $this->__construct();
            $pdoInsert = $conexion->prepare($sqlInsert);
            $pdoInsert->execute($infoProducto);
        }


    }    
?>