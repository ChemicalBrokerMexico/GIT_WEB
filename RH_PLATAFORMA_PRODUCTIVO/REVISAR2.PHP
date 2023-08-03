<?php

session_start();

include "./conexion.php";

$conexion = new conexion();

$con = $conexion->conectar();

$Nombre = $_POST["nombre"];
$Apellido = $_POST["apellidos"];
$Abierto_Oportunidades = $_POST["oportunidades"];
$Ubicacion_actual = $_POST["ubicacion_actual"];
// $Descripcion_asignada = json_encode($_POST["idiomas"]);
$Idiomas = json_encode($_POST["idiomas"]);
$Salario_minimo_deseado =$_POST["salario_deseado"];
$Areas_interes = json_encode($_POST["areas_interes"]);
$Posiciones = $_POST["posiciones"];
$Hard_skills_Principales = json_encode($_POST["hard_skills"]);
$Hard_skills_Secundarias = json_encode($_POST["hard_skills2"]);
$Form_general = $_POST["form_lleno"];

mysqli_select_db($con,"b8iu0m6g_cb_rh");

$query = "INSERT INTO rh_general (id_general,nombre,apellido,Abierto_oportunidades,ubicacion_actual,idiomas,Salario_minimo_deseado,Areas_interes,Posiciones,Hard_skills_principales,Hard_skills_secundarias) 
VALUES ('null','".$Nombre."','".$Apellido."','".$Abierto_Oportunidades."','".$Ubicacion_actual."','".$Idiomas."','".$Salario_minimo_deseado."','".$Areas_interes."','".$Posiciones."','".$Hard_skills_Principales."','".$Hard_skills_Secundarias."')";

$query2 = "";

//if($Form_general === "1"){
  $query2 = "UPDATE rh_usuarios SET Form_general = $Form_general WHERE id = '".$_SESSION['id']."' ";
  $query3 = "UPDATE rh_general SET fk_generales = '".$_SESSION['id']."' WHERE id_general = '".$_SESSION['id']."'"; 
//}

$result = mysqli_query($con,$query);

//if($result == true){
    echo "true";
    echo $query2;
    echo "<br>";
    echo $query3;
$result2 = mysqli_query($con, $query2);
echo "si se esta ejecutando";
$result3 = mysqli_query($con,$query3);
echo "si se esta ejecutando X2";
//}else{
    //echo "false";
    //$error = mysqli_error($con);
  //echo $error;
//}

header("LOCATION:DashBoard_RH.php");


?>