<div class="container">"
 	<h3 style="padding-left: 100px;" class="white-text center">DIRECTIVOS</h3>
  <div class="right-align">
	 <a title="Botón para registrar a un directivo" href="<?php echo URL; ?>admin/regEmpleado" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
  </div>
  <div style="padding-left: 100px">
    <div class="row">
      <form method="post" action="<?php echo URL; ?>admin/Empleado">
        <div class="input-field col s4">
          <input type="text" name="valor">
          <label >Id usuario o nombre: </label>
        </div>
        <div class="input-field col s4">
          <button title="Botón para hacer una búsqueda" class="btn waves-effect waves-light blue" type="submit" name="btnBuscar">
            <i class="material-icons">search</i>
          </button>
          <a title="Botón para reiniciar búsqueda" href="<?php echo URL; ?>admin/Empleado" class="btn-floating btn-small waves-effect waves-light blue accent-2">
            <i class="material-icons">replay</i>
          </a>
        </div>
      </form>
    </div>
    <div class="input-field col s8"> 
       <table class="responsive-table">
        <thead class="white-text">
          <tr>
              <th>Identificación</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Estado</th>
              <th>Cargo</th>
              <th>Opción</th>
          </tr>
        </thead>

        <tbody class="white-text">
          <?php foreach ($Usuario as $Usuario) { ?>
                <tr>
                    <td><?php if (isset($Usuario->Id_Usuario)) echo htmlspecialchars($Usuario->Id_Usuario, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Usuario->Nombre)) echo htmlspecialchars($Usuario->Nombre, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Usuario->Correo)) echo htmlspecialchars($Usuario->Correo, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Usuario->Estado)) echo htmlspecialchars($Usuario->Estado, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Usuario->Cargo)) echo htmlspecialchars($Usuario->Cargo, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a title="Botón para editar a un directivo" class="btn-floating btn-large waves-effect waves-light blue" id="tooltip" href="<?php echo URL . 'admin/editusuario/' . htmlspecialchars($Usuario->Id_Usuario, ENT_QUOTES, 'UTF-8'); ?>"><i class="material-icons">create</i></a></td>
                    <td><a class="waves-effect waves-light btn  teal" title="Botón para cambiar estado" href="<?php echo URL . 'admin/cambiarEstado/' . htmlspecialchars($Usuario->Id_Usuario, ENT_QUOTES, 'UTF-8').'/'. htmlspecialchars($Usuario->Id_Estado, ENT_QUOTES, 'UTF-8'); ?>">Estado</a></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>

