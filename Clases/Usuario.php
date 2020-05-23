<?php
require_once('../Clases/Conexion.php');
class Usuario extends Conexion{

  public function registroUsuario($nombreUsuario, $clave, $rol){
      $conexion = $this->__construct();
      if(!$this->encontrarUsuario($nombreUsuario)){
      $claveHash = password_hash($clave, PASSWORD_DEFAULT);
      $sqlInsertUser = 'INSERT INTO usuarios(nombreUsuario,clave,rol) VALUES(?,?,?)';
      $pdoInsertUser = $conexion->prepare($sqlInsertUser);
      $insercion = $pdoInsertUser->execute(array($nombreUsuario, $claveHash, $rol));
      if($insercion){
        $mensaje = true; //Se registró exitosamente
      }else{
        $mensaje = false; //Error a nivel de BD, contáctese con soporte.
      }
    }else{
      $mensaje = false; //ya existe un usuario con el nombre proporcionado, use otro.
    }
      return $mensaje;
  }

  public function encontrarUsuario($nombreUsuario){
     $conexion = $this->__construct();
     $sqlFindUser = 'SELECT * FROM usuarios WHERE nombreUsuario=?';
     $pdoFindUser = $conexion->prepare($sqlFindUser);
     $pdoFindUser->execute();
     $foundUser = $pdoFindUser->fetch();
     if($foundUser){
       $coincidencia = $foundUser;
     }else{
       $coincidencia = false;
     }
     return $coincidencia;
  }

  public function login($nombreUsuario, $clave){
    $coincidencia = $this->encontrarUsuario($nombreUsuario);
    if(!$coincidencia){
      $mensaje = false; //No existe un usuario con dicho nombre!
    }else{
      if(password_verify($password, $coincidencia['clave'])){
        $mensaje = true; //Contraseña correcta
      }else{
        $mensaje = false; //Contraseña erronea
      }
    }
    return $mensaje;
  }


}




 ?>
