<?php
session_start();
$conexion = mysqli_connect("localhost","root","","cb_rh");
$query1 = "SELECT * FROM datos_aviso ORDER BY id_aviso DESC LIMIT 1";
$result1 = mysqli_query($conexion,$query1);
$mostrar1 = mysqli_fetch_array($result1);
if(mysqli_num_rows($result1) > 0){
    $query2 = "SELECT * FROM datos_aviso WHERE id_aviso = $mostrar1[id_aviso]";
    $result2 = mysqli_query($conexion,$query2);
    $mostrar2 = mysqli_fetch_array($result2);
    echo "true";
}else{
echo '<script type="text/javascript">

 alert("No Existen Datos Registrados")

</script>';
}

?>