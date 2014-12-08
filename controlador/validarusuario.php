<?php 
include '../archivo/conexion.php';
$db=new conexion();
$db->conectar();
session_start();
$username=$db->cleanString($_POST['username']);
$clave=$db->cleanString($_POST['clave']);
$retorno=0;
$consulta=$db->consulta("select * from tb_usuario where u_rut='$username' and u_password='$clave'");
if($db->num_rows($consulta)>0){
        while($rows=$db->fetch_array($consulta)){
            switch ($rows[8]) {
                case 1:
                    $_SESSION['usuario']=base64_encode($rows[1]);
                    $_SESSION['clave']=base64_encode($rows[7]);
                    $retorno=1;
                    break;
                case 2:
                    $_SESSION['usuario']=base64_encode($rows[1]);
                    $_SESSION['clave']=base64_encode($rows[7]);
                    $retorno=2;
                    break;
                default:
                    $retorno=9;
                    break;
            }

        }
    }else{
        $retorno=0;
    }
echo $retorno;
 ?>