<?php
class Insertarusuarios{
    
    function InsertarUsuario($usuario,$contrasena,$checkbox){
        
      
        $con =  mysqli_connect("localhost","b8iu0m6g_root","Ch3m1c4lbr0k3r","b8iu0m6g_cb_rh");
        $QUERYRH = mysqli_query($con, "SELECT * FROM rh_usuarios WHERE usuario  = '$usuario'");

        if(mysqli_num_rows($QUERYRH)>0){
            echo "UsuReg";
            die();
            
        }else if(empty($usuario) OR empty($contrasena)){
            
            echo "CamVacios";

        }else if(strlen($contrasena)<8){
            echo "contrasenacorta";
        }
        
        else if($checkbox == "true"){
            
            $con =  mysqli_connect("localhost","b8iu0m6g_root","Ch3m1c4lbr0k3r","b8iu0m6g_cb_rh");

            $sql = "INSERT INTO rh_usuarios (id,usuario,contrasena,condition_check) Values('null','".$usuario."','".md5($contrasena)."','".true."')";

            if(mysqli_query($con,$sql)){
                echo "true";

            }else{
             echo "false";
             echo mysqli_error($con);
            }
            mysqli_close($con);
        }
    }
    
}

$registro = new Insertarusuarios();

$insert = $registro -> InsertarUsuario($_POST['txtUsu'],$_POST['txtContrasena'],$_POST['checkbox1']);

?>