<div class="container">
<h3 class="blue-text" style="padding-left: 300px">Editar Operario</h3>

    <div class="row" style="padding-left: 300px">
     <form class="col s12" method="post" action="<?php echo URL; ?>admin/updateOperario">
            <div class="row">
            <div class="input-field col s6">
           <input title="No se puede modificar" readonly name="id" value="<?php echo htmlspecialchars($Operario->Id_Operario, ENT_QUOTES, 'UTF-8'); ?>" type="text"required onkeypress="return justNumbers(event);" required>
          <label >Identificacion: </label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese nombre" type="text" name="nombre" value="<?php echo htmlspecialchars($Operario->Nombre, ENT_QUOTES, 'UTF-8'); ?>"required >
          <label for="first_name">Nombre: </label>
      </div>
      </div>
        <div class="row">
          <div class="input-field col s6">
          <input title="Ingrese Correo" type="email"  name="email" value="<?php echo htmlspecialchars($Operario->Correo, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label >Correo: </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select title="Seleccione un Estado" required name="id_estado">
            <option value="" disabled selected>Estado: </option>
            <option  value="1">Activo</option>
            <option  value="2">Inactivo</option>
          </select>
        </div>
      </div>
      <div class="row">             
        <button title="Botón Guardar" class="btn waves-effect waves-light" type="submit" name="submit_updateOperario">Guardar
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
  </main>