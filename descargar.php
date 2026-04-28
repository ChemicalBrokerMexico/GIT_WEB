<?php

$conexion = new mysqli("localhost", "root", "", "industria_productos2");

if ($conexion->connect_error) {
    die("Error de conexión");
}

// DATOS
$producto = $_POST['producto'] ?? '';
$empresa = $_POST['empresa'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$cantidad = $_POST['cantidad'] ?? '';
$industria = $_POST['industria'] ?? '';
$fecha = date("Y-m-d H:i:s") ?? '';
$estatus = "pendiente" ?? '';
$comentarios = $_POST['comentarios'] ?? '';

// INSERT
$sql = "INSERT INTO solicitudes_muestra 
(producto, empresa, nombre, correo, telefono, cantidad, industria, fecha, estatus, comentarios)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

if (!$stmt) {
    die("Error en prepare: " . $conexion->error);
}

$stmt->bind_param("ssssssssss", $producto, $empresa, $nombre, $correo, $telefono, $cantidad, $industria, $fecha, $estatus, $comentarios);

if($stmt->execute()){
    echo "ok";
}else{
    echo "Error MySQL: " . $conexion->error;
}

$stmt->close();
$conexion->close();