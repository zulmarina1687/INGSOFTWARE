<?php
    require_once  "/../../repository/PacienteRepository.php";
    require_once  "conexion.php";
   // session_start();
    error_reporting(E_ALL ^ E_NOTICE);

class Paciente extends PacienteRepository{

	public $id;
    public $historia_clinica;
    public $donacion_organo;
    public $persona_id;

    public function __construct($id, $historia_clinica, $donacion_organo ,$persona_id ) {
        $this->id = $id;
        $this->historia_clinica = $historia_clinica;
        $this->donacion_organo = $donacion_organo;
        $this->persona_id = $persona_id;


    }

    public function getHistoriaClinica()    {
        return $this->historia_clinica;
    }
    
  
    public function setHistoriaClinica($historia_clinica)    {        
            $this->historia_clinica = $historia_clinica;
        
    }
    public function getDonacionOrgano()    {
        return $this->donacion_organo;
    }
    
  
    public function setDonacionOrgano($donacion_organo)    {        
            $this->donacion_organo = $donacion_organo;
        
    }


}
