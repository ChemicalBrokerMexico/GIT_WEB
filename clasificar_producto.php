<?php

$conn = new mysqli("localhost", "root", "", "industria_productos2");

if ($conn->connect_error) {
    die("Error de conexión");
}

$idProducto = intval($_GET["id"]);

$producto = $conn->query("
    SELECT id_producto, nombre_producto
    FROM productos
    WHERE id_producto = $idProducto
")->fetch_assoc();

$industrias = $conn->query("
    SELECT id_industria, nombre_industria
    FROM industrias
    ORDER BY nombre_industria
");

$segmentos = $conn->query("
    SELECT id_segmento, nombre_segmento
    FROM segmentos
    ORDER BY nombre_segmento
");

?>