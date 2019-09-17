<style>
  
   #logo, #recoverform {  padding-top: 50px;   width: 32%;    margin-left: auto;    margin-right: auto;    position: relative;}
   #logo img {  margin: 0 auto;    display: block;}
   #recoverform { overflow: hidden !important;    text-align: left;    position: relative; }
   #recoverform form{ width:100%; background:#2E363F; position:relative; top:0; left:0; }
   #recoverform .form-actions { padding: 14px 20px 15px;}
   #recoverform .form-actions .pull-left { margin-top:0px;}
   #recoverform form#loginform { z-index: 200; display:block;}
   #recoverform form#recoverform { z-index: 100;     display:none;}
   #recoverform form#recoverform .form-actions {    margin-top: 10px;}
   #recoverform .main_input_box { margin:0 auto; text-align:center; font-size:13px;}
   #recoverform .main_input_box .add-on{  padding:9px 9px; *line-height:31px; vertical-align:top; color:#fff;  width:30px; display:inline-block;}
   #recoverform .main_input_box input{ height:30px; vertical-align:top; border:0px; display:inline-block; width:75%; line-height:22px;  margin-bottom:3px;}
   #recoverform .controls{ padding:0 20px;}
   #recoverform .control-group{ padding:20px 0; margin-bottom:0px;}
    .form-vertical, .form-actions {  margin-bottom: 0; background:none; border-top:1px solid #3f4954; }
    #recoverform .normal_text{ padding:15px 10px; text-align:center; font-size:14px; line-height:20px; background:#2E363F; color:#fff; }
    @media (max-width:800px){
    #logo { width: 60%; }
    #recoverform{ width:80%}
    }
    @media (max-width: 480px){
    #logo { width: 40%; }
    #recoverform{ width:90%}
    #recoverform .control-group{ padding:8px 0; margin-bottom:0px;}
    }

</style>
<div id="loginbox">            
    <form id="recoverform" class="form-vertical" method="post">
        <p class="normal_text">Ingrese su correo electrónico  y le enviaremos instrucciones sobre cómo recuperar una contraseña.</p>
        
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text"  name="correo" placeholder="Correo" />
                </div>
            </div>
       
        <div class="form-actions">
            <?php 
                    $olvido = new UsuariosController();
                     $olvido->olvido_clave();
                 ?>
            <span class="pull-left"><a href="/" class="flip-link btn btn-success" id="to-login">Regresar a Login</a></span>
           
            <span class="pull-right">
                <input  type="submit" name="submit" class="btn btn-info" value="Enviar"></span>
        </div>
    </form>
</div>


