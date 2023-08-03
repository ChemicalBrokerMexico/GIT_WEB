<?php

class conexion{

function conectar(){
        return mysqli_connect("localhost","root","");
    }
}

$cnn = new conexion();

if($cnn -> conectar()){

}else{
    echo "no se puede conectar";
}

?>