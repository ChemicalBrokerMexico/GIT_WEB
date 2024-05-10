<?php

if(isset($_POST["name"])){
    $name = $_POST["name"];
}

if(isset($_POST["email"])){
    $email = $_POST["email"];
}

if(isset($_POST["asunto"])){
    $asunto = $_POST["asunto"];
}

if(isset($_POST["Solicitud"])){
    $solicitud = $_POST["Solicitud"];
}

 $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
 $recaptcha_secret = '6LeYtRQiAAAAAHPEdgxnSK0q094PjY-P2y44_qwn'; 
 $recaptcha_response = $_POST['recaptcha_response']; 
 $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
 $recaptcha = json_decode($recaptcha); 
 if($recaptcha->score >= 0.7){
    $header = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $header .= "Reply-To: it@chemicalbroker.mx\r\n";
    $header .= "Return-path: it@chemicalbroker.mx\r\n"; 
    $mensaje .= "Enviado por El/La : " . $name . " ";
    $mensaje .= "Correo Electronico: " . $email . "\r\n";
    $mensaje .= "Asunto " . $asunto. "\r\n";
    $mensaje .= "Solicitud:" . $solicitud . "\r\n"; 
    $mensaje .= " "  . "\r\n";
    $para = 'it@chemicalbroker.mx';
    $asunto = 'Requerimiento de Informacion ' .$Textarea;
    mail($para,$asunto,utf8_decode($mensaje),$header);
    header('Location:../Contact.php');
 }else{
     header('Location:../Proximamente.php');
     die();  
}


// $spamkill = $_POST["spamkill"];

// if(empty($spamkill)){
    
   
// }else{
  
// }


?>