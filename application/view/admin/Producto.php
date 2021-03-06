<div class="container">
  <h3 style="padding-left: 100px" class="white-text center">PRODUCTO</h3>
  <div style="padding-left: 100px">
   <div class="row">
      <form method="post" action="<?php echo URL; ?>admin/Producto">
    <div class="input-field col s4">
      <input type="text" name="valor">
        <label >Referencia o Producto:</label>
      </div>
      <div class="input-field col s4">
            <button title="Botón para realizar una búsqueda" class="btn waves-effect waves-light btn-small light-blue" type="submit" name="btnBuscar">
              <i class="material-icons">search</i>
            </button>
            <a title="Botón para reiniciar búsqueda" href="<?php echo URL; ?>admin/Producto" class="btn-floating btn-small waves-effect waves-light light-blue">
              <i class="material-icons">replay</i>
            </a>
          </div>
          <div class="input-field col s2">
            <a title="Botón para generar PDF" href="<?php echo URL; ?>admin/reporteProducto" target="_blank" class="btn waves-effect waves-light btn-small light-blue">
              <i class="material-icons">archive</i>
            </a>
          </div>
          <div class="input-field col s2">
        </li>
          <a title="Botón para agregar un producto" href="<?php echo URL; ?>admin/regProducto" class="btn modal-trigger indigo teal darken-3" name="producto"><i class="material-icons">assignment</i></a>
          <a title="Botón para agregar tipo de producto" href="<?php echo URL; ?>admin/regTipoProducto" class="btn modal-trigger indigo teal darken-4" name="tipo_producto"><i class="material-icons">playlist_add</i></a>
            </div>
            </form>
          </div>  
          <div class="input-field col s8">        
       <table class="responsive-table">
        <thead class="white-text">
          <tr>
            <th>Referencia</th>
              <th>Producto</th>
              <th>Descripción</th>
              <th>Tipo</th>
              <th>Opción</th>
          </tr>
        </thead>

        <tbody class="white-text">
          <?php foreach ($Producto as $Producto) { ?>
                <tr>
                  <td><?php if (isset($Producto->Referencia)) echo htmlspecialchars($Producto->Referencia, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Producto->Producto)) echo htmlspecialchars($Producto->Producto, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Producto->Descripcion)) echo htmlspecialchars($Producto->Descripcion, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Producto->Tipo_Producto)) echo htmlspecialchars($Producto->Tipo_Producto, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a title="Botón para editar producto" class="btn-floating btn-large waves-effect waves-light blue" href="<?php echo URL . 'admin/editProducto/' . htmlspecialchars($Producto->Id_Producto, ENT_QUOTES, 'UTF-8'); ?>"><i class="material-icons">create</i></a></td>

                    <td><a title="Botón para mostrar ficha técnica"class="btn modal-trigger indigo teal darken-3" onclick="mostrarProductos(<?php echo$Producto->Id_Producto ?>)"><i class="material-icons">format_align_justify</i></a></td>

                    <form method="GET" target="_blank" action="<?php echo URL; ?>admin/reporteFicha"><input type='hidden' name='producto' value="<?php if (isset($Producto->Id_Producto)) echo htmlspecialchars($Producto->Id_Producto, ENT_QUOTES, 'UTF-8'); ?>">
                    <td> <button  title="Botón para generar pdf del producto" class="btn waves-effect waves-light btn-small  teal" type="submit" name="btnBuscar">
                    <i class="material-icons">archive</i>
                    </button></td>
                    </form>
                </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
 </div>

<div id="Model_Pieza" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ficha Técnica</h4>
      <table>
            <thead>
              <tr>
                <th>Piezas</th>
                <th>Fases</th>

              </tr>
            </thead>
              <tbody id="contenedor_pieza">
                
              </tbody>
          </table>
    </div>  
    <div class="modal-footer">
      <a href="#!" onclick="$('#contenedor_pieza').empty();" class="modal-action modal-close waves-effect btn-flat green accent-4">Salir</a>
    </div>
  </div>
</div>
</main>


