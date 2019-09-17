<?php
if(!$_SESSION["usuario"]){
	   header("location:login");
	   exit();
}

?>

  <?php  $tipo_personales = TipoPersonalesController::index(); ?>
 <div id="content-header">
  </div>

 <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Agregar Personal</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="agregar_personal" name="add_personal" id="add_personal" novalidate="novalidate">
                   <div class="control-group">
		                <label class="control-label">Dni</label>
		                <div class="controls">
		                  <input type="text" name="dni" id="dni">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Nombres</label>
		                <div class="controls">
		                  <input type="text" name="nombres" id="nombres">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Apellidos</label>
		                <div class="controls">
		                  <input type="text" name="apellidos" id="apellidos">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Telefono</label>
		                <div class="controls">
		                  <input type="text" name="telefono" id="telefono">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Correo</label>
		                <div class="controls">
		                  <input type="text" name="correo" id="correo">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Categoria</label>
		                <div class="controls">
		                  <input type="text" name="categoria" id="categoria">
		                </div>
	               </div>
	                <div class="control-group">
		                <label class="control-label">Facultad</label>
		                <div class="controls">
		                  <input type="text" name="facultad" id="facultad">
		                </div>
	               </div>
	                <div class="control-group">
		                <label class="control-label">Regimen</label>
		                <div class="controls">
		                  <input type="text" name="regimen" id="regimen">
		                </div>
	               </div>
	                <div class="control-group">
		                <label class="control-label">Cargo</label>
		                <div class="controls">
		                  <input type="text" name="cargo" id="cargo">
		                </div>
	               </div>
	                <div class="control-group">
		                <label class="control-label">Dependencia</label>
		                <div class="controls">
		                  <input type="text" name="dependencia" id="dependencia">
		                </div>
	               </div>
					<div class="control-group">
			              <label class="control-label">Tipo Personal</label>
			               <div class="controls">
				                <select  style="width:220px;" name="tipopersonal_id" class="roles" >
				                	<?php foreach ($tipo_personales as $key => $value): ?>
				                			  <option value="<?php echo $value['id']; ?>"><?php echo $value['descripcion']; ?></option>
				                	<?php endforeach ?>
				               
				                </select>
				           </div>
	           	   </div>
	              <div class="form-actions">
		              	<?php 
	                     		$add = new PersonalesController();
	                     		$add->add();
	                    ?>
		                <input type="submit" name="agregar_personal" value="Guardar" class="btn btn-success">
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
    $("#add_personal").validate({
		rules:{
			dni:{
				required:true
			},
			nombres:{
				required:true
			},
			apellidos:{
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


     $( "#sidebar ul li.personales" ).addClass( "active" );

	


});

</script>
