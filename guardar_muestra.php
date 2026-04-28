<?php

// 🔥 MOSTRAR ERRORES (CLAVE)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 🔌 CONEXIÓN
$conexion = new mysqli("localhost", "root", "", "industria_productos2");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// 🧪 DEBUG: VER QUÉ LLEGA
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Puedes activar esto temporalmente
    // var_dump($_POST); exit;
}

// 📥 RECIBIR DATOS (CON SEGURIDAD)
$producto   = $_POST['producto']   ?? '';
$empresa    = $_POST['empresa']    ?? '';
$nombre     = $_POST['nombre']     ?? '';
$correo     = $_POST['correo']     ?? '';
$telefono  = $_POST['telefono']  ?? '';
$uso= $_POST['uso']?? '';
$cantidad= $_POST['cantidad']?? '';



// 🚨 VALIDACIÓN
if(empty($nombre) || empty($correo)){
    die("Faltan datos obligatorios");
}

// 🧾 QUERY
$sql = "INSERT INTO solicitudes_muestra 
(producto, empresa, nombre, correo, telefono, uso, cantidad, fecha, estatus)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

// 🔍 VALIDAR PREPARE
$stmt = $conexion->prepare($sql);

if(!$stmt){
    die("Error en prepare: " . $conexion->error);
}

// 🔗 BIND
$stmt->bind_param("ssssss", 
    $producto, 
    $industria, 
    $nombre, 
    $correo, 
    $empresa, 
    $comentarios
);

// 🚀 EJECUTAR
if($stmt->execute()){
    echo "ok";
} else {
    echo "Error al insertar: " . $stmt->error;
}

// 🔚 CIERRE
$stmt->close();
$conexion->close();

?>