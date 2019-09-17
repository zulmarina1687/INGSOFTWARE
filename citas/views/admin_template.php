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


<?php if (isset($_GET['action'])=="admin") {
  //  if ($_GET['action'] !== 'login') { ?>
          <!-- todos en general -->
          <link rel="stylesheet" href="assets/css/matrix-login.css" />
         
          

<?php }else { ?>
    <!-- login -->
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
          <link rel="stylesheet" href="assets/css/matrix-style.css" />
          <link rel="stylesheet" href="assets/css/matrix-media.css" />
          <link rel="stylesheet" href="assets/css/jquery.gritter.css" />
<?php } ?>



<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="assets/js/excanvas.min.js"></script> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/jquery.ui.custom.js"></script> 
</head>
<body>



<?php if (isset($_GET['action'])!="admin"  && $_GET['action']!="admin/olvido" && $_GET['action']!="admin/restablecer" ) {

  //  if ($_GET['action'] !== 'login') {
        require "elements/header.php";
        require "elements/menu.php"; ?>
       <!--main-container-part-->
       <div id="content"> 
<?php } ?>

<!--  *************tm****************  -->
<?php
    $mvc = new EnlacesController();
    $mvc-> enlacesPaginasController();
?>

<!--   *************** -->
<?php if (isset($_GET['action'])!="admin" && $_GET['action']!="admin/olvido" && $_GET['action']!="admin/restablecer" ) {
   // if ($_GET['action'] !== 'login') { ?>
         </div>
     <!--end-main-container-part-->
         <?php  require "elements/footer.php"; 
}?>



<?php if (isset($_GET['action'])!="admin"  && $_GET['action']!="admin/olvido" && $_GET['action']!="admin/restablecer") {
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

   <!--   <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {
            
                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();            
                } 
                // else, send page to designated URL            
                else {  
                  document.location.href = newURL;
                }
            }
        }

      // resets the menu selection upon entry to this page:
      function resetMenu() {
         document.gomenu.selector.selectedIndex = 2;
      }
      </script>-->

<?php } else { ?>

        <script src="assets/js/jquery.min.js"></script>  
        <script src="assets/js/matrix.login.js"></script> 

<?php } ?>
</body>
</html>
