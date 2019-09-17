<?php
if(!$_SESSION["usuario"]){
     header("location:login");
     exit();
}

?>
 	<div id="content-header">
  </div>
   <div class="container-fluid">
    <hr>
    <?php
        if (isset($_GET['action'])) {
               if ($_GET['action'] == 'personal_ok') {
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
            <h5>Listado de Personales</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>N.</th>
                  <th>Dni</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Categoria</th>
                  <th>Facultad</th>
                  <th>regimen</th>
                  <th>cargo</th>
                  <th>dependencia</th>
                  <th>Tipo</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php $cont=0; $lista_personales = PersonalesController::index();
                foreach ($lista_personales as $key => $value) {  $cont++; ?>
                    <tr>
                      <td><?php echo $cont;  ?></td>
                      <td><?php echo $value['dni']; ?></td>
                      <td><?php echo $value['nombres']; ?></td>
                      <td><?php echo $value['apellidos']; ?></td>
                      <td><?php echo $value['categoria']; ?></td>
                      <td><?php echo $value['facultad']; ?></td>
                      <td><?php echo $value['regimen']; ?></td>
                      <td><?php echo $value['cargo']; ?></td>
                      <td><?php echo $value['dependencia']; ?></td>
                      <td><?php echo $value['descripcion']; ?></td>
                       <td style="align:center; ">
                            <a href="ver_personal?data=<?php echo $value['id']; ?>" class="btn btn-info">Ver</a>
                            <a href="editar_personal?data=<?php echo $value['id']; ?>" class="btn btn-warning">Editar</a>
                              <form method="post"  style="display:inline-block;">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                            <?php 
                                  $delete = new PersonalesController();
                                  $delete->delete();
                              ?>
                            <input type="submit" name="eliminar_personal" value="Eliminar" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar?')">

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
        $( "#sidebar ul li.personales" ).addClass( "active" );
  });
  </script>