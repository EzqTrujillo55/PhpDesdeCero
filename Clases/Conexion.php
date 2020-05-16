<?php

class Conexion{
    private $link;
    private $user;
    private $pass;
    private $conexion;
    
    public function __construct(){
        $this->link = 'mysql:host=localhost;dbname=tiendaVirtual';
        $this->user = 'root';
        $this->pass = '';
        $this->conexion = new PDO($this->link, $this->user, $this->pass);
        return $this->conexion;
    }


    public function selectGenerico($querySelect){
        $pdoSelect = $this->conexion->prepare($querySelect);
        $pdoSelect->execute();
        $resultado = $pdoSelect->fetchAll();
        return $resultado; 
    }
}

    /*$objConexion = new Conexion();
    $conexion = $objConexion->__construct();
    */
?>