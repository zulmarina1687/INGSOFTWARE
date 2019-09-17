<?php  if( $_GET['action']!="data_calendario"){ ?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Sistema Web</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="assets/css/uniform.css" />
<link rel="stylesheet" href="assets/css/select2.css" />

<link rel="stylesheet" href="assets/css/colorpicker.css" />
<link rel="stylesheet" href="assets/css/datepicker.css" />

<?php  } ?>
<?php if (isset($_GET['action']) && $_GET['action']!="data_calendario") {
  //  if ($_GET['action'] !== 'login') { ?>
          <!-- todos en general -->
         
          <link rel="stylesheet" href="assets/css/fullcalendar.css" />
          <link rel="stylesheet" href="assets/css/matrix-style.css" />
          <link rel="stylesheet" href="assets/css/matrix-media.css" />
          <link rel="stylesheet" href="assets/css/jquery.gritter.css" />

<?php }else { ?>
    
    <?php  if( $_GET['action']!="data_calendario"){ ?>
    <!-- login -->
    <link rel="stylesheet" href="assets/css/matrix-login.css" />
     <?php  } ?>
<?php } ?>


<?php  if( $_GET['action']!="data_calendario"){ ?>
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="assets/js/excanvas.min.js"></script> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/jquery.ui.custom.js"></script> 
</head>
<body>
<?php } ?>


<?php if (isset($_GET['action'])  && $_GET['action']!="olvido" && $_GET['action']!="restablecer" &&  $_GET['action']!="data_calendario" ) {

  //  if ($_GET['action'] !== 'login') {
        require "elements/header.php";
        require "elements/menu.php"; ?>
       <!--main-container-part-->
       <div id="content"> 
<?php } ?>


<?php
    $mvc = new EnlacesController();
    $mvc-> enlacesPaginasController();
?>

<?php if (isset($_GET['action'])  && $_GET['action']!="olvido" && $_GET['action']!="restablecer" &&  $_GET['action']!="data_calendario") {
   // if ($_GET['action'] !== 'login') { ?>
         </div>
     <!--end-main-container-part-->
         <?php  require "elements/footer.php"; 
}?>


<?php  if( $_GET['action']!="data_calendario"){ ?>
<?php if (isset($_GET['action'])  && $_GET['action']!="olvido" && $_GET['action']!="restablecer" ) {
 // if ($_GET['action'] !== 'login' ) { ?>


      <script src="assets/js/bootstrap.min.js"></script> 
      <!--<script src="assets/js/jquery.flot.min.js"></script> 
      <script src="assets/js/jquery.flot.resize.min.js"></script> 
      <script src="assets/js/jquery.peity.min.js"></script> -->
     <!-- <script src="assets/js/fullcalendar.min.js"></script> -->
      <script src="assets/js/matrix.js"></script>
   <!--   <script src="assets/js/matrix.dashboard.js"></script> -->
      <script src="assets/js/jquery.gritter.min.js"></script> 
    <!--  <script src="assets/js/matrix.interface.js"></script> -->
    <!-- <script src="assets/js/matrix.chat.js"></script> -->
      <script src="assets/js/jquery.validate.js"></script> 
     <!-- <script src="assets/js/matrix.form_validation.js"></script> -->
      <script src="assets/js/jquery.wizard.js"></script> 
      <script src="assets/js/jquery.uniform.js"></script> 
      <script src="assets/js/select2.min.js"></script> 
      <script src="assets/js/matrix.popover.js"></script> 
      <script src="assets/js/jquery.dataTables.min.js"></script> 
      <script src="assets/js/matrix.tables.js"></script> 
      <script src="assets/js/bootstrap-colorpicker.js"></script> 
      <script src="assets/js/bootstrap-datepicker.js"></script>
      <script src="assets/js/matrix.form_common.js"></script>  

<?php } else { ?>
        
        <script src="assets/js/jquery.min.js"></script>  
        <script src="assets/js/matrix.login.js"></script> 

<?php } ?>
</body>
</html>


<?php } ?>