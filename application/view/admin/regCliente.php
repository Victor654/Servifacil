<div class="container">
<h3 class="blue-text" style="padding-left: 300px">Registrar Cliente</h3>

    <div class="row" style="padding-left: 300px">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/addCliente">
            <div class="row">
                       <div class="input-field col s3">
    <select title="Seleccione tipo de identificación" required name="tipo_id">
      <option value="" disabled selected>Tipo ID:</option>
      <option value="1">C.C</option>
      <option value="2">Nit</option>
    </select>
         </div>

            <div class="input-field col s4">
           <input title="Ingrese número de Identificación" type="text"required onkeypress="return justNumbers(event);" name="id" required>
          <label >Identificación: </label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese Nombre De Contacto" type="text" name="nombre" required>
          <label for="first_name">Nombre</label>
        </div>
      </div>
      <div class="row">
            <div class="input-field col s4">
           <input type="text"required name="nomc" required>
          <label >Nombre De Contacto</label>
         </div>
            <div class="input-field col s3">
           <input title="Ingrese Número De Contacto" type="text" onkeypress="return justNumbers(event);" name="numc" required>
          <label >Número De Contacto</label>
         </div>
      </div>
            <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese Dirección" type="text" name="direccion" required>
          <label for="first_name">Dirección</label>
        </div>
      </div>
      <div class="row">
            <div class="input-field col s3">
           <input title="Ingrese Número De télefono De La Empresa y/o Persona" type="text" name="tel" required onkeypress="return justNumbers(event);" required>
          <label >Teléfono</label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese correo electrónico" id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
            <span class="helper-text" data-error="error" data-success="correcto">Debe contener un @</span>
        </div>
      </div>



      <div class="row">
              
   <button title="Botón para guardar" class="btn waves-effect waves-light" type="submit" name="submit_addCliente">Guardar
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
