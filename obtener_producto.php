<?php

include('conexion.php');

$id = intval($_GET['id']);

$sql = "
SELECT *
FROM productos
WHERE id_producto = $id
";

$resultado = $conn->query($sql);

echo json_encode(
    $resultado->fetch_assoc()
);