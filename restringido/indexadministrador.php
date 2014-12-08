<?php 
include '../controlador/sesion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cerrar').click(function(){
			$(location).attr('href','../controlador/destruir.php');
		});
	});
	</script>
</head>
<body>
	<h1>index Admnistrador</h1>
	<a href="./otro.php">vamos</a>
</body>
</html>