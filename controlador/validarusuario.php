<?php 
include '../archivo/conexion.php';
$db=new conexion();
$db->conectar();
session_start();
$username=$db->cleanString($_POST['username']);
$clave=$db->cleanString($_POST['clave']);
$retorno=0;
$consulta=$db->consulta("select * from cliente where RUT='$username' and PASSWORD='$clave'");
if($db->num_rows($consulta)>0){
        while($rows=$db->fetch_array($consulta)){
                    
                    $_SESSION['usuario']=base64_encode($rows[1]);
                    $_SESSION['clave']=base64_encode($rows[7]);
                    $retorno=2;
        }
    }else{
        $retorno=0;
    }
echo $retorno;
 ?>