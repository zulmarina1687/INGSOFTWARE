<?php
    require_once  "/../../repository/MedicoRepository.php";
    require_once  "conexion.php";
   // session_start();
    error_reporting(E_ALL ^ E_NOTICE);

class Medico extends MedicoRepository{

    public $id;
    public $especialidad;
    public $colegiatura;
    public $rne;
    public $persona_id;

    public function __construct($id, $especialidad, $colegiatura ,$rne , $persona_id ) {
        $this->id = $id;
        $this->especialidad = $especialidad;
        $this->colegiatura = $colegiatura;
        $this->rne = $rne;
        $this->persona_id = $persona_id;

    }

    public function getEspecialidad()    {
        return $this->especialidad;
    }
    
  
    public function setEspecialidad($especialidad)    {        
            $this->especialidad = $especialidad;
        
    }

    public function getColegiatura()    {
        return $this->colegiatura;
    }
    
  
    public function setColegiatura($colegiatura)    {        
            $this->colegiatura = $colegiatura;
        
    }
    public function getRne()    {
        return $this->rne;
    }
    
  
    public function setRne($rne)    {        
            $this->rne = $rne;
        
    }



}
