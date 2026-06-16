<?php

//========================================
// CONEXIÓN
//========================================

$conn = new mysqli("localhost", "root", "", "industria_productos2");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

//========================================
// RECIBIR DATOS
//========================================

$nombre_producto = trim($_POST["nombre_producto"] ?? "");
$descripcion = trim($_POST["descripcion"] ?? "");
$fabricante = trim($_POST["fabricante"] ?? "");
$descripcion_fabricante = trim($_POST["descripcion_fabricante"] ?? "");
$pais = trim($_POST["pais"] ?? "");
$link_web = trim($_POST["Link_Web"] ?? "");
$ruta_documentos = trim($_POST["Ruta_Documentos"] ?? "");

$activo = isset($_POST["activo"]) ? 1 : 0;

//========================================
// SUBIR IMAGEN
//========================================

$rutaImagen = "";

if (
    isset($_FILES["imagen"]) &&
    $_FILES["imagen"]["error"] === UPLOAD_ERR_OK
) {

    $directorio = "uploads/productos/";

    if (!is_dir($directorio)) {
        mkdir($directorio, 0777, true);
    }

    $extension = strtolower(
        pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION)
    );

    $nombreArchivo = uniqid("prod_") . "." . $extension;

    $rutaDestino = $directorio . $nombreArchivo;

    if (
        move_uploaded_file(
            $_FILES["imagen"]["tmp_name"],
            $rutaDestino
        )
    ) {

        $rutaImagen = $rutaDestino;

    }

}

//========================================
// INICIAR TRANSACCIÓN
//========================================

$conn->begin_transaction();

try {

    //====================================
    // INSERTAR PRODUCTO
    //====================================

    $sql = "

    INSERT INTO productos (

        nombre_producto,
        descripcion,
        imagen,
        Link_Web,
        Ruta_Documentos,
        fabricante,
        descripcion_fabricante,
        pais,
        activo

    )

    VALUES (

        ?, ?, ?, ?, ?, ?, ?, ?, ?

    )

    ";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(

        "ssssssssi",

        $nombre_producto,
        $descripcion,
        $rutaImagen,
        $link_web,
        $ruta_documentos,
        $fabricante,
        $descripcion_fabricante,
        $pais,
        $activo

    );

    $stmt->execute();

    $idProducto = $stmt->insert_id;

    $stmt->close();

    //====================================
    // INSERTAR CLASIFICACIONES
    //====================================

    if (
        isset($_POST["id_industria"]) &&
        isset($_POST["id_segmento"])
    ) {

        $stmtClasificacion = $conn->prepare("

            INSERT INTO producto_clasificacion (

                id_producto,
                id_industria,
                id_segmento

            )

            VALUES (?, ?, ?)

        ");

        $total = count($_POST["id_industria"]);

        for ($i = 0; $i < $total; $i++) {

            $idIndustria = intval($_POST["id_industria"][$i]);
            $idSegmento = intval($_POST["id_segmento"][$i]);

            // Evitar registros vacíos
            if ($idIndustria <= 0 || $idSegmento <= 0) {
                continue;
            }

            $stmtClasificacion->bind_param(
                "iii",
                $idProducto,
                $idIndustria,
                $idSegmento
            );

            $stmtClasificacion->execute();

        }

        $stmtClasificacion->close();

    }

    //====================================
    // CONFIRMAR
    //====================================

    $conn->commit();

    header("Location: productos.php");
    exit;

} catch (Exception $e) {

    $conn->rollback();

    die("Error al guardar: " . $e->getMessage());

}

$conn->close();

?>