<div class="container">
    <h3 style="padding-left: 300px">Tipo De Producto</h3>
  <div class="row" style="padding-left: 100px">
    <div class="input-field col s6">
    <table>
        <thead>
          <tr>
              <th>Tipo De Producto</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($TipoProducto as $TipoProducto) { ?>
                <tr>
                  <td><?php if (isset($TipoProducto->Tipo_Producto)) echo htmlspecialchars($TipoProducto->Tipo_Producto, ENT_QUOTES, 'UTF-8'); ?></td>

                    <td><a title="Botón para editar tipo" class="btn-floating btn-large waves-effect waves-light blue" href="<?php echo URL . 'admin/editTipo/' . htmlspecialchars($TipoProducto->Id_Tipo_Producto, ENT_QUOTES, 'UTF-8'); ?>"><i class="material-icons">create</i></a></td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="input-field col s6">
    <h3>Registrar Tipo De Producto</h3>
       <form method="post" action="<?php echo URL; ?>admin/addTipo">              
      <div class="row">
        <div class="input-field col s3">
           <input title="Agregar Tipo De Producto" type="text" id="tipo_producto" placeholder="Tipo De Producto" required>
        </div>
        <div class="input-field col s3">
           <button title="Botón para Agregar campo" class="btn waves-effect green accent-4" type="button" onclick="agregar_campos5()">Agregar
            </button>
        </div>
          </div>
          <div class="input-field col s8">
          <table  id="detalle">
            <thead>
              <tr>
                <th>Tipo De Producto</th>
              </tr>
            </thead>
              <tbody>
                
              </tbody>
          </table>
         </div>
      <div class="row">              
        <button title="Botón Guardar" class="btn waves-effect waves-light" type="submit" name="submit_addTipo">Guardar
        <i class="material-icons right">send</i>
        </button>
      </div>
   </form>     
</div>

   <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>
</div>
</div>
</main> 