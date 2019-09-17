 <?php
session_start();
if(!$_SESSION["usuario"]){
   header("location:login");
	   exit();
}

?>
<!-- Breadcrumbs -->
  <div id="content-header">

  </div>
<!--End-breadcrumbs-->
<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="cambiar_clave"> <i class="icon-lock"></i> Cambiar Clave </a> </li>
        <li class="bg_lg span3"> <a href="#"> <i class="icon-envelope-alt"></i> Listado de Pacientes</a> </li>
        <li class="bg_lb"> <a href="#"> <i class="icon-th-list"></i>Citas Atendidas</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    

<!--End-Chart-box--> 
    <hr/>
        <div class="row-fluid">
          <div class="span6">

            
          </div>

        </div>
  </div>



  <script>
  jQuery(document).ready(function($) {
        $( "#sidebar ul li.dashboard" ).addClass( "active" );
  });
  </script>