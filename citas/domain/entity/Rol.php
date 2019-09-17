<?php
    require_once  "/../../repository/RolRepository.php";
    require_once  "conexion.php";
   // session_start();
    error_reporting(E_ALL ^ E_NOTICE);

class Rol extends RolRepository{

    public $id;
    public $descripcion;
    
    public static function new_Rol($descripcion){
        return new self(null ,$descripcion);
    }

    public function __construct($id, $descripcion) {
      $this->id = $id;
      $this->descripcion = $descripcion;
    }

    public function getDescripcion()    {
        return $this->descripcion;
    }  

    public function setDescripcion($descripcion)    {        
            $this->descripcion = $descripcion;
        
    }

}
