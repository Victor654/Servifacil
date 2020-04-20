<div class="container">
    <h3 style="padding-left: 300px">Editar OP</h3>
    <div class="container">
       <form class="col s12" method="post" action="<?php echo URL; ?>admin/updateOp">
      <div class="row">
        <div class="input-field col s3">
          <input title="No se puede modificar" type="text" readonly  name="id" onkeypress="return justNumbers(event);" value="<?php echo htmlspecialchars($Op->Id_Orden_Produccion, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name" >Número Orden</label>
        </div>
        <div class="input-field col s3">
          <select title="Seleccione estado" name="estado"  class="browser-default" required>
            <option value="" disabled selected>Estado: </option>
              <?php 
                foreach ($EstadoOp as $value):?>
                <option value="<?= $value->Id_Estado_Op ?>"><?=$value->Estado ?></option>           
              <?php endforeach; ?>
          </select>
         </div>
         <div class="input-field col s4">
          <input title="seleccione fecha" name="fecha" type="text" placeholder="Fecha De Pedido" value="<?php echo htmlspecialchars($Op->Fecha_Pedido, ENT_QUOTES, 'UTF-8'); ?>" class="datepicker">
        </div>
      </div>

      <div class="row">              
        <button title="Botón Guardar" class="btn waves-effect waves-light" type="submit" name="submit_updateOp">Guardar
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