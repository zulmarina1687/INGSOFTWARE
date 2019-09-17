<?php
/*if(!$_SESSION["usuario"]){
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
*/
?>
 <?php 	$roles = RolesController::index(); ?>
 <div id="content-header">
	<!--    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Usuarios</a> <a href="#" class="current">Agregar</a> </div>
	    --><!--<h1>Usuarios</h1>-->
  </div>
   <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Agregar usuario</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="agregar_usuario" name="add_user" id="add_user" novalidate="novalidate">
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
	                <label class="control-label">Correo</label>
	                <div class="controls">
	                  <input type="text" name="correo" id="correo">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Usuario</label>
	                <div class="controls">
	                  <input type="text" name="usuario" id="usuario">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Clave</label>
	                <div class="controls">
	                  <input type="password" name="clave" id="clave">
	                </div>
	              </div>
	               <div class="control-group">
			              <label class="control-label">Rol</label>
			               <div class="controls">
				                <select  style="width:220px;" name="rol_id" class="roles" >
				                	<?php foreach ($roles as $key => $value): ?>
				                			  <option value="<?php echo $value['id']; ?>"><?php echo $value['descripcion']; ?></option>
				                	<?php endforeach ?>
				               
				                </select>
				           </div>
	           	   </div>
	              <div class="form-actions">
	              	<?php 
                     		$add = new UsuariosController();
                     		$add->add();
                    ?>
	                <input type="submit" name="agregar_usuario" value="Guardar" class="btn btn-success">
	              </div>
	            </form>

          </div>
        </div>
      </div>
    </div>
</div>


<script>
	
jQuery(document).ready(function($) {
	
	/*$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();*/
	
	// Form Validation
    $("#add_user").validate({
		rules:{
			nombres:{
				required:true
			},
			apellidos:{
				required:true,
				//email: true
			},
			correo:{
				required:true,
				email: true
			},
			usuario:{
				required:true,
				//url: true
			},clave:{
				required: true,
				minlength:6,
				maxlength:20
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


     $( "#sidebar ul li.usuarios" ).addClass( "active" );

	


});

</script>
