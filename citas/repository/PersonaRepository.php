<?php


class PersonaRepository{


     public  static function index(){
        $sql = Conexion::conectar()->prepare("SELECT * FROM personas;");

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }


    public function add($datosModel){
        $sql = Conexion::conectar()->prepare("INSERT INTO personas(nombres,apellido_paterno,apellido_materno,
                                            direccion,grado_instruccion, estado_civil,fecha_nacimiento,
                                            sexo,entidad_id) 
                                            VALUES(:nombres,:apellido_paterno,:apellido_materno,
                                            :direccion,:grado_instruccion, :estado_civil,:fecha_nacimiento,
                                            :sexo,:entidad_id);");

        $sql->bindParam(":nombres", $datosModel['nombres']);
        $sql->bindParam(":apellido_paterno", $datosModel['apellido_paterno']);
        $sql->bindParam(":apellido_materno", $datosModel['apellido_materno']);
        $sql->bindParam(":direccion", $datosModel['direccion']);
        $sql->bindParam(":grado_instruccion", $datosModel['grado_instruccion']);
        $sql->bindParam(":estado_civil", $datosModel['estado_civil']);
        $sql->bindParam(":fecha_nacimiento", $datosModel['fecha_nacimiento']);
        $sql->bindParam(":sexo", $datosModel['sexo']);
        $sql->bindParam(":entidad_id", $datosModel['entidad_id']);
 
        if ($sql->execute()) {
            return 'success';
        } else {
            echo "Error";
        }

        $sql->close();
    }


    public function edit($datosModel){
        $sql = Conexion::conectar()->prepare("UPDATE personas SET nombres=:nombres 
                                            WHERE id=:id;");
        $sql->bindParam(':id', $datosModel['id']);
        $sql->bindParam(':nombres', $datosModel['nombres']);

         if ($sql->execute()) {
            return 'success';
        } else {
            return "Error";
        }

        $sql->close();
    }


    public static function delete($id){
        $sql = Conexion::conectar()->prepare("DELETE FROM personas WHERE id = :id;");
        $sql->bindParam(":id", $id);

        if ($sql->execute()) {
            return 'success';
        } else {
            return 'Error';
        }
        $sql->close();
    }


    public static function view($id){
        $sql = Conexion::conectar()->prepare("SELECT * FROM personas WHERE id=:id LIMIT 1;");
        $sql->bindParam(":id", $id);
      
        if ($sql->execute()) {
             return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();
    }
    
    public static function obtener_persona($id){
        $sql = Conexion::conectar()->prepare("SELECT * FROM personas
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
