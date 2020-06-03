<div class="container">
  <h3 style="padding-left: 100px" class="white-text center">CLIENTES</h3>
  <div class="right-align">
	  <a title="Botón para agregar un cliente" href="<?php echo URL; ?>admin/regCliente" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
  </div>
  <div style="padding-left: 100px">
    <div class="row">
      <form method="post" action="<?php echo URL; ?>admin/Cliente">
        <div class="input-field col s4">
          <input type="text" name="valor">
          <label >Id cliente o nombre: </label>
        </div>
        <div class="input-field col s4">
          <button title="Botón para hacer una búsqueda" class="btn waves-effect waves-light blue" type="submit" name="btnBuscar">
            <i class="material-icons">search</i>
          </button>
          <a title="Botón para reiniciar búsqueda" href="<?php echo URL; ?>admin/Cliente" class="btn-floating btn-small waves-effect waves-light blue accent-2 blue">
            <i class="material-icons">replay</i>
          </a>         
        </div>
      </form>
    </div>
    <div class="input-field col s8">
      <left> 
      <table class="responsive-table">
        <thead class="white-text">
          <tr>
            <th>Tipo Identificación</th>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Nombre De Contacto</th>
            <th>Número de Contacto</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>opción</th>
          </tr>
        </thead>
        <tbody class="white-text">
          <?php foreach ($Cliente as $Cliente) { ?>
            <tr>
              <td><?php if (isset($Cliente->Tipo_Id)) echo htmlspecialchars($Cliente->Tipo_Id, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Cliente->Id_Cliente)) echo htmlspecialchars($Cliente->Id_Cliente, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Cliente->Nombre)) echo htmlspecialchars($Cliente->Nombre, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Cliente->Nombre)) echo htmlspecialchars($Cliente->Nombre_contacto, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Cliente->Nombre)) echo htmlspecialchars($Cliente->Numero_contacto, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Cliente->Direccion)) echo htmlspecialchars($Cliente->Direccion, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Cliente->Tel)) echo htmlspecialchars($Cliente->Tel, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php if (isset($Cliente->Correo)) echo htmlspecialchars($Cliente->Correo, ENT_QUOTES, 'UTF-8'); ?></td>
              <td><a title="Botón para editar a un cliente" class="btn-floating btn-large waves-effect waves-light blue tootltiped" data-position="top" data-tooltip="I am a tooltip" href="<?php echo URL . 'admin/editcliente/' . htmlspecialchars($Cliente->Id_Cliente, ENT_QUOTES, 'UTF-8'); ?>"><i class="material-icons">create</i></a></td>
            </tr>
          <?php } ?>  
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>

<script>     
      $(document).ready(function(){
          $('.scrollspy').scrollSpy();      
          
      });            
</script>
