<style>
  
   #logo, #resetform {  padding-top: 50px;   width: 32%;    margin-left: auto;    margin-right: auto;    position: relative;}
   #logo img {  margin: 0 auto;    display: block;}
   #resetform { overflow: hidden !important;    text-align: left;    position: relative; }
   #resetform form{ width:100%; background:#2E363F; position:relative; top:0; left:0; }
   #resetform .form-actions { padding: 14px 20px 15px;}
   #resetform .form-actions .pull-left { margin-top:0px;}
   #resetform form#loginform { z-index: 200; display:block;}
   #resetform form#resetform { z-index: 100;     display:none;}
   #resetform form#resetform .form-actions {    margin-top: 10px;}
   #resetform .main_input_box { margin:0 auto; text-align:center; font-size:13px;}
   #resetform .main_input_box .add-on{  padding:9px 9px; *line-height:31px; vertical-align:top; color:#fff;  width:30px; display:inline-block;}
   #resetform .main_input_box input{ height:30px; vertical-align:top; border:0px; display:inline-block; width:75%; line-height:22px;  margin-bottom:3px;}
   #resetform .controls{ padding:0 20px;}
   #resetform .control-group{ padding:20px 0; margin-bottom:0px;}
    .form-vertical, .form-actions {  margin-bottom: 0; background:none; border-top:1px solid #3f4954; }
    #resetform .normal_text{ padding:15px 10px; text-align:center; font-size:14px; line-height:20px; background:#2E363F; color:#fff; }
    @media (max-width:800px){
    #logo { width: 60%; }
    #resetform{ width:80%}
    }
    @media (max-width: 480px){
    #logo { width: 40%; }
    #resetform{ width:90%}
    #resetform .control-group{ padding:8px 0; margin-bottom:0px;}
    }

</style>
<div id="loginbox">            
      <form class="form-horizontal" method="post" action="restablecer" id="resetform" novalidate="novalidate">
	               <div class="control-group">
		                <label class="control-label">Nueva Clave</label>
		                <div class="controls">
		                  <input type="password" name="new_clave" id="new_clave">
		                </div>
	               </div>
	               <div class="control-group">
		                <label class="control-label">Repita nueva Clave</label>
		                <div class="controls">
		                  <input type="password" name="repeat_new_clave" id="repeat_new_clave">
		                </div>
	               </div>

	              <div class="form-actions">
		              	<?php 
	                     		$restablecer = new UsuariosController();
	                     		$restablecer->restablecer_clave();
	                    ?>
		                <input type="submit" name="restablecer_clave" value="Cambiar" class="btn btn-success">
	              </div>
	  </form>
</div>
      <script src="assets/js/jquery.validate.js"></script> 
<script>
	
jQuery(document).ready(function($) {

	
	// Form Validation
    $("#resetform").validate({
		rules:{
	
			new_clave:{
				required:true
			},
			repeat_new_clave:{
				required:true,
				equalTo: "#new_clave"
			}

		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


     $( "#sidebar ul li.usuarios" ).addClass( "active" );

	


});

</script>
