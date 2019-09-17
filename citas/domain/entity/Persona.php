<?php

    require_once  "conexion.php";
    require_once  "/../../repository/PersonaRepository.php";
   // session_start();
    error_reporting(E_ALL ^ E_NOTICE);

class Persona extends PersonaRepository{
    public $id;
    public $nombres;
    public $apellido_paterno;
    public $apellido_materno;
    public $direccion;
    public $grado_instruccion;
    public $sexo;
    public $fecha_nacimiento;

    public function __construct($id, $nombres, $apellido_paterno ,$apellido_materno ,
                                 $direccion , $grado_instruccion,$sexo,$fecha_nacimiento) {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        $this->direccion = $direccion;
        $this->grado_instruccion = $grado_instruccion;
        $this->sexo = $sexo;
        $this->fecha_nacimiento = $fecha_nacimiento;


    }

    public function getNombre()    {
        return $this->nombres;
    }
    
  
    public function setNombre($nombres)    {        
            $this->nombres = $nombres;
        
    }
     public function getApellidoPaterno()    {
        return $this->apellido_paterno;
    }
    
  
    public function setApellidoPaterno($apellido_paterno)    {        
            $this->apellido_paterno = $apellido_paterno;
        
    }
     public function getApellidoMaterno()    {
        return $this->apellido_materno;
    }
    
  
    public function setApellidoMaterno($apellido_materno)    {        
            $this->apellido_materno = $apellido_materno;
        
    }
     public function getDireccion()    {
        return $this->direccion;
    }
    
  
    public function setDireccion($direccion)    {        
            $this->direccion = $direccion;
        
    }
     public function getGradoInstruccion()    {
        return $this->grado_instruccion;
    }
    
  
    public function setGradoInstruccion($grado_instruccion)    {        
            $this->grado_instruccion = $grado_instruccion;
        
    }

     public function getSexo()    {
        return $this->sexo;
    }
    
  
    public function setSexo($sexo)    {        
            $this->sexo = $sexo;
        
    }
     public function getFechaNacimiento()    {
        return $this->fecha_nacimiento;
    }
    
  
    public function setFechaNacimiento($fecha_nacimiento)    {        
            $this->fecha_nacimiento = $fecha_nacimiento;
        
    }

	

}
