<?php
if(isset($_POST['blanco'])){
    $blanco = $_POST['blanco'];
}
if(isset($_POST['nocambiar'])){
    $nocambiar = $_POST['nocambiar'];
}

if($blanco == '' && $nocambiar == 'http://'){
    mail('it@chemicalbroker.com', 'asunto: probando formulario de contacto', $msj);
}

?>