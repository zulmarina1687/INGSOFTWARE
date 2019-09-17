<?php

    require_once  "conexion.php";
    require_once  "/../../repository/UsuarioRepository.php";
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);

class Usuario extends UsuarioRepository{
    public $id;
    public $nombres;
    public $apellidos;
    public $correo;
    public $usuario;
    public $clave;

    public function __construct($id, $nombres, $apellidos ,$correo , $usuario , $clave) {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
        $this->usuario = $usuario;
        $this->clave = $clave;

    }

    public function getNombre()    {
        return $this->nombres;
    }
    
  
    public function setNombre($nombres)    {        
            $this->nombres = $nombres;
        
    }
    public function getApellido()    {
        return $this->apellidos;
    }
    
  
    public function setApellido($apellidos)    {        
            $this->apellidos = $apellidos;
        
    }

    public function getCorreo()    {
        return $this->correo;
    }
    
  
    public function setCorreo($correo)    {        
            $this->correo = $correo;
        
    }

    public function getUsuario()    {
        return $this->usuario;
    }
    
  
    public function setUsuario($usuario)    {        
            $this->usuario = $usuario;
        
    }
    public function getClave()    {
        return $this->clave;
    }
    
  
    public function setClave($clave)    {        
            $this->clave = $clave;
        
    }



}
