<div class="container">    
  <h3 class="white-text" style="padding-left: 300px">Asignar Tareas</h3>
    <div class="container" style="padding-left: 100px">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/addtarea" autocomplete="off">

    <h3 class="white-text">ASIGNACIÓN</h3>
    <div class="row">
      <div class="input-field col s4">
                  <select title="Seleccione un operario" name="operario" id="Operario" class="browser-default" required>
              <option value="" id="Operario" disabled selected>Operario:</option>
              <?php 
              foreach ($Operario as $value):?>
                <option  value="<?= $value->Id_Operario ?>"><?=$value->Nombre ?></option>
              
               <?php endforeach; ?>
             </select>  
         <select title="Seleccione una orden de producción" class="browser-default" required name="Op" onchange="agregar_producto()" onclick="$('#producto1').empty();" id="Op" required>
              <option value="" disabled selected>Op:</option>
              <?php 
              foreach ($Op as $value):?>
                <option value="<?= $value->Id_Orden_Produccion ?>"><?=$value->Id_Orden_Produccion  ?></option>
              
               <?php endforeach; ?>
             </select>
             <select title="Seleccione Producto" id="producto1"  class="browser-default" required name="producto" style="display: none;">
                <option value="" disabled selected>Producto:</option>
             </select>
                
          <input class="white-text" title="Ingrese tarea a realizar" placeholder="Tarea"   type="text" id="Tarea" name="tarea" required>
          <input title="Ingrese fecha de realización" name="Fecha" id="Fecha" type="text" placeholder="Fecha De Tarea" class="datepicker">
          
        
             <br>          
          <button title="Botón para agregar elementos a la lista" class="btn waves-effect blue" type="button"  onclick="agregar_campos3(),$('#producto1').style.display='none';">Agregar
            </button>
         </div>
         <div class="input-field col s8">
          <table id="detalle3" required>
            <thead class="white-text">
              <tr>
                <th>Orden de producción</th>
                <th>Operario</th>
                <th>Producto</th>
                <th>Tarea</th>
                <th>Fecha</th>
                <th>Opción</th>
              </tr>
            </thead>
              <tbody class="white-text">
                
              </tbody>
          </table>
         </div>
      </div>
      <br><br>
  <div class="row">             
  <button title="Guardar Tareas" class="btn waves-effect waves-light blue" type="submit" name="submit_addtarea">Guardar
    <i class="material-icons right">send</i>
  </button>
        </div>
     </form>  
  </div>
</div>
</main>