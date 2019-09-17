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
   <div class="container-fluid">
    <hr>
    <?php
        if (isset($_GET['action'])) {
               if ($_GET['action'] == 'persona_ok') {
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
            <h5>Listado de Personas</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>N.</th>
                  <th>Nombres</th>
                  <th>Ap Ptterno</th>
                  <th>Ap Materno</th>
                  <th>Direccion</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php $cont=0; $lista_personas = PersonasController::index();
                foreach ($lista_personas as $key => $value) {  $cont++; ?>
                    <tr>
                      <td><?php echo $cont;  ?></td>
                      <td><?php echo $value['nombres']; ?></td>
                      <td><?php echo $value['apellido_paterno']; ?></td>
                      <td><?php echo $value['apellido_materno']; ?></td>
                      <td><?php echo $value['direccion']; ?></td>

                        <td style="align:center; ">
                            <a href="ver_persona?data=<?php echo $value['id']; ?>" class="btn btn-info">Ver</a>
                            <a href="editar_persona?data=<?php echo $value['id']; ?>" class="btn btn-warning">Editar</a>
                              <form method="post"  style="display:inline-block;">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                            <?php 
                                  $delete = new PersonasController();
                                  $delete->delete();
                              ?>
                            <input type="submit" name="eliminar_persona" value="Eliminar" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar?')">

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
        $( "#sidebar ul li.personas" ).addClass( "active" );
  });
  </script>