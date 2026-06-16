<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "traductor.php";

$resultado = buscarTraduccion(
    "Bienvenido",
    "en"
);

var_dump($resultado);

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "traductor.php";

echo traducirGoogle(
    "Hola mundo",
    "en"
);