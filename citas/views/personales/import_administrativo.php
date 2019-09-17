<?php
if(!$_SESSION["usuario"]){
	   header("location:login");
	   exit();
}

?>
 <div id="content-header">
  </div>

 <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Importar Administrativos</h5>
          </div>
          <div class="widget-content nopadding">
          	    <form class="form-horizontal" method="post" action="importar_administrativo" name="import_administrativo" id="import_administrativo" novalidate="novalidate" enctype="multipart/form-data">
                 	<div class="control-group">
		                <label class="control-label">Seleccione un Excel !!</label>
		                <div class="controls">
		                  <input type="file" name="personal" class="personal">
		                </div>
	               </div>

	              <div class="form-actions">
		              	<?php 
	                     		$import = new PersonalesController();
	                     		$import->import_administrativo();
	                    ?>
		                <input type="submit" name="importar_administrativo" value="Importar" class="btn btn-success">
	              </div>
	            </form>

          </div>
        </div>
      </div>
    </div>
</div>


<script>
	
jQuery(document).ready(function($) {

	


     $( "#sidebar ul li.personales" ).addClass( "active" );

	


});

</script>
