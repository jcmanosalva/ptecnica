

function login(){
	var usuario = $("[name='us']").val();
	var password = $("[name='pw']").val();
		$.ajax({
		type: "POST",
		data: {
			"usuario": usuario,
			"password": password,
			
		},
		url: "acciones.php?accion=logeo",
		success: function (res) {
						if(res=="falso"){
					PNotify.error({
					text: 'Su usuario o contraseña estan incorrectas'
				});
			}else{

				window.location.href = "emr.php";
			}
		
	
		}
	})
}

