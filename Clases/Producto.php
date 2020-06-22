<?php
    require_once('Conexion.php');
    class Producto extends Conexion{ 
        public function getProductos(){
            $sqlSelect = 'SELECT * FROM productos';
            $productos = $this->selectGenerico($sqlSelect);
            return $productos;
        }

        public function getProductoById($idProductoSeleccionado){
            $sqlSelect = 'SELECT * FROM productos WHERE id=?';
            $conexion = $this->__construct();
            $pdoSelect = $conexion->prepare($sqlSelect);
            $pdoSelect->execute(array($idProductoSeleccionado));
            $producto = $pdoSelect->fetch(); 
            return $producto;
        }

        public function verificarPermisoProductos($idUsuario){
            $sqlPermiso = 'SELECT permisoProductos FROM usuarios WHERE id=?'; 
            $conexion = $this->__construct();
            $pdoPermiso = $conexion->prepare($sqlPermiso);
            $pdoPermiso->execute(array($idUsuario)); 
            $valorPermiso = $pdoPermiso->fetch();
            $valorPermiso = $valorPermiso['permisoProductos']; 
            if($valorPermiso==0){
                $mensaje = 'No puedes insertar productos, tienes denegado el permiso'; 
            }else{
                $mensaje = true; 
            } 
            return $mensaje; 
        }

        public function insertProducto($infoProducto, $idUsuario){
            $permiso = $this->verificarPermisoProductos($idUsuario); 
            if($permiso){
            $sqlInsert = 'INSERT INTO productos(nombre, categoria, precio, foto) VALUES(?,?,?,?)';
            $conexion = $this->__construct();
            $pdoInsert = $conexion->prepare($sqlInsert);
            $pdoInsert->execute($infoProducto);
                return $permiso;
            }else{
                return $permiso; 
            }
        }

        public function updateProducto($infoProducto){ 
            $sqlUpdate = 'UPDATE productos SET nombre=? , precio=?, categoria=?, foto=? WHERE id=?';
            $conexion = $this->__construct();
            $pdoUpdate = $conexion->prepare($sqlUpdate);
            $pdoUpdate->execute($infoProducto);
        }
    
        public function deleteProducto($idProductoSeleccionado){
            $sqlDelete = 'DELETE FROM productos WHERE id=?'; 
            $conexion = $this->__construct(); 
            $pdoDelete = $conexion->prepare($sqlDelete); 
            $pdoDelete->execute(array($idProductoSeleccionado)); 
        }


    }    
?>