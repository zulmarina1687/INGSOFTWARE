<style>
 

</style>
<div id="loginbox">            
    <form id="loginform" class="form-vertical" action="index.php" method="post">
         <div class="control-group normal_text"> <h3><img  style="background:#f3f3f3;" src="assets/img/logo_medico.png" alt="Logo" /></h3></div>  
        <div class="control-group">
               <div class="controls">
                    <div class="main_input_box">
                        <select  style="width:220px;" name="tipo_id" class="tipos" >
                                <option value="1">Paciente</option>
                                <option value="2">Medico</option>
                       
                        </select>
                    </div>
               </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name="usuario"  type="text" placeholder="Usuario" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name="clave"  type="password" placeholder="Clave" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <?php 
                       $ingreso = new UsuariosController();
                       $ingreso->login();

                 ?>
              <span class="pull-left"><a action="olvido" href="olvido" class="flip-link btn btn-info" id="to-recover">Olvido su clave?</a></span>
            
            <span class="pull-right"><input  type="submit" name="submit" class="btn btn-succes" value=" Login"></span>
              
        </div>
    </form>

</div>