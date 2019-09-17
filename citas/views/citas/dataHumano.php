<?php
date_default_timezone_set('America/Lima');

$tipo="cita";
$fecha1="2019-07-15 17:30:00";
$fecha2="2019-07-15 12:30:00";
$fecha3="2019-07-18 17:30:00";
$fecha4="2019-07-18 19:30:00";
$fecha5="2019-08-15 11:30:00";
$fecha6="2019-09-16 13:30:00";
$fecha7="2019-08-15 09:30:00";
$fecha8="2019-09-16 19:30:00";
$fecha9="2019-08-15 18:30:00";
$fecha10="2019-09-16 14:30:00";

header('Content-type: text/json');

echo'
[
    { "date": "2019-07-15 20:30:00", "type": "'.$tipo.'", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera 4", "url": "http://www.event2.com/" },
    { "date": "'.$fecha1.'", "type": "cita ", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera 4", "url": "http://www.event3.com/" },
    { "date": "'.$fecha2.'", "type": "cta 3", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera 7", "url": "http://www.event5.com/" },
    { "date": "'.$fecha3.'", "type": "cita ", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera", "url": "http://www.event5.com/" },
    { "date": "'.$fecha4.'", "type": "cita 2", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera 2", "url": "http://www.event6.com/" },
    { "date": "'.$fecha5.'", "type": "cita 2", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera 2", "url": "http://www.event6.com/" },
    { "date": "'.$fecha6.'", "type": "cita 2", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera 2", "url": "http://www.event6.com/" },
    { "date": "'.$fecha7.'", "type": "cita 2", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera 2", "url": "http://www.event6.com/" },
    { "date": "'.$fecha8.'", "type": "cita 2", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera 2", "url": "http://www.event6.com/" },
    { "date": "'.$fecha9.'", "type": "cita ", "title": "Paciente - Jogito abc Odontologia", "description": "sala de espera mmm", "url": "http://www.event7.com/" }
]

';

?>