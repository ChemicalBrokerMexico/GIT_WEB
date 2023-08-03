<?php
include "conexion.php";

class Consulta_Candidatos{

    function Consulta_General(){
    
    $con = new conexion();
    $Conexion = $con -> conectar();
    $seleccion = mysqli_select_db($Conexion,"cb_rh");
    $query = "SELECT * FROM candidatos";
 

    }

}
?>