<?php 
session_start();



include_once ("clases/AccesoDatos.php");
include_once ("clases/cd.php");
 
      
if(isset($_SESSION['idParaTraer']))
{
	$id=$_SESSION['idParaTraer'];
	echo "<script>alert( llego esto :'$id');</script>";
 	//$elUsuario=new Usuario($_SESSION['idModificar']);
 	$elCd =cd::TraerUnCd($id);
	var_dump($elCd->titulo );

 	
}
else
{
	echo "<script>alert('no');</script>";
	$elCd=new cd();
}
?>

