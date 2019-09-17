<?php
require_once "/../repository/CitaRepository.php";
class CitasController{

    public static function index(){
         $respuesta = Cita::index();
         return $respuesta;

     }

     public static function add(){
        if (isset($_POST['agregar_cita'])) {
 
               $datosController = array(
                  'paciente_id' => $_SESSION['id'],
                  'usuario_id' => $_POST['medico_id'],
                  'fecha' => $_POST['fecha'],
                  'hora' => $_POST['hora'],
                  'detalles' => $_POST['detalles'],
                  'observaciones' => $_POST['observaciones'],
                  'fecha_hora' => $_POST['fecha'].' '.$_POST['hora']
            );

           // print_r($datosController); die; 
            $respuesta = Cita::add($datosController);
            if ($respuesta == 'success') {              
                $_SESSION["message"]='<div class="alert alert-success alert-block">
                    Se guardo correctamente </div>';
                header('location:cita_ok');
             
            } else {
                echo "<h2>Error</h2>";
            }
        }
     }

    public static function edit(){
        if (isset($_POST['editar_cita'])) {
               $datosController = array(
                'id' => $_POST['id'],
                  
            );
            $respuesta = Cita::edit($datosController);
            if ($respuesta == 'success') {              
                $_SESSION["message"]='<div class="alert alert-success alert-block">
                    Se guardo correctamente </div>';
                header('location:cita_ok');
             
            } else {
                echo "<h2>Error</h2>";
            }
        }
     }

     
    public function delete(){
      if (isset($_POST['eliminar_cita'])) {               
              $id = $_POST['id'];            
              $respuesta = Cita::delete($id);
              if ($respuesta == 'success') {              
                  $_SESSION["message"]='<div class="alert alert-success alert-block">
                      Se elimino correctamente </div>';
                  header('location:cita_ok');
               
              } else {
                  echo "<h2>Error</h2>";
              }
       }
    }
     public static function view($id){

         $respuesta = Cita::view($id);
         return $respuesta;

     }

    public static function obtener_cita($id){
           $respuesta = Cita::obtener_cita($id);
           return $respuesta;

     }

      public static function listado_citas_calendario($id){
             $respuesta = CitaRepository::listado_citas_calendario($id);

       /*    foreach ($respuesta as $key => $value) {
             $paciente= $value['nombre_paciente'].' '.$value['apellido_paterno'].' '.$value['apellido_materno'];
               $eventos[$key]["date"]=$value["fecha_hora"];
               $eventos[$key]["title"]=$paciente;
               $eventos[$key]["description"]=$value["detalles"];
               $eventos[$key]["detalles"]=$value["detalles"];
               $eventos[$key]["url"]="url";
         }*/

       //  print_r($eventos); die; 
           return $respuesta;
          //return $eventos;

     }

      public static function listado_citas_general(){
           $respuesta = CitaRepository::listado_citas_general();
           return $respuesta;

     }
      public static function listado_citas_del_medico(){
           $respuesta = CitaRepository::listado_citas_del_medico();
           return $respuesta;

     }
      public static function listado_citas_del_paciente(){
           $respuesta = CitaRepository::listado_citas_del_paciente();
           return $respuesta;

     }
     

}
