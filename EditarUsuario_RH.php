<?php
include "./conexion.php";

class EditarUsuario{

function EditarUsuarios(){

    $cnn = new conexion();
    $con = $cnn -> conectar();
    mysqli_select_db($con,"cb_rh");
    $query = "UPDATE rh_usuarios SET contrasena = '{$_POST['txtcontrasena']}' WHERE id = '{$_GET['id']}'";
    $ejecucion = mysqli_query($con,$query);
    if($ejecucion){
        header('Location:LOGIN_RH.php');
    }else{
     echo mysqli_error($con);
    }



}





}


?>