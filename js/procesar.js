$(document).ready(function(){
	$('#frmUsuario').submit(function(x){
		console.log($(this).serialize());
		$.ajax({
			data:$(this).serialize(),
			url:"./controlador/validarusuario.php",
			type:"POST",
			beforeSend:function(){
				$('#datos').html('<img src="./loading.gif"/ width=80> verificando');
			},
			success:function(respuesta){
				switch(respuesta){
					case '1':
			 		$(location).attr('href','./restringido/admin/index.php');
					break;
					case '2':
					$(location).attr('href','./restringido/clientes/index.php');
					break;
					case '0':
					alert("Ingresa un usuario ususario valido");
					break;
					default:
					alert("Error Inesperado");
				}

			}
		});	
		return false;
	});
});