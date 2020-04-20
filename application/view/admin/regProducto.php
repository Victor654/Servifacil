<div class="container">
    <h3 class="blue-text" style="padding-left: 300px">Registrar Producto</h3>
    <div class="container" style="padding-left: 100px">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/addProducto">
      <input type='hidden' name='id' value="<?php foreach ($numero as $numero) {
         if (isset($numero->numero)) echo htmlspecialchars($numero->numero, ENT_QUOTES, 'UTF-8'); }?>">
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingresar referencia del producto" type="text" name="referencia" required>
          <label for="first_name">Referencia</label>
        </div>
        <div class="input-field col s6">
          <input title="Ingresar Nombre del producto" type="text" name="producto" required>
          <label for="first_name">Nombre</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingresar descripción del producto" type="text"  name="descripcion" required>
          <label for="textarea1">Descripción</label>
        </div>
      </div>
      <div class="row">
           <div class="input-field col s6">
            <select title="Seleccione tipo del producto" required name="tipo_producto" required>
              <option value="" disabled selected>Tipo de producto:</option>
              <?php 
              foreach ($TipoProducto as $value):?>
                <option value="<?= $value->Id_Tipo_Producto ?>"><?=$value->Tipo_Producto ?></option>
              
               <?php endforeach; ?>
             </select>
            </div>
</div>

    <h3>FICHA TÉCNICA</h3>
    <div class="row">
      <div class="input-field col s4">
          <select title="Seleccione pieza" name="pieza" id="Pieza" required>
              <option value="" id="Pieza" disabled selected>Pieza:</option>
              <?php 
              foreach ($Pieza as $value):?>
                <option id= "Pieza" name="pieza" value="<?= $value->Id_Pieza ?>"><?=$value->Pieza ?></option>
              
               <?php endforeach; ?>
             </select>  
             <select title="Seleccione fase" required name="fase" id="Fase" required>
              <option value="" id="Fase" disabled selected>Fase:</option>
              <?php 
              foreach ($Fase as $value):?>
                <option id= "Fase" name="fase" value="<?= $value->Id_Fase ?>"><?=$value->Fase ?></option>
              
               <?php endforeach; ?>
             </select>  
             <br>          
          <button title="Botón agregar campos" class="btn waves-effect waves-light yellow" type="button" onclick="agregar_campos()">Agregar
            </button>
         </div>
         <div class="input-field col s8">
          <table id="detalle">
            <thead>
              <tr>
                <th>Piezas</th>
                <th>Fases</th>
                <th>Opcion</th>
              </tr>
            </thead>
              <tbody>
                
              </tbody>
          </table>
         </div>
      </div>

  <div class="row">             
  <button title="Botón Guardar" class="btn waves-effect waves-light" type="submit" name="submit_addproducto">Guardar
    <i class="material-icons right">send</i>
  </button>
        </div>
   </form>  
</div>
</div>
</main>
