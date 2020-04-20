<div class="container">
    <h3 class="blue-text" style="padding-left: 300px">Registrar Producto</h3>

    <div class="container">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/updateProducto">
       <input type='hidden' name='id' value="<?php echo htmlspecialchars($Producto->Id_Producto, ENT_QUOTES, 'UTF-8'); ?>">
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese referencia" type="text" name="referencia" value="<?php echo htmlspecialchars($Producto->Referencia, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name">Referencia: </label>
        </div>
        <div class="input-field col s6">
          <input title="Ingrese Nombre" type="text" name="producto" value="<?php echo htmlspecialchars($Producto->Producto, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name">Nombre: </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese descripción" type="text"  name="descripcion" value="<?php echo htmlspecialchars($Producto->Descripcion, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="textarea1">Descripción: </label>
        </div>
      </div>
      <div class="row">
           <div class="input-field col s6">
            <select title="Seleccione tipo de producto" required name="tipo_producto" required>
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