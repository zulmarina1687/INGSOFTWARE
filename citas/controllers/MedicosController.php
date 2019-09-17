<?php
class MedicosController{

    public static function index(){
         $respuesta = Medico::index();
         return $respuesta;

     }

     public static function combo_medicos(){
         $respuesta = Medico::combo_medicos();
         return $respuesta;

     }

     public static function add(){
        if (isset($_POST['agregar_medico'])) {

               $datosController = array(
                  'especialidad' => $_POST['especialidad'],
                  'colegiatura' => $_POST['colegiatura'],
                  'rne' => $_POST['rne'],
                  'persona_id' => $_POST['persona_id'],
            );
            $respuesta = Medico::add($datosController);
            if ($respuesta == 'success') {              
                $_SESSION["message"]='<div class="alert alert-success alert-block">
                    Se guardo correctamente </div>';
                header('location:medico_ok');
             
            } else {
                echo "<h2>Error</h2>";
            }
        }
     }

    public static function edit(){
        if (isset($_POST['editar_medico'])) {
               $datosController = array(
                  'id' => $_POST['id'],
                  'descripcion' => $_POST['descripcion']
            );
            $respuesta = Medico::edit($datosController);
            if ($respuesta == 'success') {              
                $_SESSION["message"]='<div class="alert alert-success alert-block">
                    Se guardo correctamente </div>';
                header('location:medico_ok');
             
            } else {
                echo "<h2>Error</h2>";
            }
        }
     }

     
    public function delete(){
      if (isset($_POST['eliminar_medico'])) {               
              $id = $_POST['id'];            
              $respuesta = Medico::delete($id);
              if ($respuesta == 'success') {              
                  $_SESSION["message"]='<div class="alert alert-success alert-block">
                      Se elimino correctamente </div>';
                  header('location:medico_ok');
               
              } else {
                  echo "<h2>Error</h2>";
              }
       }
    }
     public static function view($id){

         $respuesta = Medico::view($id);
         return $respuesta;

     }

    public static function obtener_medico($id){
           $respuesta = Medico::obtener_medico($id);
           return $respuesta;

     }
     

}
