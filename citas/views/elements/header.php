<!--Header-part-->
<div id="header">
  <!--
      <h1><a href="/">SISTEMA WEB UNSA </a></h1>-->
     <a href="dashboard"> <img style="background: #f3f3f3" src="assets/img/logo_medico.png" alt="Logo" /><!--<h4 style="color: #fff; font-size: 20px; ">SISTEMA  WEB </h4>--></a>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text"><?php echo strtoupper($_SESSION['usuario']); ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <?php if($_SESSION['rol']==1) { ?>
        <li><a href="ver_usuario?data=<?php echo $_SESSION['id']; ?>"><i class="icon-user"></i>Mi Perfil</a></li>
        <?php }  else if($_SESSION['rol']=="paciente"){ ?>
        <li><a href="ver_paciente?data=<?php echo $_SESSION['id']; ?>"><i class="icon-user"></i>Mi Perfil</a></li>

          <?php } ?>
        <li class="divider"></li>
        <li><a href="cambiar_clave"><i class="icon-key"></i>Cambiar clave</a></li>
        <li class="divider"></li>
       <!-- <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>-->
        <li><a href="logout"><i class="icon-signout"></i> Salir</a></li>
      </ul>
    </li>
    <!--<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span>  <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>-->
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Ajustes</span></a></li>
    <li class=""><a title="" href="sesion"><i class="icon icon-share-alt"></i> <span class="text">Salir</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!--<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>-->
<!--close-top-serch-->