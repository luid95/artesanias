window.addEventListener('load', function(){
    console.log("Archivo  inventario js cargado con exito.!");

    function guardar(datos){

		$.ajax({
	      type:"POST",
	      url:"php/insert_cat.php",
	      data: datos,
	      cache: false,
	      processData: false,
	      contentType: false
	    }).done(function(resp){


	    	if(resp == 'exito'){
	    		$('#exito').show();

				$('#frmajaxcat')[0].reset();
				
				alert("Agregado con exito!");
	    	}else{
	    		obtener_cat();
				$('#frmajaxcat')[0].reset();
	    	}

	    });
	    return false;

	}

	//Obtener datos

	function obtener_cat(){
		$.ajax({
			url:"php/mostrar_cat.php",
			method: "POST",
			success: function(data){
				$("#result").html(data)
			}
		})
	}

	obtener_cat();

	//agregando datos
	function actualizar(id, texto, columna){
		$.ajax({
			url:"php/actu_cat.php",
			method: "POST",
			data:{id: id, texto: texto, columna: columna},
			success: function(data){
				obtener_cat();
				
			}
		})
	}

	//actualizando datos
	$(document).on("blur", "#nombre_cat", function(){
		var id = $(this).data("id_cat");
		var nombre = $(this).text();

		actualizar(id, nombre, "category");

	})

	$(document).on("blur", "#dates", function(){
		var id = $(this).data("id_dates");
		var nombre = $(this).text();

		actualizar(id, nombre, "dates");

	})

	$(document).on("blur", "#descp", function(){
		var id = $(this).data("id_descp");
		var nombre = $(this).text();


		actualizar(id, nombre, "descp");

	})

	//eliminar datos
	function eliminarc(id){
		$.ajax({
			url:"php/eliminarc.php",
			method: "POST",
			data:{id: id},
			success: function(data){
				obtener_cat();
			}
		})
	}

	$(document).on("click", "#eliminarc", function(){
		var id = $(this).data("id_eliminarc");

		eliminarc(id);

	})

    //------------------------------------------

    //formulario frmajax
    var frmajax = document.querySelector("#frmajaxcat");

    frmajax.addEventListener('submit', function(){

        var datos = new FormData($('#frmajaxcat')[0]);

        guardar(datos);//llamado de funcion

    });//fin frmajax

});