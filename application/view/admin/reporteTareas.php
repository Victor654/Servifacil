<br><br>
<div class="container">
  <div class="row" style="padding-left: 250px">
    <div class="input-field col s12 center-align">
    <br><br>
    <h1 class="white-text">Buscar por Operario</h1>
    <div class="input-field col s12">
    <form target="_blank" method="GET" action="<?php echo URL; ?>admin/reporteGeneralTarea">
       <select title="Seleccione un operario" class="browser-default" name="operario" required>
              <option value="" id="Operario" disabled selected>Operario:</option>
              <?php 
              foreach ($Operario as $value):?>
                <option value="<?= $value->Id_Operario ?>"><?=$value->Nombre ?></option>
              
               <?php endforeach; ?>
            </select> 
            <br>  
             <button  title="Botón para generar pdf del producto" class="btn waves-effect waves-light btn-small blue" type="submit" name="btnBuscar">
                    Buscar
             </button>
             <br><br><br><br><br>       
    </div>
  </div>
</main>