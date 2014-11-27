<?php
include '../archivo/conexion.php';
$db=new conexion();
$db->conectar();
$n=$db->cleanString($_POST['n']);
$a=$db->cleanString($_POST['a']);
// $nombre=$db->$_POST['n'];
// $apellido=$db->$_POST['a'];
// $n= "Alberto";
// $a="hola";
// $direccion=limpiarInput($_POST['d'])
// $pass=$_POST['p'];
// $correo=$_POST['e'];
// $rut=$_POST['r'];
// $plan=$_POST['pl'];

// foreach ($_POST as $key => $value) {
// 	echo $key." ....> ".$value."<br>";
// }

// $consulta = $db->consulta("INSERT INTO usuario(id_usuario, nombre, apellido, direccion, clave, correo, rut) values(NULL,'".$nombre."','".$apellido."','".$direccion."','".$pass."','".$correo."','".$rut."')");

// if ($n == $nombre && $a == $apellido) {
// echo '<h2 style>ES CORRECTO </h2>';
// }
// else{
// 	echo '<h2 style>NO ES CORRECTO </h2>';
// }


?>


<?php
// $n=$db->cleanString($_POST['n']);
// $a=$db->cleanString($_POST['a']);

// $nombre = "Alberto";
// $apellido = "Lopez";

// if ($n == $nombre && $a == $apellido) {
// 	echo '<h2 style>ES CORRECTO </h2>';
// }
// else if($n != $nombre){
// 	echo '<div class="tit">formulario</div>
// 		<div class="cont">Rut: <input style="" id="rut" type="text" /></div>
// 		<div class="cont">clave: <input id="clave" type="password" /></div>
// 		<div class="cont"><input onclick="presion_bot()" type="button" value="validar" /></div>
// 		<div class="clear"></div>';
// }
// else if ($a != $apellido)
// 	echo '<h2 style>POLLOLAIS </h2>';
?>