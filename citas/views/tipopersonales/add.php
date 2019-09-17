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
            <h5>Agregar Tipo Personal</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="agregar_tipopersonal" name="add_tipopersonal" id="add_tipopersonal" novalidate="novalidate">
                 	<div class="control-group">
		                <label class="control-label">Descripcion</label>
		                <div class="controls">
		                  <input type="text" name="descripcion" id="descripcion">
		                </div>
	               </div>

	              <div class="form-actions">
		              	<?php 
	                     		$add = new TipoPersonalesController();
	                     		$add->add();
	                    ?>
		                <input type="submit" name="agregar_tipopersonal" value="Guardar" class="btn btn-success">
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
    $("#add_tipopersonal").validate({
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
