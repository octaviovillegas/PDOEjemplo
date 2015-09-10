<?php
session_start();


var_dump($_POST);
$_SESSION['idParaTraer']=$_POST['idParaTraer'];
echo "llego". $_POST['idParaTraer'];   


?>