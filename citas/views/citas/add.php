<?php
if(!$_SESSION["usuario"]){
		//sino existe usuarios en sesion regresamos a login
	   header("location:login");
	   exit();
}else{
	if($_SESSION['rol']==2){
		//si es de tipo 2(operador) lo mandamos al dashboard
		header("location:dashboard");
		exit();

	}
}
 	$medicos = UsuariosController::combo_usuarios_medicos();
  	$pacientes = PacientesController::combo_pacientes();
?>

 <div id="content-header">
  </div>

 <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Agregar Cita</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="agregar_cita" name="add_cita" id="add_cita" novalidate="novalidate">
                 	<div class="control-group">
			              <label class="control-label">Medicos</label>
			               <div class="controls">
				                <select  style="width:220px;" name="medico_id" class="medicos" >
				                	<?php foreach ($medicos as $key => $value): ?>
				                			  <option value="<?php echo $value['id']; ?>"><?php echo $value['nombres'].' '.$value['apellidos'].' - '.$value['especialidad']; ?></option>
				                	<?php endforeach ?>
				               
				                </select>
				           </div>
	           	   </div>
	             <!--  <div class="control-group">
			              <label class="control-label">Pacientes</label>
			               <div class="controls">
				                <select  style="width:220px;" name="paciente_id" class="pacientes" >
				                	<?php foreach ($pacientes as $key => $value): ?>
				                			  <option value="<?php echo $value['id']; ?>"><?php echo $value['nombres'].' '.$value['apellido_paterno'].' '.$value['apellido_materno']; ?></option>
				                	<?php endforeach ?>
				               
				                </select>
				           </div>
	           	   </div>-->
	               <div class="control-group">
		                <label class="control-label">Fecha</label>
		                <div class="controls">
		                  <input type="date" name="fecha" id="fecha">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Hora</label>
		                <div class="controls">
		                  <input type="time" name="hora" id="hora">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Detalles</label>
		                <div class="controls">
		                  <input type="text"  name="detalles" id="detalles"/>
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Observaciones</label>
		                <div class="controls">
		                  <input type="text"  name="observaciones" id="observaciones" />
		                </div>
	               </div>


	              <div class="form-actions">
		              	<?php 
	                     		$add = new CitasController();
	                     		$add->add();
	                    ?>
		                <input type="submit" name="agregar_cita" value="Guardar" class="btn btn-success">
	              </div>
	            </form>

          </div>
        </div>
      </div>
    </div>
</div>


<script>
	
jQuery(document).ready(function($) {

	
	// Form Validation
    $("#add_cita").validate({
		rules:{
			descripcion:{
				required:true
			}

		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


     $( "#sidebar ul li.curso" ).addClass( "active" );

	


});

</script>
