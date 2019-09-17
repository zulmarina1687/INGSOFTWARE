<?php
require_once "/../domain/Entity/Conexion.php";

class CitaRepository{

         public  static function index(){
        $sql = Conexion::conectar()->prepare("SELECT * FROM citas;");

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }


    public static function add($datosModel){
        $sql = Conexion::conectar()->prepare("INSERT INTO citas(paciente_id,usuario_id,fecha,hora,detalles, fecha_hora,observaciones) 
                                            VALUES(:paciente_id,:usuario_id,:fecha,:hora,:detalles, :fecha_hora,:observaciones);");
        $sql->bindParam(":paciente_id", $datosModel['paciente_id']);
        $sql->bindParam(":usuario_id", $datosModel['usuario_id']);
        $sql->bindParam(":fecha", $datosModel['fecha']); 
        $sql->bindParam(":hora", $datosModel['hora']);
        $sql->bindParam(":detalles", $datosModel['detalles']);
        $sql->bindParam(":fecha_hora", $datosModel['fecha_hora']); 
        $sql->bindParam(":observaciones", $datosModel['observaciones']); 

        if ($sql->execute()) {
            return 'success';
        } else {
            echo "Error";
        }

        $sql->close();
    }


    public static function edit($datosModel){
        $sql = Conexion::conectar()->prepare("UPDATE citas SET estado=:estado,antecedentes=:antecedentes,detalles=:detalles,tratamiento=:tratamiento
                                              WHERE id=:id");
        $sql->bindParam(':id', $datosModel['id']);
        $sql->bindParam(':estado', $datosModel['estado']);
        $sql->bindParam(':antecedentes', $datosModel['antecedentes']);
        $sql->bindParam(':detalles', $datosModel['detalles']);
        $sql->bindParam(':tratamiento', $datosModel['tratamiento']);        

         if ($sql->execute()) {
            return 'success';
        } else {
            return "Error";
        }

        $sql->close();
    }


    public static function delete($id){
        $sql = Conexion::conectar()->prepare("DELETE FROM citas WHERE id = :id;");
        $sql->bindParam(":id", $id);

        if ($sql->execute()) {
            return 'success';
        } else {
            return 'Error';
        }
        $sql->close();
    }


    public static function view($id){
        $sql = Conexion::conectar()->prepare("SELECT * FROM citas WHERE id=:id LIMIT 1;");
        $sql->bindParam(":id", $id);
      
        if ($sql->execute()) {
             return $sql->fetch();
        } else {
            echo "Error";
        }

        $sql->close();
    }
    
    public static function obtener_cita($id){
        $sql = Conexion::conectar()->prepare("SELECT * FROM citas
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


     public static function listado_citas_calendario($id){
        $sql = Conexion::conectar()->prepare("SELECT c.usuario_id,u.nombres,u.apellidos, u.especialidad, c.paciente_id, p.nombres AS nombre_paciente, 
                                                p.apellido_paterno, p.apellido_materno , c.fecha_hora,c.detalles
                                                FROM citas AS c
                                                INNER JOIN pacientes p ON c.paciente_id=p.id
                                                JOIN usuarios u ON c.usuario_id=u.id
                                                WHERE c.usuario_id=:id;");
        $sql->bindParam(":id", $id);

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }

    public static function listado_citas_del_paciente(){
        $sql = Conexion::conectar()->prepare("SELECT c.id, c.usuario_id,u.nombres,u.apellidos, u.especialidad, c.paciente_id, p.nombres AS nombre_paciente, 
                                                p.apellido_paterno, p.apellido_materno , c.fecha_hora,c.detalles,c.fecha,c.hora,c.detalles,c.observaciones
                                                FROM citas AS c
                                                INNER JOIN pacientes p ON c.paciente_id=p.id
                                                JOIN usuarios u ON c.usuario_id=u.id
                                                WHERE p.id=:id;");
        $sql->bindParam(":id", $_SESSION['id']);

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }

    public static function listado_citas_general(){
        $sql = Conexion::conectar()->prepare("SELECT c.id, c.usuario_id,u.nombres,u.apellidos, u.especialidad, c.paciente_id, p.nombres AS nombre_paciente, 
                                                p.apellido_paterno, p.apellido_materno , c.fecha_hora,c.fecha,c.hora,c.detalles,c.observaciones
                                                FROM citas AS c
                                                INNER JOIN pacientes p ON c.paciente_id=p.id
                                                JOIN usuarios u ON c.usuario_id=u.id;");

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }
    public static function listado_citas_del_medico(){
        $sql = Conexion::conectar()->prepare("SELECT c.id, c.usuario_id,u.nombres,u.apellidos, u.especialidad, c.paciente_id, p.nombres AS nombre_paciente, 
                                                p.apellido_paterno, p.apellido_materno , c.fecha_hora,c.detalles,c.fecha,c.hora,c.detalles,c.observaciones
                                                FROM citas AS c
                                                INNER JOIN pacientes p ON c.paciente_id=p.id
                                                JOIN usuarios u ON c.usuario_id=u.id
                                                WHERE c.usuario_id=:id;");
        $sql->bindParam(":id", $_SESSION['id']);

        if ($sql->execute()) {
             return $sql->fetchAll();
        } else {
            echo "Error";
        }

        $sql->close();
    }

	

}
