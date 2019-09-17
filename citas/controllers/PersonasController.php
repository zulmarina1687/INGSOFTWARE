<?php
class PersonasController{

    public static function index(){
         $respuesta = Persona::index();
         return $respuesta;

     }

     public static function add(){
        if (isset($_POST['agregar_persona'])) {

               $datosController = array(
                  'nombres' => $_POST['nombres'],
                  'apellido_paterno' => $_POST['apellido_paterno'],
                  'apellido_materno' => $_POST['apellido_materno'],
                  'direccion' => $_POST['direccion'],
                  'grado_instruccion' => $_POST['grado_instruccion'],
                  'estado_civil' => $_POST['estado_civil'], 
                  'sexo' => $_POST['sexo'],
                  'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                  'entidad_id' => $_POST['entidad_id']

            );
            $respuesta = Persona::add($datosController);
            if ($respuesta == 'success') {              
                $_SESSION["message"]='<div class="alert alert-success alert-block">
                    Se guardo correctamente </div>';
                header('location:persona_ok');
             
            } else {
                echo "<h2>Error</h2>";
            }
        }
     }

    public static function edit(){
        if (isset($_POST['editar_persona'])) {
               $datosController = array(
                  'id' => $_POST['id'],
                  'descripcion' => $_POST['descripcion']
            );
            $respuesta = Persona::edit($datosController);
            if ($respuesta == 'success') {              
                $_SESSION["message"]='<div class="alert alert-success alert-block">
                    Se guardo correctamente </div>';
                header('location:curso_ok');
             
            } else {
                echo "<h2>Error</h2>";
            }
        }
     }

     
    public function delete(){
      if (isset($_POST['eliminar_persona'])) {               
              $id = $_POST['id'];            
              $respuesta = Persona::delete($id);
              if ($respuesta == 'success') {              
                  $_SESSION["message"]='<div class="alert alert-success alert-block">
                      Se elimino correctamente </div>';
                  header('location:curso_ok');
               
              } else {
                  echo "<h2>Error</h2>";
              }
       }
    }
     public static function view($id){

         $respuesta = Persona::view($id);
         return $respuesta;

     }

    public static function obtener_persona($id){
           $respuesta = Persona::obtener_persona($id);
           return $respuesta;

     }
     

}
