function agregar_campos(){

	let Id_Fase = $("#Fase").val();
	let Text_Fase = $("#Fase option:selected").text();
	let Id_Pieza = $("#Pieza").val();
	let Text_Pieza = $("#Pieza option:selected").text();
		if (Id_Fase>=1 && Id_Pieza>=1) {
  	$("#detalle").append(
		"<tr id ='tr"+Id_Pieza+"'> <input type='hidden' name='Pieza_id[]' value='"+Id_Pieza+"'><input type='hidden' name='Fase_Id[]' value='"+Id_Fase+"'><td>"+Text_Pieza+"</td><td>"+Text_Fase+"</td><td><button class='btn waves-effect waves-light red' type='button' onclick='$("+'"'+"#tr"+Id_Pieza+""+'"'+").remove()'><i class='material-icons'>close</i></button></td></tr>"
		);
  }else{
		$(document).ready(function(){
   		M.toast({html: 'Debe Seleccionar todos los campos', classes: 'rounded'})
		});
		}	
}

 function agregar_campos2(){

	let Id_Cliente = $("#Cliente").val();
	let Text_Cliente = $("#Cliente option:selected").text();
	let Id_Producto = $("#Producto").val();
	let Text_Producto = $("#Producto option:selected").text();
	let Observaciones = $("#Observaciones").val();
	let Cantidad = $("#Cantidad").val();

	if (Id_Cliente>=1 &&  Id_Producto>=1 && Observaciones!="" && Cantidad!="") {
  	$("#detalle").append(
		"<tr id ='tr"+Id_Cliente+"'> <input type='hidden' name='Cliente_Id[]' value='"+Id_Cliente+"'><input type='hidden' name='Producto_Id[]' value='"+Id_Producto+"'><input type='hidden' name='Observaciones[]' value='"+Observaciones+"'><input type='hidden' name='Cantidad[]' value='"+Cantidad+"'><td>"+Text_Cliente+"</td><td>"+Text_Producto+"</td><td>"+Observaciones+"</td><td>"+Cantidad+"</td><td><button class='btn waves-effect waves-light red' type='button' onclick='$("+'"'+"#tr"+Id_Cliente+""+'"'+").remove()'><i class='material-icons'>close</i></button></td></tr>"
		);
  }else{
		$(document).ready(function(){
   		M.toast({html: 'Debe Seleccionar todos los campos', classes: 'rounded'})
		});
		}	
}

 function agregar_campos3(){
  let Id_Orden_Produccion = $("#Op").val();
  let Text_Orden_Produccion = $("#Op option:selected").text();
  let Id_Operario = $("#Operario").val();
  let Text_Operario = $("#Operario option:selected").text();
  let Id_Producto = $("#producto1").val();
  let Text_Producto = $("#producto1 option:selected").text();
  let Tarea = $("#Tarea").val();
  let Fecha = $("#Fecha").val();
  if (Id_Orden_Produccion>=1 && Id_Operario>=1 && Id_Producto>=1 && Tarea!="" && Fecha!="") {
  	$("#detalle3").append(
    "<tr id ='tr"+Id_Operario+"'><input type='hidden' name='Orden_Produccion_Id[]' value='"+Id_Orden_Produccion+"'><input type='hidden' name='Operario_Id[]' value='"+Id_Operario+"'><input type='hidden' name='Producto_Id[]' value='"+Id_Producto+"'><input type='hidden' name='Tarea[]' value='"+Tarea+"'><input type='hidden' name='Fecha[]' value='"+Fecha+"'><td>"+Text_Orden_Produccion+"</td><td>"+Text_Operario+"</td><td>"+Text_Producto+"</td><td>"+Tarea+"</td><td>"+Fecha+"</td><td><button class='btn waves-effect waves-light red' type='button' onclick='$("+'"'+"#tr"+Id_Operario+""+'"'+").remove()'><i class='material-icons'>close</i></button></td></tr>"
    );
  }else{
		$(document).ready(function(){
   		M.toast({html: 'Debe Seleccionar todos los campos', classes: 'rounded'})
		});
		}
  
}
function agregar_campos4(){
	let Pieza = $("#Pieza").val();
	 if (Pieza!="") {
  		$("#detalle").append(
		"<tr id ='tr"+Pieza+"'> <input type='hidden' name='Pieza[]' value='"+Pieza+"'><td>"+Pieza+"</td><td><button class='btn waves-effect waves-light red' type='button' onclick='$("+'"'+"#tr"+Pieza+""+'"'+").remove()'><i class='material-icons'>close</i></button></td></tr>"
		);
  }else{
		$(document).ready(function(){
   		M.toast({html: 'Debe Seleccionar todos los campos', classes: 'rounded'})
		});
		}
	
  
 

	
}
function agregar_campos5(){
	let tipo_producto = $("#tipo_producto").val();
		if (tipo_producto!="") {
  	$("#detalle").append(
		"<tr id ='tr"+tipo_producto+"'> <input type='hidden' name='tipo_producto[]' value='"+tipo_producto+"'><td>"+tipo_producto+"</td><td><button class='btn waves-effect waves-light red' type='button' onclick='$("+'"'+"#tr"+tipo_producto+""+'"'+").remove()'><i class='material-icons'>close</i></button></td></tr>"
		);
  }else{
		$(document).ready(function(){
   		M.toast({html: 'Debe Seleccionar todos los campos', classes: 'rounded'})
		});
		}		
}

function mostrarProductos(id){
	$.ajax({
		type: 'get',
		dataType: 'json',
		url: uri+'admin/listarFicha/'+id
	}).done((respuesta)=>{
		if(respuesta.length>0){
			respuesta.forEach((e,i)=>{
				$("#contenedor_pieza").append(
					`<tr><td>`+e.Pieza+`</td><td>`+e.Fase+`</td></tr>`
					);
			})
			$(document).ready(function(){
    		$('#Model_Pieza').modal({
    			dismissible: false,
    		});
    		$('#Model_Pieza').modal('open');
 		 	});
		}else{
		$(document).ready(function(){
   		M.toast({html: 'No tiene ficha Técnica', classes: 'rounded'})
		});
		}
	})

}
function mostrarOp(id){
	$.ajax({
		type: 'get',
		dataType: 'json',
		url: uri+'admin/listarOp/'+id
	}).done((respuesta)=>{
		if(respuesta.length>0){
			respuesta.forEach((e,i)=>{
				$("#contenedor_Op").append(
					`<tr><td>`+e.Id_Orden_Produccion+`</td><td>`+e.Nombre+`</td><td>`+e.Producto+`</td><td>`+e.observaciones+`</td><td>`+e.Cantidad+`</td><td>`+e.Fecha_Pedido+`</td><td>`+e.Estado+`</td></tr>`
					);
			})
			$(document).ready(function(){
    		$('#Model_Op').modal({
    			dismissible: false,
    		});
    		$('#Model_Op').modal('open');
 		 	});
		}else{
		$(document).ready(function(){
   		M.toast({html: 'No tiene ficha Técnica', classes: 'rounded'})
		});
		}
	})
}

function mostrarTarea(id){
	$.ajax({
		type: 'get',
		dataType: 'json',
		url: uri+'operario/listarTarea/'+id
	}).done((respuesta)=>{
		if(respuesta.length>0){
			respuesta.forEach((e,i)=>{
				$("#contenedor_tarea").append(
					`
					<tr>
					<input type='hidden' name='Tarea_Id[]' value=`+e.Id_Tarea+`>
					<input type='hidden' name='estadoActual[]' value=`+e.Estado_Tarea+`>
					<td>`+e.Id_Orden_Produccion+`</td>
					<td>`+e.Producto+`</td>
					<td>`+e.Tarea+`</td>
					<td>`+e.Fecha_Tarea+`</td>
					<td>`+e.Estado+`</td>
					<td> <input type="checkbox" id=`+i+` onclick='llenarText(`+e.Id_Tarea+`)' />
					<label for=`+i+`></label>
					<input type='hidden' name='estado[]' id='estado`+e.Id_Tarea+`'>
					</td></tr>
					`					
					);
				i=i++;
			})
			$(document).ready(function(){
    		$('#Model_Tarea').modal({
    			dismissible: false,
    		});
    		$('#Model_Tarea').modal('open');
 		 	});
		}else{
			$(document).ready(function(){
   			M.toast({html: 'No tiene tareas pendientes', classes: 'rounded'})
		});
		}
	})

}
function mostrarTarea2(id){
	$.ajax({
		type: 'get',
		dataType: 'json',
		url: uri+'admin/listarTarea/'+id
	}).done((respuesta)=>{
		if(respuesta.length>0){
			respuesta.forEach((e,i)=>{
				$("#contenedor_Tareas").append(
					`
					<tr>
					<input type='hidden' name='Tarea_Id[]' value=`+e.Id_Tarea+`>
					<input type='hidden' name='estadoActual[]' value=`+e.Estado_Tarea+`>
					<td>`+e.Id_Tarea+`</td>
					<td>`+e.Id_Orden_Produccion+`</td>
					<td>`+e.Nombre+`</td>
					<td>`+e.Producto+`</td>
					<td>`+e.Tarea+`</td>
					<td>`+e.Fecha_Tarea+`</td>
					<td>`+e.Estado+`</td>
					<td> <input type="checkbox" id=`+i+` onclick='llenarText(`+e.Id_Tarea+`)' />
					<label for=`+i+`></label>
					<input type='hidden' name='estado[]' id='estado`+e.Id_Tarea+`'>
					</td></tr>
					`					
					);
				i=i++;
			})
						$(document).ready(function(){
    		$('#Model_Tareas').modal({
    			dismissible: false,
    		});
    		$('#Model_Tareas').modal('open');
 		 	});
		}else{
			$(document).ready(function(){
   			M.toast({html: 'No tiene tareas pendientes', classes: 'rounded'})
		});
		}
	})

}
function llenarText(Id_Tarea){
	var estado= "estado"+Id_Tarea;
	document.getElementById(estado).value=1;

}

function agregar_producto(){
	document.getElementById('producto1').style.display='';
	let op = $("#Op option:selected").text();
	$.ajax({
		type: 'get',
		dataType: 'json',
		url: uri+'admin/listarProducto/'+op
	}).done((respuesta)=>{
		if(respuesta.length>0){
			respuesta.forEach((e,i)=>{			
					$("#producto1").append(								 
					 `<option value=`+e.Id_Producto+`>`+e.Producto+`</option>
					 </select>`
					);
			})
		}
	})

}

$(document).ready(function(){
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
today = yyyy + '/' + mm + '/' + dd;
$('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      firstDay: 1,
      i18n: { 
              months: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Deciembre'],
              monthsShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sept','Oct','Nov','Dic'],
              weekdays: ['Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo'],
              weekdaysShort: ['Lun','Mar','Mier','Jue','Vie','Sab','Dom'],
              weekdaysAbbrev: ['D','L','M','X','J','V','S'],
            },
      minDate: new Date(today)
    })
  });

    $( document ).ready(function(){
  $('.dropdown-trigger').dropdown({
  })
});

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });

  $(document).ready(function(){
    $('select').formSelect();
  });









