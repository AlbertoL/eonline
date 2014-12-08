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
			 		$(location).attr('href','./restringido/indexadministrador.php');
					break;
					case '2':
					$(location).attr('href','./restringido/indexolave.php');
					break;
					case '0':
					alert("ingresa un usuario po awe.");
					break;
					default:
					alert("paso cualquier cosa");
				}


			/*	if(respuesta==1){
						 $(location).attr('href','./restringido/index.php');
				}else{
					$('#datos').html("<h1>USUARIO NO EXISTE!!!</h1>");
				}*/
			}
		});	
		return false;
	});
});