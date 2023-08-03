<?php

//Mostrar errores (Desactivar en produccion)

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//INCLUIR LA LIBERIA PHPMAILER

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './MAILER/src/Exception.php';
require './MAILER/src/PHPMailer.php';
require './MAILER/src/SMTP.php';

//Inicio

$mail = new PHPMailer(true);




?>