<?php

class FacadeController{


	public FacadeController(){
		$pacientes= new Paciente();
		$medicos = new Medico();
	}

	public void combo_vista(String modelo){
		  $respuesta = Medico::combo_medicos();
	}





}

?>