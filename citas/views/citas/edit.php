<?php
if(!$_SESSION["usuario"]){
		//sino existe usuarios en sesion regresamos a login
	   header("location:login");
	   exit();
}else{
	if($_SESSION['rol']=="paciente"){
		//si es de tipo 2(operador) lo mandamos al dashboard
		header("location:dashboard");
		exit();

	}
}

?>

<?php
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$parts = parse_url($actual_link);

		parse_str($parts['query'], $query);
		$id=$query['data'];
		//obtengo  el curso
		if(isset($id)){
				$curso = CitasController::obtener_cita($id);
			}

 ?>
  <div id="content-header">

  </div>

    <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
      	<div class="widget-box">
	          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
	            <h5>Editar Cita</h5>
	          </div>
	          <div class="widget-content nopadding">
	          	    <form class="form-horizontal" method="post" action="editar_cita" id="edit_cita" novalidate="novalidate">
	          	      <input type="hidden" name="id" value="<?php echo $id; ?>">
	          	      <div class="control-group">
		                <label class="control-label">Atendido</label>
		                <div class="controls">
		                 <!-- <input type="text" name="fecha_hora" id="fecha_hora" value="<?php echo $curso['fecha_hora']; ?>">-->
		                  <input type="checkbox" name="estado" id="estado" value="1">
		                </div>
		              </div>



	              	   <div class="control-group">
		                <label class="control-label">Observaciones</label>
		                <div class="controls">
		                  <input type="text" name="observaciones" id="observaciones" value="<?php echo $cita['observaciones']; ?>">
		                </div>
		              </div>
		              <div class="control-group">
		                <label class="control-label">Detalles</label>
		                <div class="controls">
		                  <input type="text" name="detalles" id="detalles" value="<?php echo $cita['detalles']; ?>">
		                </div>
		              </div>
		              <div class="control-group">
		                <label class="control-label">Antecedentes</label>
		                <div class="controls">
		                  <input type="text" name="antecedentes" id="antecedentes" value="<?php echo $cita['antecedentes']; ?>">
		                </div>
		              </div>
		              <div class="control-group">
		                <label class="control-label">Tratamiento</label>
		                <div class="controls">
		                  <input type="text" name="tratamiento" id="tratamiento" value="<?php echo $cita['tratamiento']; ?>">
		                </div>
		              </div>
		              
		              <div class="form-actions">
		              		<?php 
	                     		$edit = new CitasController();
	                     		$edit->edit();
	                    ?>
		                <input type="submit" name="editar_cita" value="Guardar" class="btn btn-success">
		              </div>
		            </form>

	          </div>
        </div>
         <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
               <a href="listar_citas" class="btn btn-info">Regresar</a>	
              </div>
		</div>
       		
      </div>
    </div>
</div>

<script>
	
jQuery(document).ready(function($) {
	// Form Validation
    $("#edit_cita").validate({
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


     $( "#sidebar ul li.cursos" ).addClass( "active" );

	


});

</script>

