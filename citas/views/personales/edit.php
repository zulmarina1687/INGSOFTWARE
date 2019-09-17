<?php
if(!$_SESSION["usuario"]){
	   header("location:login");
	   exit();
}

?>
<?php
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$parts = parse_url($actual_link);

		parse_str($parts['query'], $query);
		$id=$query['data'];
		//obtengo  el personal
		if(isset($id)){
				$personal = PersonalesController::obtener_personal($id);
			}
		$tipo_personales = TipoPersonalesController::index();

 ?>
  <div id="content-header">

  </div>

    <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
      	<div class="widget-box">
	          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
	            <h5>Editar Personal</h5>
	          </div>
	          <div class="widget-content nopadding">
	          	    <form class="form-horizontal" method="post" action="editar_personal" id="edit_personal" novalidate="novalidate">
	          	      <input type="hidden" name="id" value="<?php echo $id; ?>">
	              		<div class="control-group">
		                <label class="control-label">Dni</label>
		                <div class="controls">
		                  <input type="text" name="dni" id="dni" value="<?php echo $personal['dni']; ?>">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Nombres</label>
		                <div class="controls">
		                  <input type="text" name="nombres" id="nombres" value="<?php echo $personal['nombres']; ?>">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Apellidos</label>
		                <div class="controls">
		                  <input type="text" name="apellidos" id="apellidos" value="<?php echo $personal['apellidos']; ?>">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Telefono</label>
		                <div class="controls">
		                  <input type="text" name="telefono" id="telefono" value="<?php echo $personal['telefono']; ?>">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Correo</label>
		                <div class="controls">
		                  <input type="text" name="correo" id="correo" value="<?php echo $personal['correo']; ?>">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Categoria</label>
		                <div class="controls">
		                  <input type="text" name="categoria" id="categoria" value="<?php echo $personal['categoria']; ?>">
		                </div>
	               </div>
	                <div class="control-group">
		                <label class="control-label">Facultad</label>
		                <div class="controls">
		                  <input type="text" name="facultad" id="facultad" value="<?php echo $personal['facultad']; ?>">
		                </div>
	               </div>
	                <div class="control-group">
		                <label class="control-label">Regimen</label>
		                <div class="controls">
		                  <input type="text" name="regimen" id="regimen" value="<?php echo $personal['regimen']; ?>">
		                </div>
	               </div>
	                <div class="control-group">
		                <label class="control-label">Cargo</label>
		                <div class="controls">
		                  <input type="text" name="cargo" id="cargo" value="<?php echo $personal['cargo']; ?>">
		                </div>
	               </div>
	                <div class="control-group">
		                <label class="control-label">Dependencia</label>
		                <div class="controls">
		                  <input type="text" name="dependencia" id="dependencia" value="<?php echo $personal['dependencia']; ?>">
		                </div>
	               </div>
					<div class="control-group">
			              <label class="control-label">Tipo Personal</label>
			               <div class="controls">
				                <select  style="width:220px;" name="tipopersonal_id" class="personales" >
				                	<?php foreach ($tipo_personales as $key => $value): ?>
				                			  <option value="<?php echo $value['id']; ?>"><?php echo $value['descripcion']; ?></option>
				                	<?php endforeach ?>
				               
				                </select>
				           </div>
	           	   </div>


		              <div class="form-actions">
		              		<?php 
	                     		$edit = new PersonalesController();
	                     		$edit->edit();
	                    ?>
		                <input type="submit" name="editar_personal" value="Guardar" class="btn btn-success">
		              </div>
		            </form>

	          </div>
        </div>
         <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
               <a href="listar_personales" class="btn btn-info">Regresar</a>	
              </div>
		</div>
       		
      </div>
    </div>
</div>

<script>
	
jQuery(document).ready(function($) {
	$('.personales option[value=<?php echo $personal["tipopersonal_id"]; ?>]').attr('selected','selected');
	// Form Validation
    $("#edit_personal").validate({
		rules:{
			dni:{
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

