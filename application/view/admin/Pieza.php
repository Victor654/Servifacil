<div class="container">
  <h3 style="padding-left: 300px">Pieza</h3>
<div class="right-align">
   <a title="Botón para registar una pieza" href="<?php echo URL; ?>admin/regPieza" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">add</i></a>
</div>
<div style="padding-left: 300px">
  <div class="row">
    <form method="post" action="<?php echo URL; ?>admin/Pieza">
    <div class="input-field col s4">
      <input type="text" name="valor">
        <label >Id pieza o nombre:</label>
         </div>
         <div class="input-field col s4">
            <button title="Botón para realizar una búsqueda" class="btn waves-effect waves-light" type="submit" name="btnBuscar">
              <i class="material-icons">search</i>
            </button>
            <a title="Botón para reiniciar una búsqueda" href="<?php echo URL; ?>admin/Pieza" class="btn-floating btn-small waves-effect waves-light blue accent-2">
              <i class="material-icons">replay</i>
            </a>
          </form>
         </div>
       <table class="responsive-table striped">
        <thead>
          <tr>
            <th>Id</th>
              <th>Pieza</th>
              <th>Opción</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($Pieza as $Pieza) { ?>
                <tr>
                  <td><?php if (isset($Pieza->Id_Pieza)) echo htmlspecialchars($Pieza->Id_Pieza, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Pieza->Pieza)) echo htmlspecialchars($Pieza->Pieza, ENT_QUOTES, 'UTF-8'); ?></td>         
                    <td><a title="Botón para editar una pieza" class="btn-floating btn-large waves-effect waves-light blue" href="<?php echo URL . 'admin/editPieza/' . htmlspecialchars($Pieza->Id_Pieza, ENT_QUOTES, 'UTF-8'); ?>"><i class="material-icons">create</i></a></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
  </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js">
  </script>
</div>
</div>
</main>

