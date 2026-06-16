<?php

$conn = new mysqli("localhost", "root", "", "industria_productos2");

if ($conn->connect_error) {
    die("Error de conexión");
}

$idProducto = intval($_POST["id_producto"]);

/* Eliminar clasificaciones anteriores */
$conn->query("
    DELETE FROM producto_clasificacion
    WHERE id_producto = $idProducto
");

/* Insertar las nuevas */
if (!empty($_POST["clasificaciones"])) {

    $stmt = $conn->prepare("
        INSERT INTO producto_clasificacion
        (id_producto, id_industria, id_segmento)
        VALUES (?, ?, ?)
    ");

    foreach ($_POST["clasificaciones"] as $valor) {

        list($idIndustria, $idSegmento) = explode("|", $valor);

        $idIndustria = intval($idIndustria);
        $idSegmento = intval($idSegmento);

        $stmt->bind_param(
            "iii",
            $idProducto,
            $idIndustria,
            $idSegmento
        );

        $stmt->execute();
    }

    $stmt->close();
}

$conn->close();

echo "Clasificación guardada correctamente.";