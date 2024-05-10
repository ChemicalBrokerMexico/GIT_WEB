<?php


// function Concecutivoautomatico(){

// $Numero_inicial = 1;

// $query = "SELECT * FROM cambio_contrasena WHERE codigo_coincide = 1";

// if(){

// }
    
// }

$connection = mysqli_connect("localhost","root","","cb_rh");

$usuario = $_GET["txtUsu"];

$query = "SELECT * FROM rh_usuarios WHERE usuario = '$usuario'";

$query2 = "INSERT INTO cambio_contrasena(id_cambio_contrasena,usuario_solicita,fecha_solicitud,token_solicitud,codigo_coincide) VALUES(NULL,'$usuario',CURRENT_DATE,rand(),'1')";

$result = mysqli_query($connection,$query);

$result2 = mysqli_query($connection,$query2);

if(mysqli_num_rows($result)>=1){

    echo 'true';
    //header("Location:Restablecer_Contraseña.php?usuario=" . htmlspecialchars($_GET['txtUsu']));

}else{
    echo 'false';
    // echo "El usuario no se encuentra registrado en la base de datos";
    echo mysqli_error($connection);
}

?>