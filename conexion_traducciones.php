<?php

$conexion = new mysqli(
    "localhost",      // Servidor
    "root",           // Usuario
    "",               // Contraseña
    "traducciones"   // Base de datos
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");