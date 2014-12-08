<?php 
session_start();
if(!isset($_SESSION['usuario'])){
	include '../controlador/destruir.php';
}else{
	$valor2=base64_decode($_SESSION['usuario']);
	echo "<div id='cerrar' name='cerrar'>".$valor2."</div>";
}

 ?>