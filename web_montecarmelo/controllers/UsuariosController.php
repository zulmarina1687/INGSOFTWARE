<?php

class UsuariosController{
    //llave no cambiar porque se van al carajo !!!!!!
    public  $key = 'loquifru';
    public function login(){        

        if(isset($_POST["submit"])){



            //verificamos si no hay cracteres raros... !!!
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave"])){

                    $datosController = array("usuario"=>$_POST["usuario"],"clave"=>$_POST["clave"]);

                    $respuesta = Usuario::login($datosController, "usuarios");


                    if($respuesta){
                        $usuarioActual = $_POST["usuario"];
                        $clave_decrypted =  UsuariosController::desencriptar($respuesta['clave']);


                            if($respuesta["usuario"] == $_POST["usuario"] && $clave_decrypted == $_POST["clave"]){
                              //  $_SESSION["validar"] = true;
                                $_SESSION["usuario"] = $respuesta["usuario"];
                                $_SESSION["id"] = $respuesta["id"];
                                $_SESSION["rol"] = $respuesta["rol_id"];
                               // $_SESSION["idAdmin"] = $respuesta["idAdmin"];
                                echo '<center><div class="alert alert-success"> Bienvenido <strong>'. ' '.  $_SESSION["usuario"].'</strong></div>';
                                echo '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                        <span class="sr-only">Loading...</span></center>';

                                 echo "<META HTTP-EQUIV='Refresh' CONTENT='3;  URL=dashboard'>";
                            }else{

                                echo '<div class="alert alert-danger">No coincide la clave</div>';

                            }

                    }else{
                           echo '<div class="alert alert-danger">No se encontro el usuario</div>';


                    }

            }

        }
    }



     public static function index(){
         $respuesta = Usuario::index();
         return $respuesta;

     }
      

     public static function add(){
        if (isset($_POST['agregar_usuario'])) {
              if(isset($_POST['clave'])){
                    //encriptamos la clave !!
                   $clave_encriptada =  UsuariosController::encriptar($_POST['clave']);
              }

               $datosController = array(
                  'nombres' => $_POST['nombres'],
                  'apellidos' => $_POST['apellidos'],
                  'usuario' => $_POST['usuario'],
                  'correo' => $_POST['correo'],
                  'clave' => $clave_encriptada,
                  'rol_id' => $_POST['rol_id']
            );
            $respuesta = Usuario::add($datosController);
            if ($respuesta == 'success') {              
                $_SESSION["message"]='<div class="alert alert-success alert-block">
                    Se guardo correctamente </div>';
                header('location:usuario_ok');
             
            } else {
                echo "<h2>Error</h2>";
            }
        }
     }

    public static function edit(){
        if (isset($_POST['editar_usuario'])) {
               $datosController = array(
                  'id' => $_POST['id'],
                  'nombres' => $_POST['nombres'],
                  'apellidos' => $_POST['apellidos'],
                  'usuario' => $_POST['usuario'],
                  'correo' => $_POST['correo'],
                  'rol_id' => $_POST['rol_id']
            );
            $respuesta = Usuario::edit($datosController);
            if ($respuesta == 'success') {              
                $_SESSION["message"]='<div class="alert alert-success alert-block">
                    Se guardo correctamente </div>';
                header('location:usuario_ok');
             
            } else {
                echo "<h2>Error</h2>";
            }
        }
     }

     
    public function delete(){
      if (isset($_POST['eliminar_usuario'])) {               
              $id = $_POST['id'];            
              $respuesta = Usuario::delete($id);
              if ($respuesta == 'success') {              
                  $_SESSION["message"]='<div class="alert alert-success alert-block">
                      Se elimino correctamente </div>';
                  header('location:usuario_ok');
               
              } else {
                  echo "<h2>Error</h2>";
              }
       }
    }
     public static function view($id){

         $respuesta = Usuario::view($id);
         return $respuesta;

     }



     public static function encriptar($cadena){
           $iv = mcrypt_create_iv( mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),MCRYPT_DEV_URANDOM);
            $encrypted = base64_encode(
                $iv.mcrypt_encrypt(
                    MCRYPT_RIJNDAEL_128,
                    hash('sha256', $key, true),
                    $cadena,
                    MCRYPT_MODE_CBC,
                    $iv
                )
            );
            return $encrypted;
           // $_POST['clave']=$encrypted; 

     }
     public static function desencriptar($cadena){
          $data = base64_decode($cadena);
          $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
          $decrypted = rtrim(
              mcrypt_decrypt(
                  MCRYPT_RIJNDAEL_128,
                  hash('sha256', $key, true),
                  substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
                  MCRYPT_MODE_CBC,
                  $iv
              ),
              "\0"
          );
          return $decrypted; 
      
     }



    public static function change_password(){
          if (isset($_POST['submit'])) {     
                 
                $data_usuario = Usuario::obtener_usuario($_SESSION['id']);
                
                $clave =  UsuariosController::desencriptar($data_usuario['clave']);

                if($clave == $_POST['clave'] ){
                      $nueva_clave_encrypted =  UsuariosController::encriptar($_POST['new_clave']);
                      $datosController = array(
                            'id' => $_SESSION['id'],
                            'clave' => $nueva_clave_encrypted
                      );
                      $respuesta = Usuario::change_password($datosController);

                      if ($respuesta == 'success') {              
                        $_SESSION["message"]='<div class="alert alert-success alert-block">
                        La clave se cambio correctamente </div>';
                        header('location:usuario_ok');

                      } else {
                          echo '<div class="alert alert-danger alert-block">
                      Ocurrio un problema </div>';
                      }
                }else{
                    echo '<div class="alert alert-danger alert-block">
                      La clave actual no coincide </div>';
                }
       }

     }


     public static function obtener_usuario($id){
           $respuesta = Usuario::obtener_usuario($id);
           return $respuesta;

     }

    public static function olvido_clave(){
        if (isset($_POST['submit'])) {
            $correo = $_POST['correo']; 

            if(empty($correo)){
                echo '<div class="alert alert-danger alert-block">Ingrese un correo </div>';
                header('location:olvido');
            }else{
                $usuario = Usuario::obtener_correo($correo);
               
                if($usuario){
                   $codigo =  md5(uniqid(rand(), true));

                    $datosController = array(
                        'id' => $usuario['id'],
                        'olvido' =>$codigo
                    );

                   $guardar_codigo = Usuario::guardar_codigo($datosController);

                    if ($guardar_codigo='success') { 
                         
                       /////
                            require '/../plugin/PHPMailer/PHPMailerAutoload.php';
                            $mail = new PHPMailer;
                            $mail->isSMTP();
                            $mail->SMTPDebug = 0;
                            $mail->Debugoutput = 'html';
                            $mail->Host = "ssl://smtp.gmail.com";
                            $mail->Port = 465;
                            $mail->SMTPAuth = true;
                            $mail->Username = "juniorgomez1305@gmail.com";
                            $mail->Password = "loquifru1305";
                            $mail->setFrom('juniorgomez1305@gmail.com', 'WebSiteAdmin');
                            $mail->addAddress($correo);
                            $mail->Subject = 'Recuperacion de Clave';

                            //enviamos parametros
                            $path =$_SERVER['DOCUMENT_ROOT'].'/views/email/olvido.php';
                            $ruta =$_SERVER['SERVER_NAME'].'/restablecer?codigo='.$codigo;
                            $message = file_get_contents($path);
                            $message = str_replace('%nombres%', $usuario['nombres'], $message);
                            $message = str_replace('%apellidos%', $usuario['apellidos'], $message);
                            $message = str_replace('%ruta%', $ruta , $message);
                            $mail->msgHTML($message);
                    
                            if (!$mail->send()) {
                                  echo "<h2>Mailer Error: " . $mail->ErrorInfo."</h2>";
                            } else {
                                 echo '<div class="alert alert-success alert-block">
                                Se envio el correo correctamente </div>';
                            }
                      /////
                    }else{
                        //ocurrio un problema al guardar la nueva claveee
                         echo '<div class="alert alert-danger alert-block">Ocurrio un problema al generar la clave, Intentelo otra vez!! </div>';
                    }
                }else{
                    //no encontroo a ninguno con ese correo peee....
                         echo '<div class="alert alert-danger alert-block">No se encontro ningun correo </div>';
                }
            }

        }
     }


    public static function restablecer_clave(){           

            if (isset($_POST['restablecer_clave'])) {
                    if (isset($_SESSION["id"])) {
                    $nueva_clave_encrypted =  UsuariosController::encriptar($_POST['repeat_new_clave']);
                    $datosController = array(
                        'id' => $_SESSION['id'],
                        'olvido' =>NULL,
                        'clave'=>$nueva_clave_encrypted
                    );

                    $respuesta = Usuario::change_password_reseat($datosController);

                    if ($respuesta == 'success') {              
                        echo '<div class="alert alert-success alert-block">
                        La clave se cambio correctamente, ya puede loguearse!!!  <a href="/" class="btn btn-warning"> login </a></div>';

                      } else {
                          echo '<div class="alert alert-danger alert-block">
                         Ocurrio un problema </div>';
                    }


                }
            }else{
              //osea get !!!!!
                  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  $parts = parse_url($actual_link);
                  parse_str($parts['query'], $query);
                  $codigo=$query['codigo'];
                  //obtengo al usuarios
                 if(isset($codigo)){
                       $usuario_codigo = Usuario::obtener_codigo($codigo);
                        if($usuario_codigo){
                              $_SESSION["id"] = $usuario_codigo["id"];
                        }else {
                          header('location:/');

                        }
                  }else {
                      header('location:/');

                  }
            }
            

     }


}
