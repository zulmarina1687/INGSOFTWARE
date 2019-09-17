<?php
if(!$_SESSION["usuario"]){
	   header("location:login");
	   exit();
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
		$personal = PersonalesController::view($id);
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
			              <label class="control-label">Dni:</label>
			              <div class="controls">
			               <?php echo $personal['dni']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Nombres:</label>
			              <div class="controls">
			               <?php echo $personal['nombres']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Apellidos:</label>
			              <div class="controls">
			               <?php echo $personal['apellidos']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Telefono:</label>
			              <div class="controls">
			               <?php echo $personal['telefono']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Correo:</label>
			              <div class="controls">
			               <?php echo $personal['correo']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Categoria:</label>
			              <div class="controls">
			               <?php echo $personal['categoria']; ?>
			              </div>
			            </div>					 		            
			            <div class="control-group">
			              <label class="control-label">Facultad:</label>
			              <div class="controls">
			               <?php echo $personal['facultad']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Regimen:</label>
			              <div class="controls">
			               <?php echo $personal['regimen']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Cargo:</label>
			              <div class="controls">
			               <?php echo $personal['cargo']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Dependencia:</label>
			              <div class="controls">
			               <?php echo $personal['dependencia']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Tipo:</label>
			              <div class="controls">
			               <?php echo $personal['descripcion']; ?>
			              </div>
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
        $( "#sidebar ul li.personales" ).addClass( "active" );
  });
  </script>