<?php


class MedicoRepository{

	public  static function index(){
        $sql = Conexion::conectar()->prepare("SELECT * FROM medicos;");

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }

    public  static function combo_medicos(){
        $sql = Conexion::conectar()->prepare("SELECT m.id , p.nombres, p.apellido_paterno , m.especialidad
                                              FROM medicos AS m
                                              INNER JOIN personas p ON m.persona_id=p.id;");

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }


    public static function add($datosModel){
        $sql = Conexion::conectar()->prepare("INSERT INTO medicos(especialidad,colegiatura,rne,persona_id) 
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


    public static function edit($datosModel){
        $sql = Conexion::conectar()->prepare("UPDATE medicos SET descripcion=:descripcion 
                                            WHERE id=:id;");
        $sql->bindParam(':id', $datosModel['id']);
        $sql->bindParam(':descripcion', $datosModel['descripcion']);

         if ($sql->execute()) {
            return 'success';
        } else {
            return "Error";
        }

        $sql->close();
    }


    public static function delete($id){
        $sql = Conexion::conectar()->prepare("DELETE FROM medicos WHERE id = :id;");
        $sql->bindParam(":id", $id);

        if ($sql->execute()) {
            return 'success';
        } else {
            return 'Error';
        }
        $sql->close();
    }


    public static function view($id){
        $sql = Conexion::conectar()->prepare("SELECT * FROM medicos WHERE id=:id LIMIT 1;");
        $sql->bindParam(":id", $id);
      
        if ($sql->execute()) {
             return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();
    }
    
    public static function obtener_medico($id){
        $sql = Conexion::conectar()->prepare("SELECT * FROM medicos
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
