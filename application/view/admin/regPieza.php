<div class="container">
    <h3 style="padding-left: 300px" class="white-text">Registrar Proceso</h3>
    <div class="container" >
       <form method="post" action="<?php echo URL; ?>admin/addPieza">              
      <div class="row">
        <div class="input-field col s3">
           <input title="Agregar Pieza" type="text" id="Pieza" placeholder="Pieza" required class="white-text">
        </div>
        <div class="input-field col s3">
           <button title="Botón para Agregar campo" class="btn waves-effect  teal" type="button" onclick="agregar_campos4()">Agregar
            </button>
        </div>
          </div>
          <div class="input-field col s8">
          <table  id="detalle">
            <thead class="white-text">
              <tr>
                <th>Proceso</th>
                <th>Opción</th>
              </tr>
            </thead>
              <tbody class="white-text">
                
              </tbody>
          </table>
         </div>
      <div class="row">              
        <button title="Botón Guardar" class="btn waves-effect waves-light blue" type="submit" name="submit_addPieza">Guardar
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