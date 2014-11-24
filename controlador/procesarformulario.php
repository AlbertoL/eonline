<?php
include '../archivo/conexion.php';
$db=new conexion();
$db->conectar();
$nombre=$db->cleanString($_POST['nombre']);
$apellido=$db->cleanString($_POST['apellido']);
$direccion=$_POST['direccion'];
$pass=$_POST['pass'];
$correo=$_POST['email'];
$rut=$_POST['rut'];

foreach ($_POST as $key => $value) {
	echo $key." ....> ".$value."<br>";
}

$consulta = $db->consulta("INSERT INTO usuario(id_usuario, nombre, apellido, direccion, clave, correo, rut) values(NULL,'".$nombre."','".$apellido."','".$direccion."','".$pass."','".$correo."','".$rut."')");

?>
