<?php
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$parts = parse_url($actual_link);
		//vine hacer la parte que pasamos por parametro pe
		//http://php.net/manual/es/function.parse-url.php
		//https://techjourney.net/retrieve-get-query-string-from-url-in-php/
		parse_str($parts['query'], $query);
		$id=$query['data'];
		$paciente = PacientesController::view($id);
 ?>
  <div id="content-header">
   <!-- <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Usuarios</a> <a href="#" class="current">Listado</a> </div>
    --><h1>Perfil</h1>
  </div>
    <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
       		<div class="widget-box">
			        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			          <h5>Información Pesonal</h5>
			        </div>
			        <div class="widget-content nopadding">
			          <form  class="form-horizontal">
			            <div class="control-group">
			              <label class="control-label">Nombres:</label>
			              <div class="controls">
			               <?php echo $paciente['nombres']; ?>
			              </div>
			            </div>
			             <div class="control-group">
			              <label class="control-label">Apellido Paterno:</label>
			              <div class="controls">
			               <?php echo $paciente['apellido_paterno']; ?>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Apellido Materno:</label>
			              <div class="controls">
			               <?php echo $paciente['apellido_materno']; ?>
			              </div>
			            </div>
			             <div class="control-group">
			              <label class="control-label">Correo:</label>
			              <div class="controls">
			               <?php echo $paciente['correo']; ?>
			              </div>
			            </div>
			             <div class="control-group">
			              <label class="control-label">Usuario:</label>
			              <div class="controls">
			               <?php echo $paciente['usuario']; ?>
			              </div>
			            </div>

			            
						 		            
			          </form>

			        </div>

      </div>
       <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
               <a href="dashboard_pa" class="btn btn-info">Regresar</a>	
              </div>
		</div>
      </div>
    </div>
</div>
  <script>
  jQuery(document).ready(function($) {
        $( "#sidebar ul li.pacientes" ).addClass( "active" );
  });
  </script>