<div class="container">
  <h3 style="padding-left: 300px">PRODUCTO</h3>
<div class="right-align">
   <a href="<?php echo URL; ?>admin/regproducto" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">add</i></a>
</div>
<div style="padding-left: 300px">
   <div class="row">
    <div class="input-field col s4">
      <input type="text" onkeyup="filtroProducto(this.value);" name="boton">
        <label >Referencia o Producto</label>
         </div>
         <div class="input-field col s4">
         </div>
       <table>
        <thead>
          <tr>
            <th>Referencia</th>
              <th>Producto</th>
              <th>Descripcion</th>
              <th>Tipo</th>
              <th>Opcion</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($Producto as $Producto) { ?>
                <tr>
                  <td><?php if (isset($Producto->Referencia)) echo htmlspecialchars($Producto->Referencia, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Producto->Producto)) echo htmlspecialchars($Producto->Producto, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Producto->Descripcion)) echo htmlspecialchars($Producto->Descripcion, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Producto->Tipo_Producto)) echo htmlspecialchars($Producto->Tipo_Producto, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a class="btn-floating btn-large waves-effect waves-light blue" href="<?php echo URL . 'admin/editProducto/' . htmlspecialchars($Producto->Id_Producto, ENT_QUOTES, 'UTF-8'); ?>"><i class="material-icons">create</i></a></td>
                    <td><a class="btn modal-trigger indigo" onclick="mostrarProductos(<?php echo$Producto->Id_Producto ?>)"><i class="material-icons">format_align_justify</i></a></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
  </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js">
  </script>

<div id="Model_Pieza" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ficha Tecnica</h4>
      <table id="contenedor_pieza">
            <thead>
              <tr>
                <th>Piezas</th>
                <th>Fases</th>

              </tr>
            </thead>
              <tbody>
                
              </tbody>
          </table>
    </div>  
    <div class="modal-footer">
      <a href="#!" onclick="$('#contenedor_pieza').empty();" class="modal-action modal-close waves-effect btn-flat green accent-4">Salir</a>
    </div>
  </div>
</div>

