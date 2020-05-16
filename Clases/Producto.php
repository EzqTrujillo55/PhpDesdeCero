<?php
    
    require_once('Conexion.php');
    class Producto extends Conexion{
         //Public.- Se puede acceder a este desde cualquier otro método de la clase
         //o desde otra clase
         //Private.- Solo se puede accerder desde la misma clase 
         public $nombre;
         public $categoria;
         public $precio;
         public $foto;
         
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

         /*public function setNombre($nombre){
             $this->nombre = $nombre;
             return $this->nombre;
         }*/
    }

    /*$objProducto = new Producto();
    //echo "Llamando a metodo getNombre de la clase Producto <br>";
    //echo $objProducto->setNombre('celular');

    class Padre{
        public function mensajePadre(){
            return 'hola desde el padre';
        }
    }

    class Hijo extends Padre{
        public function mensajeHijo(){
            return $this->mensajePadre();
        }
    }

    $objHijo = new Hijo();
    echo $objHijo->mensajeHijo();
*/
    
?>