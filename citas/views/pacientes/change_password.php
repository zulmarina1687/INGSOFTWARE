 <div id="content-header">
  </div>

 <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Cambiar Clave</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="cambiar_clave" name="change_password" id="change_password" novalidate="novalidate">
                 	<div class="control-group">
		                <label class="control-label">Clave</label>
		                <div class="controls">
		                  <input type="password" name="clave" id="clave">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Nueva Clave</label>
		                <div class="controls">
		                  <input type="password" name="new_clave" id="new_clave">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Repita nueva Clave</label>
		                <div class="controls">
		                  <input type="password" name="repeat_new_clave" id="repeat_new_clave">
		                </div>
	               </div>

	              <div class="form-actions">
		              	<?php 
	                     		$change_password = new UsuariosController();
	                     		$change_password->change_password();
	                    ?>
		                <input type="submit" name="submit" value="Guardar" class="btn btn-success">
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
    $("#change_password").validate({
		rules:{
			clave:{
				required:true
			},
			new_clave:{
				required:true
			},
			repeat_new_clave:{
				required:true,
				equalTo: "#new_clave"
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
