<?php
include "./conexion.php";
$cnn = new conexion();
$con = $cnn -> conectar();

mysqli_select_db($con,"b8iu0m6g_cb_rh");
$query = "SELECT * FROM rh_usuarios WHERE id = '{$_GET['id']}'";

$ejecucion = mysqli_query($con,$query);
$mostrar = mysqli_fetch_array($ejecucion);

if($ejecucion){
return true;
}else{
    return false;
}

?>