<div class="container">  
  <h3 class="white-text" style="padding-left: 300px">Editar Pieza</h3>

    <div class="container">
    <form class="col s12" method="post" action="<?php echo URL; ?>admin/updatePieza">
      <div class="row">
        <div class="input-field col s6">
          <input title="No se puede modificar" class="white-text" type="text" name="id" readonly value="<?php echo htmlspecialchars($Pieza->Id_Pieza, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name" class="white-text">Identificación: </label>
        </div>
        <div class="input-field col s6">
          <input title="Ingrese Nombre" class="white-text" type="text" name="pieza" value="<?php echo htmlspecialchars($Pieza->Pieza, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name" class="white-text">Nombre: </label>
        </div>
      </div>
              <div class="row">             
  <button title="Botón Guardar" class="btn waves-effect waves-light blue" type="submit" name="submit_updatePieza">Guardar
    <i class="material-icons right">send</i>
  </button>
        </div>
      </form>
    </div>
     <script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>
</div>
</main>