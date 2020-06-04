<div class="container">
<h3 class="white-text" style="padding-left: 300px">Registrar Cliente</h3>

    <div class="row" style="padding-left: 300px">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/addCliente">
            <div class="row">
                       <div class="input-field col s3">
    <select title="Seleccione tipo de identificación" class="browser-default" required name="tipo_id">
      <option value="" disabled selected>Tipo ID:</option>
      <option value="1">C.C</option>
      <option value="2">Nit</option>
    </select>
         </div>

            <div class="input-field col s4">
           <input title="Ingrese número de Identificación" class="white-text" type="text"required onkeypress="return justNumbers(event);" name="id" required>
          <label class="white-text">Identificación: </label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese Nombre De Contacto" class="white-text" type="text" name="nombre" required>
          <label for="first_name" class="white-text">Nombre</label>
        </div>
      </div>
      <div class="row">
            <div class="input-field col s4">
           <input class="white-text" type="text"required name="nomc" required>
          <label class="white-text">Nombre De Contacto</label>
         </div>
            <div class="input-field col s3">
           <input class="white-text" title="Ingrese Número De Contacto" type="text" onkeypress="return justNumbers(event);" name="numc" required>
          <label class="white-text">Número De Contacto</label>
         </div>
      </div>
            <div class="row">
        <div class="input-field col s6">
          <input class="white-text" title="Ingrese Dirección" type="text" name="direccion" required>
          <label for="first_name" class="white-text">Dirección</label>
        </div>
      </div>
      <div class="row">
            <div class="input-field col s3">
           <input class="white-text" title="Ingrese Número De télefono De La Empresa y/o Persona" type="text" name="tel" required onkeypress="return justNumbers(event);" required>
          <label class="white-text">Teléfono</label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input class="white-text" title="Ingrese correo electrónico" id="email" type="email" name="email" class="validate">
            <label for="email" class="white-text">Email</label>
            <span class="white-text" class="helper-text" data-error="error" data-success="correcto">Debe contener un @</span>
        </div>
      </div>



      <div class="row">
              
   <button title="Botón para guardar" class="btn waves-effect waves-light blue" type="submit" name="submit_addCliente">Guardar
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
