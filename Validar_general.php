<?php
session_start();

$usuario = $_GET["txtUsu"];

$con = mysqli_connect("localhost","root","","cb_rh");

if(strpos($usuario,'chemicalbroker.mx')){

$query = "SELECT * FROM rh_usuarios WHERE Type_usuario = 'admin'";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result) >= 1){

    echo "usuario_administrador"; 

}else if (strpos($usuario,'gmail.com' || 'hotmail.com' || 'prodigy.es' || 'outlook.com' || 'outlook.es')){

    $query = "SELECT * FROM rh_usuarios WHERE Form_general = 1 AND usuario = '$usuario'";
    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) >= 1){
        echo "usuario_contestado";
        
    }else if(mysqli_num_rows($result) == 0){
        echo "usuario_nocontestado";

    }else{
        echo "<script type='text/javascript'>
        
        swal('El dominio de correo especificado no existe','error');

        </script>
        ";
        echo mysqli_error($con);
        die();
    }

}else{
    echo mysqli_error($con);
}
}

?>


