<?php

class Eliminar_usuarios{

    function EliminarUsuarios($id){

        $cnn = new conexion();
        $con = $cnn -> conectar();
        mysqli_select_db($con,"cb_rh");
        $query = "DELETE * FROM rh_usuarios WHERE id = '".$id."' ";
        $ejecucion_query = mysqli_query($con,$query);
        if($ejecucion_query){
        return true;
        }else{
            return false;
        }
        }


} 

$registro = new Eliminar_usuarios();

$delete = $registro -> EliminarUsuarios($_SESSION["id"]);
//AGREGAR POST EN LUGAR DE SESSION

?>