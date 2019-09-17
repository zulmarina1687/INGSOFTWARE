<!DOCTYPE html>
<html lang="es">
<head>
<title>MONTECARMELO</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../assets/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../assets/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../assets/js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../assets/js/cufon-yui.js"></script>
<script type="text/javascript" src="../assets/js/cufon-replace.js"></script>
<script type="text/javascript" src="../assets/js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="../assets/js/Myriad_Pro_300.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->

<script>
$(document).ready(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 500,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: 'fromBottom', // fromLeft, fromRight, fromTop, fromBottom
        waitBannerAnimation: false,
        progressBar: false
    })
})
$(function () {
    if ($(window).width() <= 1066) {
        $("#slider .prev").css("left", "55px")
        $("#slider .next").css("right", "55px")
    }
})
</script>

<?php require "elements/cookie.php"; ?>


</head>

<body id="page1" onload="checkCookie()">
<!-- START PAGE SOURCE -->
<div class="extra">
  <div class="body1">
    <div class="main">
      
      <?php require "elements/header.php"; ?>

   <!-- *********************************************************-->
<?php
    $mvc = new EnlacesController();
    $mvc-> enlacesPaginasController();
?>
      <!-- *********************************************************-->
    </div>
  </div>

  
  <div class="block"></div>
</div>

<div class="body2">
  <div class="main">

    <?php require "elements/foot.php"; ?>


  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>