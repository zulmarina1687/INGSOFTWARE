<!--sidebar-menu-->
<div id="sidebar"><a href="dashboard" class="visible-phone"><i class="icon icon-home"></i> ADMINISTRACION</a>
  <ul>
    <li class="dashboard"><a href="dashboard"><i class="icon icon-home"></i> <span>Administracion</span></a> </li>

    <?php if($_SESSION['rol']==1) { ?>
    <li class="submenu usuarios"> <a href="#"><i class="icon icon-th-list"></i> <span>Usuarios</span></a>
      <ul>
        <li><a href="agregar_usuario">Agregar</a></li>
        <li><a href="listar_usuarios">Ver Todos</a></li>
        <li><a href="cambiar_clave">Cambiar Clave</a></li>
      </ul>
    </li>
    <li class="submenu roles"> <a href="#"><i class="icon icon-th-list"></i> <span>Roles</span></a>
      <ul>
        <li><a href="agregar_rol">Agregar</a></li>
        <li><a href="listar_roles">Ver Todos</a></li>
      </ul>
    </li>

    <li class="submenu medicos"> <a href="#"><i class="icon icon-th-list"></i> <span>Medicos</span></a>
      <ul>
        <!--<li><a href="agregar_medico">Agregar</a></li-->|        <li><a href="listar_medicos">Ver Todos</a></li>
      </ul>
    </li>
    <li class="submenu pacientes"> <a href="#"><i class="icon icon-th-list"></i> <span>Pacientes</span></a>
      <ul>
        <li><a href="agregar_paciente">Agregar</a></li>
        <li><a href="listar_pacientes">Ver Todos</a></li>
      </ul>
    </li>
    <li class="submenu citas"> <a href="#"><i class="icon icon-th-list"></i> <span>Citas</span></a>
      <ul>
        <li><a href="agregar_cita">Agregar</a></li>
        <li><a href="listar_citas">Ver Todos</a></li>
      </ul>
    </li>
    <?php } ?>


        <?php if($_SESSION['rol']=="paciente") { ?>

    <li class="submenu citas"> <a href="#"><i class="icon icon-th-list"></i> <span>Citas</span></a>
      <ul>
        <li><a href="agregar_cita">Agregar</a></li>
        <li><a href="listar_citas">Ver mis Citas</a></li>
      </ul>
    </li>
    <?php } ?>
   
     <?php if($_SESSION['rol']==2) { ?> 
    <li class="submenu pacientes"> <a href="#"><i class="icon icon-th-list"></i> <span>Pacientes</span></a>
      <ul>
        <li><a href="agregar_paciente">Agregar</a></li>
        <li><a href="listar_pacientes">Ver Todos</a></li>
      </ul>
    </li>
    <li class="submenu citas"> <a href="#"><i class="icon icon-th-list"></i> <span>Citas</span></a>
      <ul>
        <li><a href="agregar_cita">Agregar</a></li>
        <li><a href="listar_citas">Ver Todos</a></li>
        <li><a href="calendario">Ver Calendario</a></li>
      </ul>
    </li>

     <?php } ?>
    
  </ul>
</div>
<!--sidebar-menu-->
