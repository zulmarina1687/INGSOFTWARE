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
		$tipopersonal = TipoPersonalesController::view($id);
 ?>
  <div id="content-header">
   <!-- <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Usuarios</a> <a href="#" class="current">Listado</a> </div>
    --><h1>Información</h1>
  </div>
    <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
       		<div class="widget-box">
			        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			          <h5>Información</h5>
			        </div>
			        <div class="widget-content nopadding">
			          <form  class="form-horizontal">
			            <div class="control-group">
			              <label class="control-label">Descripcion:</label>
			              <div class="controls">
			               <?php echo $tipopersonal['descripcion']; ?>
			              </div>
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
        $( "#sidebar ul li.tipopersonales" ).addClass( "active" );
  });
  </script>