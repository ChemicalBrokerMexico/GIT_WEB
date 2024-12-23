<?php

// if(isset($_POST["titulo"])){
//     $Titulo = $_POST["titulo"];
// }

if(isset($_POST["nombre"])){
    $Nombre = $_POST["nombre"];
}

if(isset($_POST["organizacion"])){
    $Organizacion = $_POST["organizacion"];
}

if(isset($_POST["puesto"])){
    $Puesto = $_POST["puesto"];
}

if(isset($_POST["email"])){
    $Email = $_POST["email"];    
}

if(isset($_POST["Tipoempresa"])){
    $Tipoempresa = $_POST["Tipoempresa"];
}

// if(isset($_POST["calleN"])){
//     $Callen = $_POST["calleN"];
// }

// if(isset($_POST["colonia"])){
//     $Colonia = $_POST["colonia"];
// }

// if(isset($_POST["codigop"])){
//     $Codigop = $_POST["codigop"];
// }

// if(isset($_POST["ciudad"])){
//     $Ciudad = $_POST["ciudad"];
// }

// if(isset($_POST["pais"])){
//     $Pais = $_POST["pais"];
// }

// if(isset($_POST["estado"])){
//     $Estado = $_POST["estado"];
// }

// if(isset($_POST["numtel"])){
//     $Numtel = $_POST["numtel"];
// }

// if(isset($_POST["textarea1"])){
//     $Textarea = $_POST["textarea1"];
// }


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
    $mensaje .= "Enviado por El/La : " . " " . $Nombre . "\r\n";
    $mensaje .= "Con Correo Electronico: " . $Email . "\r\n";
    $mensaje .= " de la Empresa " . $Organizacion . "\r\n";
    $mensaje .= "Puesto de Contacto: " . $Puesto . "\r\n";
    $mensaje .= "Empresa de tipo: " .  $Tipoempresa . "\r\n";
    // $mensaje .= " De la Ciudad de " . $Ciudad . "\r\n"; 
    $mensaje .= " "  . "\r\n";
    // $mensaje .= "Relacionado a la siguiente Industria:" . " \r\n ";
    $para = 'it@chemicalbroker.mx';
    $asunto = 'Requerimiento de Informacion ' .$Textarea;
    mail($para,$asunto,utf8_decode($mensaje),$header);
    header('Location:../Contact.php');
 }else{
     header('Location:../Contact.php');
     die();  
}


// $spamkill = $_POST["spamkill"];

// if(empty($spamkill)){
    
   
// }else{
  
// }


?>