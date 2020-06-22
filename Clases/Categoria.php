<?php
require_once('Conexion.php');

Class Categoria extends Conexion{
    public function getCategorias(){
        $sqlSelect = 'SELECT * FROM categorias';
        $categorias = $this->selectGenerico($sqlSelect);
        return $categorias;
    }
}