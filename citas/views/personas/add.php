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

?>

 <div id="content-header">
  </div>

 <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Agregar Persona</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="agregar_persona" name="add_persona" id="add_persona" novalidate="novalidate">
                 	<div class="control-group">
		                <label class="control-label">Nombres</label>
		                <div class="controls">
		                  <input type="text" name="nombres" id="nombres">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Apellido Paterno</label>
		                <div class="controls">
		                  <input type="text" name="apellido_paterno" id="apellido_paterno">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Apellido Materno</label>
		                <div class="controls">
		                  <input type="text" name="apellido_materno" id="apellido_materno">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Direccion</label>
		                <div class="controls">
		                  <input type="text" name="direccion" id="direccion">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Grado Instrucción</label>
		                <div class="controls">
		                  <input type="text" name="grado_instruccion" id="grado_instruccion">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Estado civil</label>
		                <div class="controls">
		                  <input type="text" name="estado_civil" id="estado_civil">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Sexo</label>
		                <div class="controls">
		                  <input type="text" name="sexo" id="sexo">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Fecha Nacimento</label>
		                <div class="controls">
		                  <input type="text" name="fecha_nacimiento" id="fecha_nacimiento">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Entidad id</label>
		                <div class="controls">
		                  <input type="text" name="entidad_id" id="entidad_id">
		                </div>
	               </div>

	              <div class="form-actions">
		              	<?php 
	                     		$add = new PersonasController();
	                     		$add->add();
	                    ?>
		                <input type="submit" name="agregar_persona" value="Guardar" class="btn btn-success">
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
    $("#add_persona").validate({
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


     $( "#sidebar ul li.personas" ).addClass( "active" );

	


});

</script>
