<?php
    require_once  "/../../repository/CitaRepository.php";
    require_once  "conexion.php";
   // session_start();
    error_reporting(E_ALL ^ E_NOTICE);

class Cita extends CitaRepository{
    public $id;
    public $paciente_id;
    public $medico_id;
    public $fecha;
    public $hora;
    public $medio;
    public $situacion;
    public $observaciones;

    public function __construct($id, $paciente_id, $medico_id, $fecha, $hora
                                , $medio, $situacion, $observaciones) {
      $this->id = $id;
      $this->paciente_id = $paciente_id;
      $this->medico_id = $medico_id;
      $this->fecha = $fecha;
      $this->hora = $hora;
      $this->medio = $medio;
      $this->situacion = $situacion;
      $this->observaciones = $observaciones;

    }

    public function getFecha()    {
        return $this->fecha;
    }
    
  
    public function setFecha($fecha)    {        
            $this->fecha = $fecha;
        
    }
    public function getHora()    {
        return $this->hora;
    }
    
  
    public function setHora($hora)    {        
            $this->hora = $hora;
        
    }
    public function getSituacion()    {
        return $this->situacion;
    }
    
  
    public function setSituacion($situacion)    {        
            $this->situacion = $situacion;
        
    }
    
    public function getObservaciones()    {
        return $this->observaciones;
    }
    
  
    public function setObservaciones($observaciones)    {        
            $this->observaciones = $observaciones;
        
    }
    



}
