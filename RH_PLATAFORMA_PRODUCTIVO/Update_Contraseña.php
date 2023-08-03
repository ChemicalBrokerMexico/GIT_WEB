<?php

session_start();

$con = mysqli_connect("localhost","b8iu0m6g_root","Ch3m1c4lbr0k3r","b8iu0m6g_cb_rh");

$contrasena = $_POST["txtContrasena"];
$confirmarcion_contrasena = $_POST["txtContrasena_Confirmacion"];

if($contrasena == $confirmarcion_contrasena){

$query = "UPDATE rh_usuarios set contrasena = md5('$contrasena')  WHERE usuario = '{$_REQUEST['usuarioupdate']}'";

$result = mysqli_query($con,$query);

if($result === true){

    echo "true";

}else{

echo "false";

}

}else{
    header("Location:Restablecer_Contraseña.php?usuario=" . htmlspecialchars($_GET['txtUsu']));
}

?>