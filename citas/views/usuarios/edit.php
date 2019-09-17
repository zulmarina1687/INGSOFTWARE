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
<?php
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$parts = parse_url($actual_link);
		//vine hacer la parte que pasamos por parametro pe
		//http://php.net/manual/es/function.parse-url.php
		//https://techjourney.net/retrieve-get-query-string-from-url-in-php/
		parse_str($parts['query'], $query);
		$id=$query['data'];
		//obtengo al usuarios
		if(isset($id)){
			$usuario = UsuariosController::obtener_usuario($id);
		}
		$roles = RolesController::index();

 ?>
  <div id="content-header">
   <!-- <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Usuarios</a> <a href="#" class="current">Listado</a> </div>
    <h1>Información</h1>-->
  </div>
    <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
      		<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Editar usuario</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="editar_usuario" id="edit_user" novalidate="novalidate">
          	      <input type="hidden" name="id" value="<?php echo $id; ?>">
              	<div class="control-group">
	                <label class="control-label">Nombres</label>
	                <div class="controls">
	                  <input type="text" name="nombres" id="nombres" value="<?php echo $usuario['nombres']; ?>">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Apellidos</label>
	                <div class="controls">
	                  <input type="text" name="apellidos" id="apellidos" value="<?php echo $usuario['apellidos']; ?>">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Correo</label>
	                <div class="controls">
	                  <input type="text" name="correo" id="correo" value="<?php echo $usuario['correo']; ?>">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Usuario</label>
	                <div class="controls">
	                  <input type="text" name="usuario" id="usuario" value="<?php echo $usuario['usuario']; ?>">
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
                     		$edit = new UsuariosController();
                     		$edit->edit();
                    ?>
	                <input type="submit" name="editar_usuario" value="Guardar" class="btn btn-success">
	              </div>
	            </form>

          </div>
        </div>
       		
       <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
               <a href="listar_usuarios" class="btn btn-info">Regresar</a>	
              </div>
		</div>
      </div>
    </div>
</div>

<script>
	
jQuery(document).ready(function($) {
	$('.roles option[value=<?php echo $usuario["rol_id"]; ?>]').attr('selected','selected');
	/*$('input[type=checkbox],input[type=radio],input[type=file]').uniform();


	
	$('select').select2();*/
	////	$('.roles').selectedIndex=<?php echo '2' ?>;
	
	// Form Validation
    $("#edit_user").validate({
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

