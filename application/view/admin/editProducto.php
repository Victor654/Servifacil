<div class="container">
    <h3 class="white-text" style="padding-left: 300px">Editar Producto</h3>

    <div class="container">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/updateProducto">
       <input type='hidden' name='id' value="<?php echo htmlspecialchars($Producto->Id_Producto, ENT_QUOTES, 'UTF-8'); ?>">
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese referencia" class="white-text" type="text" name="referencia" value="<?php echo htmlspecialchars($Producto->Referencia, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name" class="white-text">Referencia: </label>
        </div>
        <div class="input-field col s6">
          <input title="Ingrese Nombre" class="white-text" type="text" name="producto" value="<?php echo htmlspecialchars($Producto->Producto, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name" class="white-text">Nombre: </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese descripción" class="white-text" type="text"  name="descripcion" value="<?php echo htmlspecialchars($Producto->Descripcion, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="textarea1" class="white-text">Descripción: </label>
        </div>
      </div>
      <div class="row">
           <div class="input-field col s6">
            <select title="Seleccione tipo de producto" required name="tipo_producto" class="browser-default" required>
              <option value="" selected disabled>Tipo de producto:</option>
                <option name="tipo_producto" value="1">Camillas</option>
                <option name="tipo_producto" value="2">Sillas</option>
             </select>
            </div>
      </div>
              <div class="row">             
  <button title="Botón Guardar" class="btn waves-effect waves-light" type="submit" name="submit_updateProducto">Guardar
    <i class="material-icons right">send</i>
  </button>
        </div>
      </form>
    </div>
     <script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>
</div>
</main>