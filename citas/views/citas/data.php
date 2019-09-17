<?php
require_once "../../controllers/CitasController.php";
header('Content-type: text/json');
$citas = CitasController::listado_citas_calendario($_GET['id']);
$tipo ="citas";
$data="[";
//echo "";
foreach ($citas as $key => $value) {
    $paciente= $value['nombre_paciente'].' '.$value['apellido_paterno'].' '.$value['apellido_materno'];
    $data.= '{ "date": "'.$value['fecha_hora'].'", "type": "'.$tipo.'", "title": "Atención Paciente: '.$paciente.'", "description": "'.$value['detalles'].'", "url": "#" },';
}

$data_json = substr($data, 0, strlen($data) - 1);
$data_json.="]"; 
echo $data_json; ?>
