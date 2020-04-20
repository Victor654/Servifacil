<div class="container">
    <h3 style="padding-left: 300px">Registrar Venta</h3>
    <div class="container">
       <form class="col s12" method="post" action="<?php echo URL; ?>admin/addOp" autocomplete="off">
      <div class="row">
        <div class="input-field col s3">
          <input title="Inserte número de Orden de Producción"  type="text" name="Id_Op" onkeypress="return justNumbers(event);" required>
          <label for="first_name" >Número Orden</label>
        </div>
        <div class="input-field col s3">
          <select title="Seleccione estado de la Orden" name="Estado" required>
            <option value="" disabled selected>Estado:</option>
              <?php 
                foreach ($EstadoOp as $value):?>
                <option value="<?= $value->Id_Estado_Op ?>"><?=$value->Estado ?></option>           
              <?php endforeach; ?>
          </select>
         </div>
         <div class="input-field col s4">
          <input title="Seleccione fecha de pedido" name="Fecha" type="text" placeholder="Fecha De Pedido" class="datepicker">
        </div>
      </div>   
              
      <div class="row">
         <div class="input-field col s4">
          <select title="Seleccione Cliente" id="Cliente" required>
            <option value="" disabled selected>Cliente:</option>
              <?php 
                foreach ($Clientes as $value):?>
                <option value="<?= $value->Id_Cliente ?>"><?=$value->Nombre ?></option>           
              <?php endforeach; ?>
          </select>
          <br>
          <select title="Seleccione Producto" id="Producto" required>
            <option value="" disabled selected>Producto:</option>
              <?php 
                foreach ($Productos as $value):?>
                <option value="<?= $value->Id_Producto ?>"><?=$value->Producto ?></option>           
              <?php endforeach; ?>
          </select>
          <br>
           <input title="ingrese Observaciones del Producto" type="text" id="Observaciones" placeholder="Observaciones" required>
           <input title="ingrese cantidad de Productos" type="text" id="Cantidad" onkeypress="return justNumbers(event);" placeholder="Cantidad" required>
           <button title="Botón para Agregar campos" class="btn waves-effect green accent-4" type="button" onclick="agregar_campos2()">Agregar
            </button>
          </div>
          <div class="input-field col s8">
          <table id="detalle">
            <thead>
              <tr>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Observacion</th>
                <th>Cantidad</th>
                <th>Opción</th>
              </tr>
            </thead>
              <tbody>
                
              </tbody>
          </table>
         </div>


      </div>

      <div class="row">              
        <button title="Botón para Guardar" class="btn waves-effect waves-light" type="submit" name="submit_addOp">Guardar
        <i class="material-icons right">send</i>
        </button>
      </div>
   </form>     
</div>

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