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
        <li class="bg_ls"> <a href="#"> <i class="icon-upload-alt"></i> Citas Programadas</a> </li>
        <li class="bg_ls"> <a href="#"> <i class="icon-th-list"></i> Ver horarios</a> </li>
       <!--   <li class="bg_lg"> <a href="#"> <i class="icon-plus"></i> Asignar Cargo x Proceso</a> </li>
        <li class="bg_lr"> <a href="#"> <i class="icon-plus"></i> Agregar Preguntas</a> </li>
      <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>-->

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