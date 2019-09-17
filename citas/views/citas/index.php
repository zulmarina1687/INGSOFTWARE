<?php
if(!$_SESSION["usuario"]){
    //sino existe usuarios en sesion regresamos a login
     header("location:login");
     exit();
}else{
  if($_SESSION['rol']=="3"){
    //si es de tipo 2(operador) lo mandamos al dashboard
    header("location:dashboard");
    exit();

  }
}

if($_SESSION['rol']=="1"){
    $lista_citas = CitasController::listado_citas_general();
}else if( $_SESSION['rol']=="2"){
    $lista_citas = CitasController::listado_citas_del_medico();
}else {
    $lista_citas = CitasController::listado_citas_del_paciente();
}

?>
 	<div id="content-header">
  </div>
   <div class="container-fluid">
    <hr>
    <?php
        if (isset($_GET['action'])) {
               if ($_GET['action'] == 'cita_ok') {
                    if(isset($_SESSION['message'])){
                            echo $_SESSION['message'];
                      }
                }
         } 
    ?>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Listado de Citas</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>N.</th>
                  <?php if( $_SESSION['rol']=="paciente"){ ?>
                  <th>Medico</th>
                  <?php } ?>
                  <?php if( $_SESSION['rol']=="2"){ ?>
                  <th>Paciente</th>
                  <?php } ?>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Observaciones</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php $cont=0; 
                foreach ($lista_citas as $key => $value) {  $cont++; ?>
                    <tr>
                      <td><?php echo $cont;  ?></td>
                      <?php if( $_SESSION['rol']=="paciente"){ ?>
                      <td><?php echo $value['nombres'].' '.$value['apellidos']; ?></td>
                      <?php } ?>
                      <?php if( $_SESSION['rol']=="2"){ ?>
                      <td><?php echo $value['nombre_paciente'].' '.$value['apellido_paterno'].' '.$value['apellido_materno']; ?></td>
                      <?php } ?>
                      <td><?php echo $value['fecha']; ?></td>
                      <td><?php echo $value['hora']; ?></td>
                      <td><?php echo $value['observaciones']; ?></td>
                        <td style="align:center; ">
                            <a href="ver_cita?data=<?php echo $value['id']; ?>" class="btn btn-info">Ver</a>
                            <a href="editar_cita?data=<?php echo $value['id']; ?>" class="btn btn-warning">Editar</a>
                              <form method="post"  style="display:inline-block;">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                            <?php 
                                  $delete = new CitasController();
                                  $delete->delete();
                              ?>
                            <input type="submit" name="eliminar_cita" value="Eliminar" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar?')">

                          </form>
                        </td>
                    </tr>
                <?php  } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
  jQuery(document).ready(function($) {
        $( "#sidebar ul li.citas" ).addClass( "active" );
  });
  </script>