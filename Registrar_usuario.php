<?php
include "./conexion.php";
class Insertarusuarios{
    
    function InsertarUsuario($usuario,$contrasena,$checkbox){
        
        $cnn = new conexion();
        $con = $cnn -> conectar();
        mysqli_select_db($con,"cb_rh");
        $QUERYRH = mysqli_query($con, "SELECT * FROM rh_usuarios WHERE usuario  = '$usuario'");

        if(mysqli_num_rows($QUERYRH)>0){
            echo "UsuReg";
            die();
            
        }else if(empty($usuario) OR empty($contrasena)){
            
            echo "CamVacios";

        }else if(strlen($contrasena)<8){
            echo "contrasenacorta";
        }
        
        else if($checkbox == "true" && filter_var($usuario, FILTER_VALIDATE_EMAIL)){

            $sql = "INSERT INTO rh_usuarios (id,usuario,contrasena,condition_check) Values('null','".$usuario."','".md5($contrasena)."','".true."')";

            if(mysqli_query($con,$sql)){
                echo "true";

            }else{
                echo "false";
                mysqli_error($con);
            }
            mysqli_close($con);
        }else{
            echo "nocheck";
        }
    }
    
}


$registro = new Insertarusuarios();

$insert = $registro -> InsertarUsuario($_POST['txtUsu'],$_POST['txtContrasena'],$_POST['checkbox1']);


?>