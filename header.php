<?php 
    if(isset($_POST['busquedaCategory'])){
        if($_POST['busquedaCategory']!=""){
        $busquedaCategory = $_POST['busquedaCategory'];
        }else{
        $busquedaCategory="";    
        } 
    }else{
        $busquedaCategory="";
    }
    
?>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand">Cine Temple</a>
  <form class="form-inline" method="POST">
    <input name="busquedaCategory" class="form-control mr-sm-2" type="search" placeholder="Digite categoria.." aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
