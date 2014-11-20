<?php
include'../archivo/conexion.php';
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

$consulta=$db->$consulta("insert into usuario(u_name,u_apellido,direccion,u_pass,u_correo,u_rut) values ('$nombre','$apellido','direccion','$pass','$correo','$rut',)");
// header("Location:index.php");
?>