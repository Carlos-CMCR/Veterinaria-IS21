<?php 
class controllerGestionarCitas{

  public static function getListar(){

    include('../model/eCitas.php');
    $citas = new Citas();
    $listar = $citas -> select();
    return $listar;
    
  }
  public static function  actualizarCita($id,$nombre,$correo,$celular,$descripcion,$fecha_c){

    include('../model/eCitas.php');
    $citas = new Citas();
    $citas -> actualizar($id,$nombre,$correo,$celular,$descripcion,$fecha_c);

  }

  public static function delete($id){
    include('../model/eCitas.php');
    $citas = new Citas();
    $delete = $citas -> delete($id);
    return $delete;
  }
    
}



?>