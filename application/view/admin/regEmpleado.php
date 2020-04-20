<div class="container">
 <h3 class="blue-text" style="padding-left: 300px">Registrar Empleado</h3>

    <div class="container" style="padding-left: 100px">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/addUsuario">
<div class="row">
           <div class="input-field col s6">
            <select title="Seleccione cargo" required name="id_cargo" required>
              <option value="" disabled selected>Cargo:</option>
              <?php 
              foreach ($Cargo as $value):?>
                <option value="<?= $value->Id_Cargo ?>"><?=$value->Cargo ?></option>
              
               <?php endforeach; ?>
             </select>
            </div>
</div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese Nombre" type="text" required name="nombre">
          <label for="first_name">Nombre</label>
        </div>
      </div>
      <div class="row">
            <div class="input-field col s6">
           <input title="Ingrese Identificación" name="id" type="text"required onkeypress="return justNumbers(event);" required>
          <label >Identificación</label>
         </div>
      </div>
                <div class="row">
            <div class="input-field col s6">
           <input title="Ingrese clave" type="password" id="clave" name="clave">
          <label >Clave</label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese Correo" id="email" type="email" name="email" class="validate">
          <label for="email">Correo</label>
          <span class="helper-text" data-error="error" data-success="correcto">Debe conetener un @</span>
        </div>
      </div>
<div class="row">
  <div class="input-field col s6">
    <select title="Seleccione Estado"  class="browser-default" required name="id_estado">
      <option value="" disabled selected>Estado:</option>
      <option name="id_estado" value="1">Activo</option>
      <option name="id_estado" value="2">Inactivo</option>
    </select>
  </div>
</div>
 <div class="form-group">
         <label for="captcha" class="col-md-3 control-label"></label>
         <div class="g-recaptcha col-md-9" data-sitekey=""></div>       
 </div>

      <div class="row">
              
   <button title="Botón para enviar" class="btn waves-effect waves-light" type="submit" name="submit_addUsuario">Guardar
    <i class="material-icons right">send</i>
  </button>
        
           </div>
   </form>  
 </div>

<br><br><br><br><br><br><br>



   <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>

      <script type="text/javascript">
    function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
          </script>
</div>
</main>