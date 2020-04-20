    <div class="container" >
      <h3 class="blue-text">Bienvenido, <?php if (isset($Usuario->Nombre)) echo htmlspecialchars($Usuario->Nombre, ENT_QUOTES, 'UTF-8'); ?></h3>
      <div class="row">
         <div class="input-field col s6">
          <a  class="btn modal-trigger indigo" onclick="mostrarTarea(<?php echo $_SESSION['user3']; ?>)">Mostrar Tareas</a>
        </div>
      </div>
      <div class="row">
        
      </div>
      <div class="row">
    <div class="input-field col"></div>
    <div class="input-field col s7"><div id="calendario"></div></div>
    <div class="input-field col"></div>
  </div>
</div>

  <script>
    $(function() {
  $('#calendario').fullCalendar({
    header:{
      left:'today, prev, next,',
      center:'title',
      right:''
    },
    events: uri+'operario/Calendario2/',
    aspectRatio: 2,
    handleWindowResize: true,
    height: 700,
    defaultView: 'listWeek'
  })
  calendar.render();
})
  </script>

<div id="Model_Tarea" class="modal modal-fixed-footer">
    <div class="modal-content" >
      <h4>Tareas Pendientes</h4>
      <form method="post" action="<?php echo URL; ?>operario/cambiarEstadoTarea">
      <table>
            <thead>
              <tr>
                <th>Op</th>
                <th>Producto</th>
                <th>Tarea</th>
                <th>Fecha</th>
                <th>Estado</th>

              </tr>
            </thead>
              <tbody id="contenedor_tarea">
                
              </tbody>
          </table>
          
    </div>  
    <div class="modal-footer">
    <a onclick="$('#contenedor_tarea').empty();" class="modal-action modal-close waves-effect btn-flat green accent-4">Salir</a>
    <button class="btn waves-effect waves-light" type="submit" name="submit_cambiarEstado">Guardar
    <i class="material-icons right">send</i>
    </button>
    </div>
    </form>
  </div>
</div>


      
