<?php

    require_once  "models/conexion.php";
    #require_once  "models/repositorios/PersonaRepository.php";
   // session_start();
    error_reporting(E_ALL ^ E_NOTICE);

class Paciente{

   /*   public static function login($datosModel, $tabla){
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario = :usuario");
        $sql->bindParam(":usuario", $datosModel["usuario"]);
        
         if ($sql->execute()) {
            return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();

    }

     public static function index(){
        $sql = Conexion::conectar()->prepare("SELECT u.*,r.descripcion FROM usuarios 
                                              AS u INNER JOIN roles AS r
                                              ON u.rol_id = r.id;");

        if ($sql->execute()) {
            return $sql->fetchAll();
        } else {
            echo "Error";
        }
        
        $sql->close();
    }*/


    public static function add($datosModel){
        $sql = Conexion::conectar()->prepare("INSERT INTO pacientes(nombres,apellido_paterno,apellido_materno,direccion,
                                            grado_instruccion,estado_civil,sexo,fecha_nacimiento,correo,usuario,clave)
                                             VALUES(:nombres,:apellido_paterno,:apellido_materno,:direccion,:grado_instruccion,
                                                :estado_civil,:sexo,:fecha_nacimiento,:correo,:usuario,:clave);");

        $sql->bindParam(":nombres", $datosModel['nombres']);
        $sql->bindParam(":apellido_paterno", $datosModel['apellido_paterno']);
        $sql->bindParam(":apellido_materno", $datosModel['apellido_materno']);
        $sql->bindParam(":direccion", $datosModel['direccion']);
        $sql->bindParam(":grado_instruccion", $datosModel['grado_instruccion']);
        $sql->bindParam(":estado_civil", $datosModel['estado_civil']);
        $sql->bindParam(":sexo", $datosModel['sexo']);
        $sql->bindParam(":fecha_nacimiento", $datosModel['fecha_nacimiento']);
        $sql->bindParam(":correo", $datosModel['correo']);
        $sql->bindParam(":usuario", $datosModel['usuario']);
        $sql->bindParam(":clave", $datosModel['clave']);

        if ($sql->execute()) {
            return 'success';
        } else {
            echo "Error";
        }

        $sql->close();
    }


    /*public static function edit($datosModel){
        $sql = Conexion::conectar()->prepare("UPDATE usuarios SET nombres=:nombres,apellidos=:apellidos,usuario=:usuario,correo=:correo,rol_id=:rol_id
                                              WHERE id=:id");
        $sql->bindParam(':id', $datosModel['id']);
        $sql->bindParam(':nombres', $datosModel['nombres']);
        $sql->bindParam(':apellidos', $datosModel['apellidos']);
        $sql->bindParam(':correo', $datosModel['correo']);
        $sql->bindParam(':usuario', $datosModel['usuario']);
        $sql->bindParam(':rol_id', $datosModel['rol_id']);

         if ($sql->execute()) {
            return 'success';
        } else {
            return "Error";
        }

        $sql->close();
    }


    public static function delete($id){
        $sql = Conexion::conectar()->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindParam(":id", $id);

        if ($sql->execute()) {
            return 'success';
        } else {
            return 'Error';
        }
        $sql->close();
    }


    public static function view($id){
        $sql = Conexion::conectar()->prepare("SELECT u.*, r.descripcion FROM usuarios AS u INNER JOIN roles AS r
                                              ON u.rol_id = r.id
                                              WHERE u.id=:id
                                              LIMIT 1;");
        $sql->bindParam(":id", $id);
      
        if ($sql->execute()) {
             return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();
    }

    public static function obtener_usuario($id){
        $sql = Conexion::conectar()->prepare("SELECT nombres,apellidos,correo,usuario,rol_id,clave FROM usuarios
                                              WHERE id=:id
                                              LIMIT 1;");
        $sql->bindParam(":id", $id);

        if ($sql->execute()) {
             return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();
    }

     public static function obtener_correo($correo){
        $sql = Conexion::conectar()->prepare("SELECT id,nombres,apellidos,correo,usuario FROM usuarios
                                              WHERE correo=:correo
                                              LIMIT 1;");
        $sql->bindParam(":correo", $correo);

        if ($sql->execute()) {
             return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();
    }
    public static function obtener_codigo($codigo){
        $sql = Conexion::conectar()->prepare("SELECT id,nombres,apellidos,olvido FROM usuarios
                                              WHERE olvido=:olvido
                                              LIMIT 1;");
        $sql->bindParam(":olvido", $codigo);

        if ($sql->execute()) {
             return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();
    }


      public  static function guardar_codigo($datosModel){
        $sql = Conexion::conectar()->prepare("UPDATE usuarios SET olvido=:olvido
                                              WHERE id=:id");       
        $sql->bindParam(':id', $datosModel['id']);
        $sql->bindParam(':olvido', $datosModel['olvido']);


        if ($sql->execute()) {
            return 'success';
        } else {
            return "Error";
        }

        $sql->close();
    }


    public static function change_password($datosModel){
            $sql = Conexion::conectar()->prepare("UPDATE usuarios SET clave=:clave
                                                  WHERE id=:id");
            $sql->bindParam(':id', $datosModel['id']);
            $sql->bindParam(':clave', $datosModel['clave']);
             if ($sql->execute()) {
                return 'success';
            } else {
                return "Error";
            }

            $sql->close();
    }
     public static function change_password_reseat($datosModel){
            $sql = Conexion::conectar()->prepare("UPDATE usuarios SET clave=:clave,olvido=:olvido
                                                  WHERE id=:id");
            $sql->bindParam(':id', $datosModel['id']);
            $sql->bindParam(':clave', $datosModel['clave']);
            $sql->bindParam(':olvido', $datosModel['olvido']);
             if ($sql->execute()) {
                return 'success';
            } else {
                return "Error";
            }

            $sql->close();
    }*/


	
}
