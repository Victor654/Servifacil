<div class="container">
  <h3 style="padding-left: 100px">OPERARIO</h3>
<div class="right-align">
	 <a title="Botón para registar un operario" href="<?php echo URL; ?>admin/regOperario" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">add</i></a>

</div>
<div style="padding-left: 100px">
  <div class="row">
    <form method="post" action="<?php echo URL; ?>admin/Operario">
    <div class="input-field col s4">
      <input type="text" name="valor">
        <label >Id operario o nombre: </label>
         </div>
         <div class="input-field col s4">
            <button title="Botón para realizar una búsqueda"class="btn waves-effect waves-light" type="submit" name="btnBuscar">
              <i class="material-icons">search</i>
            </button>
            <a title="Botón para reiniciar búsqueda" href="<?php echo URL; ?>admin/Operario" class="btn-floating btn-small waves-effect waves-light blue accent-2">
              <i class="material-icons">replay</i>
            </a>
          </form>
         </div>
       <table class="responsive-table striped">
        <thead>
          <tr>
              <th>Identificación</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Estado</th>
              <th>Cargo</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($Operario as $Operario) { ?>
                <tr>
                    <td><?php if (isset($Operario->Id_Operario)) echo htmlspecialchars($Operario->Id_Operario, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Operario->Nombre)) echo htmlspecialchars($Operario->Nombre, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Operario->Correo)) echo htmlspecialchars($Operario->Correo, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Operario->Estado)) echo htmlspecialchars($Operario->Estado, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><h7>Operario</h7></td>
                    <td><a title="Botón para editar un operario" class="btn-floating btn-large waves-effect waves-light blue" href="<?php echo URL . 'admin/editoperario/' . htmlspecialchars($Operario->Id_Operario, ENT_QUOTES, 'UTF-8'); ?>"><i class="material-icons">create</i></a></td>
                    <td><a title="Botón para cambiar estado" class="waves-effect waves-light btn lime accent-4" href="<?php echo URL . 'admin/cambiarEstado2/' . htmlspecialchars($Operario->Id_Operario, ENT_QUOTES, 'UTF-8').'/'. htmlspecialchars($Operario->Id_Estado, ENT_QUOTES, 'UTF-8'); ?>">Estado</a></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
  </div>
</div>
</div>
</main>
