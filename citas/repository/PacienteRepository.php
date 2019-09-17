<?php


class PacienteRepository{

       public static function add($datosModel){
        $sql = Conexion::conectar()->prepare("INSERT INTO pacientes(especialidad,colegiatura,rne,persona_id) 
                                            VALUES(:especialidad,:colegiatura,:rne,:persona_id);");
        $sql->bindParam(":especialidad", $datosModel['especialidad']);
        $sql->bindParam(":colegiatura", $datosModel['colegiatura']);
        $sql->bindParam(":rne", $datosModel['rne']);
        $sql->bindParam(":persona_id", $datosModel['persona_id']);
 
        if ($sql->execute()) {
            return 'success';
        } else {
            echo "Error";
        }

        $sql->close();
    }


     public static function login($datosModel, $tabla){
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario = :usuario");
        $sql->bindParam(":usuario", $datosModel["usuario"]);
        
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
    }



     public  static function index(){
        $sql = Conexion::conectar()->prepare("SELECT * FROM pacientes;");

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }

      public  static function combo_pacientes(){
        $sql = Conexion::conectar()->prepare("SELECT * FROM pacientes;");

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }


  /*  public  static function combo_pacientes(){
        $sql = Conexion::conectar()->prepare("SELECT pa.id , p.nombres as nombres, p.apellido_paterno as apellido_paterno
                                              FROM pacientes AS pa
                                              INNER JOIN personas p ON pa.persona_id=p.id;");

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }*/


 


    public function edit($datosModel){
        $sql = Conexion::conectar()->prepare("UPDATE pacientes SET rne=:rne 
                                            WHERE id=:id;");
        $sql->bindParam(':id', $datosModel['id']);
        $sql->bindParam(':rne', $datosModel['rne']);

         if ($sql->execute()) {
            return 'success';
        } else {
            return "Error";
        }

        $sql->close();
    }


    public static function delete($id){
        $sql = Conexion::conectar()->prepare("DELETE FROM pacientes WHERE id = :id;");
        $sql->bindParam(":id", $id);

        if ($sql->execute()) {
            return 'success';
        } else {
            return 'Error';
        }
        $sql->close();
    }


    public static function view($id){
        $sql = Conexion::conectar()->prepare("SELECT * FROM pacientes WHERE id=:id LIMIT 1;");
        $sql->bindParam(":id", $id);
      
        if ($sql->execute()) {
             return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();
    }
    
    public static function obtener_paciente($id){
        $sql = Conexion::conectar()->prepare("SELECT * FROM pacientes
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


}
