$(document).ready(function () {

	traer_usuarios();
	traer_nom_us();

$("[name='usuario']").blur(function(){

	var usuario = $("[name='usuario']").val();
		soloLetras(usuario);
    if(usuario != ""){
    	$.ajax({
		type: "POST",
		data: {
			"usuario": usuario,
		
		},
		url: "acciones.php?accion=vusuario",
		success: function (res) {
			cant=JSON.parse(res);
			console.log()

			if (cant[0].cant > 0) {
			PNotify.error({
					text: 'Este usuario ya se encuentra registrado'
				});				
				
				$("[name='usuario']").addClass("cajaroja");	
			} else {
				$("[name='usuario']").removeClass("cajaroja");	
				
			}
		}
	})

    }
  });
$(".soloLetras").keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 45) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });
})



function out(){
	$.ajax({
		type: "POST",
	
		url: "acciones.php?accion=salir",
		success: function (res) {
			
		}
	})

	}
	
	function traer_nom_us(){
		$.ajax({
		type: "GET",
	
		url: "acciones.php?accion=traernus",
		success: function (res) {
			
			var text = res
			
			if (res = true) {



$("[name='bus']").text(text);
				
				
			
			} else {
				
			}
		}
	})
	}

    function traer_usuarios(){
           
          $('#datatable_usuarios').DataTable().destroy();   
    
      $.ajax({
        dataType: 'json',
        type:'GET',
        url: "acciones.php?accion=traer_usuarios",
        async: true,
     
      }).done(function(data){
        if (data === false) {
          $('#datatable_usuarios').DataTable({
            responsive: true
          });
        }
        else {
          var table = $("#datatable_usuarios").DataTable({
            data: data,
            responsive: true,
            iDisplayLength: 10,
            columns: [                          

              { data: "usuario"},
            
                { data: "nombre"},
          
                 
                  { data: "apellido_paterno"},
                  { data: "apellido_materno"},


        
                     {data:"id",
                    "render": function (data, type, row, meta) {
                    var cod = data;
                   
          return "<button class='btn btn-warning btn-sm'  onclick='editar_usuario(" +cod+ ")' ><i class='fas fa-edit'></i></button> <button class='btn btn-danger btn-sm' onclick='eliminar_usuarios(" + cod + ")' ><i class='fas fa-trash'></i></button>"
          }
        },


              

              ]
            });   
        }
        
     
      })
      .fail(function( jqXHR, textStatus, errorThrown ) {
        abre_dialogo_fallo("Problema al obtener lista de usuarios: " + textStatus);
      });     
    }



function nuevo_usuario() {

	var usuario = $("[name='usuario']").val();
	var password = $("[name='password']").val();
	var nombre = $("[name='nombre']").val();
	var apaterno = $("[name='apaterno']").val();
	var amaterno = $("[name='amaterno']").val();

	var cont = 0;
	$("[name='usuario']").removeClass("cajaroja");	
	$("[name='password']").removeClass("cajaroja");
	$("[name='nombre']").removeClass("cajaroja");
		$("[name='apaterno']").removeClass("cajaroja");
			$("[name='amaterno']").removeClass("cajaroja");

	
	if(usuario==""){
		$("[name='usuario']").addClass("cajaroja");		
		PNotify.error({
					text: 'Debe llenar el campo Usuario'
				});
	}else if(password==""){
		$("[name='password']").addClass("cajaroja");		
			PNotify.error({
					text: 'Debe llenar el campo password'
				});
			
	}else if(nombre==""){
		$("[name='nombre']").addClass("cajaroja");		
			PNotify.error({
					text: 'Debe llenar el campo nombre'
				});
	}else if(apaterno==""){
		$("[name='apaterno']").addClass("cajaroja");		
			PNotify.error({
					text: 'Debe llenar el campo apaterno'
				});
	}else if(amaterno==""){
		$("[name='amaterno']").addClass("cajaroja");		
			PNotify.error({
					text: 'Debe llenar el campo amaterno'
				});
	}else{

$.ajax({
		type: "POST",
		data: {
			"usuario": usuario,
			"password": password,
			"nombre": nombre,
			"apaterno": apaterno,
			"amaterno": amaterno
		},
		url: "acciones.php?accion=nusuario",
		success: function (res) {
			console.log(res)
			if (res = true) {
				$("#nusuario").modal("hide");
				PNotify.success({
					text: 'Usuario Creado Correctamente'
				});
				traer_usuarios();
			} else {
				PNotify.error({
					text: 'Error al crear el usuario'
				});
			}
		}
	})

	}


	
}

function actualizar_usuario() {
	var usuario = $("[name='edusuario']").val();
	var password = $("[name='edpassword']").val();
	var nombre = $("[name='ednombre']").val();
	var apaterno = $("[name='edapaterno']").val();
	var amaterno = $("[name='edamaterno']").val();
	var idu = $("[name='idu']").val();
	
	$.ajax({
		type: "POST",
		data: {
			"usuario": usuario,
			"password": password,
			"nombre": nombre,
			"apaterno": apaterno,
			"amaterno": amaterno,
			"idu": idu
			
		},
		url: "acciones.php?accion=actualizar_usuario",
		success: function (res) {
			traer_usuarios();
			if (res = true) {
				$("#eusuario").modal("hide");
				PNotify.success({
					text: 'Usuario Editado Correctamente'
				});

				$('.tonew').val("");
			} else {
				PNotify.error({
					text: 'No se pudo editar al usuario'
				});
			}
		}
	})
}

function eliminar_usuarios(id) {
	swal({
			title: "¿Estas seguro de eliminar este usuario?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {

			if (willDelete) {
				$.ajax({
						data: {
							"Id": id
						},
						type: "POST",
						dataType: "json",
						url: "acciones.php?accion=eliminar_usuarios",
					}).done(function (data, textStatus, jqXHR) {
						traer_usuarios();
						if (data == true) {
							PNotify.success({
								text: 'Usuario Eliminado Correctamente'
							});
						} else {
							PNotify.error({
								text: 'No se pudo eliminar al usuario'
							});
						}
					})
					.fail(function (jqXHR, textStatus, errorThrown) {
					});
			} else {

			}
		});


}

function Abrirmodalnusuario() {
	$("#nusuario").modal("show");
		$('.tonew').val("");
		$('.tonew').removeClass("cajaroja");	
		$('.tonew').removeClass("cajaverde");	

}

function editar_usuario(id) {
	$("#eusuario").modal("show");
	$.ajax({
		type: "POST",
		data: "Id=" + id,
		url: "acciones.php?accion=editar_usuario",
		success: function (res) {
			var objeto = JSON.parse(res);
			$("[name='idu']").val(id);
			$("[name='edusuario']").val(objeto[0].usuario);
			$("[name='edpassword']").val(objeto[0].password);
			$("[name='ednombre']").val(objeto[0].nombre);
			$("[name='edapaterno']").val(objeto[0].apellido_paterno);
			$("[name='edamaterno']").val(objeto[0].apellido_materno);
		}
	})

}