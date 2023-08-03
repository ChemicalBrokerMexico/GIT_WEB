<?php

include "conexion.php";
$type_usuario = $_GET['sel_privilegio'];
$usuario = $_GET['txtUsu'];
$contrasena = $_GET['txtContrasena'];
session_start();
$conexion =  new conexion();
$con = $conexion -> conectar();

mysqli_select_db($con,"cb_rh");

//cuando recien se registre el usuario debe de asignarse un status de type usuario por default que sera none
// una vez se quiera editar al usuari primero se debera generar un query que seleccione a todos lo usarios que tenga type = none 
// Despues de generar dicho query se generara el update donde el resultado = al usuario que se ingreso en el campo de usuario y su contraseña de igual forma coincida

$query = "UPDATE rh_usuarios SET Type_usuario = '$type_usuario'  where usuario = '$usuario' AND contrasena =md5('$contrasena')";

$result = mysqli_query($con,$query);

if($result == true){
    echo "true";
}else{
    echo mysqli_error($con);
}

?>