	<link rel="stylesheet" href="assets/css/calendar/paragridma.css">
	<link rel="stylesheet" href="assets/css/calendar/eventCalendar.css">
	<link rel="stylesheet" href="assets/css/calendar/eventCalendar_theme_responsive.css">
    

<?php
//$citas = CitasController::listado_citas_calendario(); 
//$citas_json =json_encode($citas);

//$data_evento ='[{ "date": "2019-07-15 19:47:28", "type": "citas", "title": "Jorge Suarez weweew", "description": "", "url": "#" },{ "date": "2019-07-17 12:47:59", "type": "citas", "title": "Liliii Fernandini sssd", "description": "", "url": "#" },{ "date": "2019-07-17 15:48:09", "type": "citas", "title": "Jorge Suarez weweew", "description": "", "url": "#" },{ "date": "2019-07-19 15:48:09", "type": "citas", "title": "Junior Gomez Contreras", "description": "", "url": "#" },{ "date": "2019-07-19 15:48:09", "type": "citas", "title": "Liliii Fernandini sssd", "description": "", "url": "#" }]';
?>
        
        <div class="container">
		<div class="row">
		    <div class="g6">
			  <div id="calendario"></div>
				<script>
					$(document).ready(function() {
						var usuario ='<?php echo $_SESSION["id"]; ?>';
						$("#calendario").eventCalendar({
							//jsonData: eventsInline,
							eventsjson: 'views/citas/data.php?id='+usuario,
							//eventsjson: 'json/dataHumano.php',
							jsonDateFormat: 'human', // 'YYYY-MM-DD HH:MM:SS'
							eventsScrollable: true,
							showDescription: true,
							locales: {
								locale: "es",
								monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
									"Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
								dayNames: [ 'Domingo','Lunes','Martes','Miércoles',
									'Jueves','Viernes','Sabado' ],
								dayNamesShort: [ 'Dom','Lun','Mar','Mie', 'Jue','Vie','Sab' ],
								txt_noEvents: "No hay eventos para este periodo",
								txt_SpecificEvents_prev: "",
								txt_SpecificEvents_after: "eventos:",
								txt_next: "siguiente",
								txt_prev: "anterior",
								txt_NextEvents: "Próximos eventos:",
								txt_GoToEventUrl: "Ir al evento",
								"moment": {
							        "months" : [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
							                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
							        "monthsShort" : [ "Ene", "Feb", "Mar", "Abr", "May", "Jun",
							                "Julio", "Ago", "Sep", "Oct", "Nov", "Dic" ],
							        "weekdays" : [ "Domingo","Lunes","Martes","Miércoles",
							                "Jueves","Viernes","Sabado" ],
							        "weekdaysShort" : [ "Dom","Lun","Mar","Mie",
							                "Jue","Vie","Sab" ],
							        "weekdaysMin" : [ "Do","Lu","Ma","Mi","Ju","Vi","Sa" ],
							        "longDateFormat" : {
							            "LT" : "H:mm",
							            "LTS" : "LT:ss",
							            "L" : "DD/MM/YYYY",
							            "LL" : "D [de] MMMM [de] YYYY",
							            "LLL" : "D [de] MMMM [de] YYYY LT",
							            "LLLL" : "dddd, D [de] MMMM [de] YYYY LT"
							        },
							        "week" : {
							            "dow" : 1,
							            "doy" : 4
							        }
							    }
							}
						});
					});
				</script>

			</div>
		</div>
	</div>

	
	



<script src="assets/js/calendar/moment.js" type="text/javascript"></script>
<script src="assets/js/calendar/jquery.eventCalendar.min.js" type="text/javascript"></script>