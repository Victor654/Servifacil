<div class="container">
  <h3 style="padding-left: 100px" class="white-text center">Ventas</h3>
  <div style="padding-left: 100px">
    <div class="row">
      <form method="post" action="<?php echo URL; ?>admin/Op" autocomplete="off">
        <div class="input-field col s3">
          <input type="text" name="valor" id="op" onkeypress="replicarValor()" onkeydown="replicarValor()" onkeyup="replicarValor()">
          <label >Op, Cliente o Estado: </label>
        </div>
        <div class="input-field col s2">
          <button title="Botón para hacer una búsqueda" class="btn waves-effect waves-light btn-small light-blue" type="submit" name="btnBuscar">
            <i class="material-icons">search</i>
          </button>
          <a title="Botón para reiniciar una búsqueda" href="<?php echo URL; ?>admin/Op" class="btn-floating btn-small waves-effect waves-light light-blue">
            <i class="material-icons">replay</i>
          </a>
        </div>
      </form>
      <form method="GET" action="<?php echo URL; ?>admin/reporteGeneral" autocomplete="off">
        <input type="hidden" target="_blank" name="valor2" id="reporte" >
        <div class="input-field col s5">
          <button title="Botón para generar reporte" target="_blank" class="btn waves-effect waves-light light-blue" type="submit">
            <i class="material-icons">picture_as_pdf</i>
          </button>
        </div>
        <div class="input-field col s2">
          <a title="Botón para agregar venta" href="<?php echo URL; ?>admin/regOp" class="btn-floating btn-small waves-effect waves-light  blue">
            <i class="material-icons">shopping_cart</i>
          </a>
        </div>
      </form>
    </div> 
    <div class="input-field col s8">
       <table class="responsive-table">
          <thead class="white-text">
            <tr>
              <th>Op</th>
              <th>Fecha</th>
              <th>Estado</th>
              <th>Opción</th>
            </tr>
        </thead>
        <tbody class="white-text">
          <?php foreach ($Op as $Op) { ?>
            <tr>
              <td><?php if (isset($Op->Id_Orden_Produccion)) echo htmlspecialchars($Op->Id_Orden_Produccion, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Op->Fecha_Pedido)) echo htmlspecialchars($Op->Fecha_Pedido, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Op->Estado)) echo htmlspecialchars($Op->Estado, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><a title="Botón para editar orden de producción" class="btn-floating btn-large waves-effect waves-light blue" href="<?php echo URL . 'admin/editOp/' . htmlspecialchars($Op->Id_Orden_Produccion, ENT_QUOTES, 'UTF-8'); ?>"><i class="material-icons">create</i></a></td>
              <td><a title="Botón para ver detalles" class="btn modal-trigger indigo blue" onclick="mostrarOp(<?php echo$Op->Id_Orden_Produccion ?>)"><i class="material-icons">layers</i></a>
              <form method="GET" target="_blank" action="<?php echo URL; ?>admin/reporteOp"><input type='hidden' name='op' value="<?php if (isset($Op->Id_Orden_Produccion)) echo htmlspecialchars($Op->Id_Orden_Produccion, ENT_QUOTES, 'UTF-8'); ?>">
              <button title="Botón para generar reporte de detalles" class="btn waves-effect waves-light btn-small  teal darken-3" type="submit" name="btnBuscar">
              <i class="material-icons">get_app</i>
              </button></td>
              </form>
              </td>
              <td><a title="Botón para ver tareas" class="btn modal-trigger teal" onclick="mostrarTarea2(<?php echo $Op->Id_Orden_Produccion ?>)"><i class="material-icons">today</i></a>
                    <form method="GET" target="_blank" action="<?php echo URL; ?>admin/reporteTarea"><input type='hidden' name='op' value="<?php if (isset($Op->Id_Orden_Produccion)) echo htmlspecialchars($Op->Id_Orden_Produccion, ENT_QUOTES, 'UTF-8'); ?>">
                    <button title="Botón para generar reporte de tareas" class="btn waves-effect waves-light btn-small blue" type="submit" name="btnBuscar">
                    <i class="material-icons">get_app</i>
                    </button></td>
                    </form></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>  
  </div>

<div id="Model_Op" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Detalles</h4>
      <table>
            <thead>
              <tr>
                <th>Número de orden</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Observaciones</th>
                <th>Cantidad</th>
                <th>Fecha de pedido</th>
                <th>Estado</th>

              </tr>
            </thead>
              <tbody id="contenedor_Op">
                
              </tbody>
          </table>
    </div>  
    <div class="modal-footer">
      <a href="#!" onclick="$('#contenedor_Op').empty();" class="modal-action modal-close waves-effect btn-flat green accent-4">Salir</a>
    </div>
  </div>

<div id="Model_Tareas" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Tareas</h4>
      <form method="post" action="<?php echo URL; ?>admin/cambiarEstadoTarea">
      <table>
            <thead>
              <tr>
                <th>Id Tarea</th>
                <th>Orden de produccion</th>
                <th>Operario</th>
                <th>Producto</th>
                <th>Tarea</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Cambiar Estado</th>
              </tr>
            </thead>
              <tbody id="contenedor_Tareas">
                
              </tbody>
          </table>
    </div>  
    <div class="modal-footer">
            <a href="#!" onclick="$('#contenedor_Tareas').empty();" class="modal-action modal-close waves-effect btn-flat green accent-4">Salir</a>
          <button class="btn waves-effect waves-light" type="submit" name="submit_cambiarEstado2">Guardar
        <i class="material-icons right">send</i>
      </button>
        </form>  
  </div>
</div>
</div>
</main>

<script>
  function replicarValor(){
    document.getElementById('reporte').value = document.getElementById('op').value;
  }
</script>