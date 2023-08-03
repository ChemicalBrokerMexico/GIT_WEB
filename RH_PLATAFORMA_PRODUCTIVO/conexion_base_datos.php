<?php
class conexion{
    
    function conectar()
    {
        return mysqli_connect("localhost","b8iu0m6g_root","Ch3m1c4lbr0k3r","b8iu0m6g_cb_rh");
    }
}
$cnn = new conexion();
if ($cnn->conectar()) {
 
}
else{
    echo "no se pudo conectar";
}
?>