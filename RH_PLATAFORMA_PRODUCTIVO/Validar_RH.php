<?php
include "./conexion.php";
$usuario = $_GET["txtUsu"];
$contrasena = $_GET["txtContrasena"];
session_start();
if(isset($usuario) && isset($contrasena)){
    $cnn = new conexion();
    $con = $cnn -> conectar();
    mysqli_select_db($con,"b8iu0m6g_cb_rh");
    // $_SESSION["txtUsu"] = $usuario;
    $query = "SELECT id, usuario, contrasena FROM rh_usuarios WHERE usuario = '$usuario' AND contrasena = md5('$contrasena')";
    $resultado = mysqli_query($con,$query);
    

$mostrar = mysqli_fetch_array($resultado);

$_SESSION['id'] = $mostrar['id'];

    if(mysqli_num_rows($resultado)>=1){
        echo 'true';
        die();
    }else{
        echo 'false';
        mysqli_error($con);
        die();    
    }
    
}

?>
