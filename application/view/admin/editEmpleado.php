
<div class="container">
<h3 class="white-text" style="padding-left: 300px">Editar Directivos</h3>

    <div class="row" style="padding-left: 300px">
     <form class="col s12" method="post" action="<?php echo URL; ?>admin/updateUsuario">
            <div class="row">
            <div class="input-field col s6">
           <input class="white-text" title="No se puede modificar" readonly name="id" value="<?php echo htmlspecialchars($Usuario->Id_Usuario, ENT_QUOTES, 'UTF-8'); ?>" type="text"required onkeypress="return justNumbers(event);" required>
          <label class="white-text">Identificación</label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input class="white-text" title="Ingrese Nombre" type="text" value="<?php echo htmlspecialchars($Usuario->Nombre, ENT_QUOTES, 'UTF-8'); ?>"required name="nombre">
          <label for="first_name" class="white-text">Nombre</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select title="Seleccione cargo" class="browser-default" required name="id_cargo">
            <option name="id_cargo" value="" disabled selected>Cargo:</option>
            <option name="id_cargo" value="1">Administrador</option>
            <option name="id_cargo" value="2">Jefe de producción</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input class="white-text" title="Ingrese clave" type="password" value="<?php echo htmlspecialchars($Usuario->Clave, ENT_QUOTES, 'UTF-8'); ?>"required name="clave">
          <label class="white-text">Clave</label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input class="white-text" title="Ingrese Correo" id="email"  name="email" type="email"  value="<?php echo htmlspecialchars($Usuario->Correo, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label class="white-text">Correo</label>
       
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select title="Seleccione Estado" class="browser-default" required name="id_estado">
            <option value="" disabled selected>Estado: </option>
            <option name="id_estado" value="1">Activo</option>
            <option name="id_estado" value="2">Inactivo</option>
          </select>
        </div>
      </div>
      <div class="row">             
        <button title="Botón Guardar" class="btn waves-effect waves-light blue" type="submit" name="submit_UpdateUsuario">Guardar
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
      </body>
</div>
</main>