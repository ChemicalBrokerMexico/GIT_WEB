<?php

$idioma = "es";

if(isset($_GET['lang'])){

    $idioma = $_GET['lang'];

}


include "lang_V2/".$idioma.".php";



?>