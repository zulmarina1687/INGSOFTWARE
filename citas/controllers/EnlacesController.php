<?php
ob_start();
class EnlacesController{

	#LLAMADA A LA PLANTILLA
	#----------------------------------------------

	public function plantilla(){

		#include() Se utiliza para invocar el archivo que contiene código html.
		include "views/template.php";
	}

	#INTERACCIÓN DEL USUARIO
	#----------------------------------------------
	 public function enlacesPaginasController(){

		if(isset($_GET["action"])){      
		  $enlacesController = $_GET["action"]; 

		}else{

		   $enlacesController = "index";
			
		}
		
      // le pide al modelo y que conecte con :: al método y asi heredo la clase y sus metodos y atributos..
		 $respuesta = Enlace::enlacesPaginasModel($enlacesController);
		 require $respuesta;

	}
}

?>