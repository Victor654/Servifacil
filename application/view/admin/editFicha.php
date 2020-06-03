<?php 
$producto=$_GET['producto'];
 ?>
<div class="container">
    <h3 class="white-text" style="padding-left: 300px">Editar Ficha Tecnica</h3>
    <div class="container" style="padding-left: 100px">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/addProducto">

    <h3>FICHA TECNICA</h3>
    <div class="row">
      <div class="input-field col s4">
          <select class="browser-default" name="pieza" id="Pieza" required>
              <option value="" id="Pieza" disabled selected>Pieza:</option>
              <?php 
              foreach ($Pieza as $value):?>
                <option id= "Pieza" name="pieza" value="<?= $value->Id_Pieza ?>"><?=$value->Pieza ?></option>
              
               <?php endforeach; ?>
             </select>  
             <select required class="browser-default" name="fase" id="Fase" required>
              <option value="" id="Fase" disabled selected>Fase:</option>
              <?php 
              foreach ($Fase as $value):?>
                <option id= "Fase" name="fase" value="<?= $value->Id_Fase ?>"><?=$value->Fase ?></option>
              
               <?php endforeach; ?>
             </select>  
             <br>          
          <button class="btn waves-effect waves-light blue" type="button" onclick="agregar_campos()">Agregar
            </button>
         </div>
         <div class="input-field col s8">
          <table id="detalle">
            <thead class="white-text">
              <tr>
                <th>Piezas</th>
                <th>Fases</th>
                <th>Opcion</th>
              </tr>
            </thead>
              <tbody class="white-text">
                
              </tbody>
          </table>
         </div>
      </div>

  <div class="row">             
  <button class="btn waves-effect waves-light" type="submit" name="submit_addproducto">Guardar
    <i class="material-icons right">send</i>
  </button>
        </div>
   </form>  
</div>
</div>
</main>
