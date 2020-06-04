<div class="container" style="padding-left: 100px">
<h3  class="white-text">Bienvenido, <?php if (isset($Usuario->Nombre)) echo htmlspecialchars($Usuario->Nombre, ENT_QUOTES, 'UTF-8'); ?></h3>
<div class="row">
	<div class="input-field col"></div>
  <div class="input-field col s6"><div class="blue-grey lighten-4" id="calendario"></div></div>
  <div class="input-field col">
  <div class="input-field col">
  <h3  class="white-text">Guía de colores</h3>
      <ul class="collection">
      <li class="collection-item blue lighten-1">Programadas</li>
      <li class="collection-item yellow lighten-1">En Proceso</li>
      <li class="collection-item green lighten-1">Terminadas</li>
      <li class="collection-item red lighten-1">Canceladas</li>
    </ul>
</div>
</div>
  <script>
  	$(function() {
  $('#calendario').fullCalendar({
  	header:{
  		left:'today, prev, next,',
  		center:'title',
  		right: 'month,basicWeek,basicDay'
  	},
  	events: uri+'admin/Calendario/',
    aspectRatio: 3,
    handleWindowResize: true,
    height: 550,
  })
  calendar.render();
})
  </script>
  </div>
</main>
