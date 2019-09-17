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
		parse_str($parts['query'], $query);
		$id=$query['data'];
		//obtengo  el Tipo Personal
		if(isset($id)){
				$tipopersonal = TipoPersonalesController::obtener_tipopersonal($id);
			}

 ?>
  <div id="content-header">

  </div>

    <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
      	<div class="widget-box">
	          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
	            <h5>Editar Tipo Personal</h5>
	          </div>
	          <div class="widget-content nopadding">
	          	    <form class="form-horizontal" method="post" action="editar_tipopersonal" id="edit_tipopersonal" novalidate="novalidate">
	          	      <input type="hidden" name="id" value="<?php echo $id; ?>">
	              	<div class="control-group">
		                <label class="control-label">Descripcion</label>
		                <div class="controls">
		                  <input type="text" name="descripcion" id="descripcion" value="<?php echo $tipopersonal['descripcion']; ?>">
		                </div>
		              </div>
		              
		              <div class="form-actions">
		              		<?php 
	                     		$edit = new TipoPersonalesController();
	                     		$edit->edit();
	                    ?>
		                <input type="submit" name="editar_tipopersonal" value="Guardar" class="btn btn-success">
		              </div>
		            </form>

	          </div>
        </div>
         <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
               <a href="listar_tipopersonales" class="btn btn-info">Regresar</a>	
              </div>
		</div>
       		
      </div>
    </div>
</div>

<script>
	
jQuery(document).ready(function($) {
	// Form Validation
    $("#edit_tipopersonal").validate({
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


     $( "#sidebar ul li.tipopersonales" ).addClass( "active" );

	


});

</script>

