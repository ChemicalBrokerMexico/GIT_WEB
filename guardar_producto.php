<?php

$conn = new mysqli("localhost", "root", "", "industria_productos2");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

/* ===========================
   RECIBIR DATOS DEL FORMULARIO
   =========================== */

$nombre_producto = $_POST["nombre_producto"];
$descripcion = $_POST["descripcion"];
$fabricante = $_POST["fabricante"];
$descripcion_fabricante = $_POST["descripcion_fabricante"];
$pais = $_POST["pais"];
$link_web = $_POST["Link_Web"];
$ruta_documentos = $_POST["ruta_documentos"];

$activo = isset($_POST["activo"]) ? 1 : 0;


/* ===========================
   SUBIR IMAGEN
   =========================== */

$rutaImagen = "";

if (
    isset($_FILES["imagen"]) &&
    $_FILES["imagen"]["error"] == 0
) {

    $carpetaDestino = "uploads/productos/";

    // Crear carpeta si no existe
    if (!is_dir($carpetaDestino)) {
        mkdir($carpetaDestino, 0777, true);
    }

    // Generar nombre único
    $extension = pathinfo(
        $_FILES["imagen"]["name"],
        PATHINFO_EXTENSION
    );

    $nombreArchivo = uniqid() . "." . $extension;

    $rutaCompleta = $carpetaDestino . $nombreArchivo;

    if (
        move_uploaded_file(
            $_FILES["imagen"]["tmp_name"],
            $rutaCompleta
        )
    ) {
        $rutaImagen = $rutaCompleta;
    }
}


/* ===========================
   INSERTAR PRODUCTO
   =========================== */

$sql = "

INSERT INTO productos (

    nombre_producto,
    descripcion,
    imagen,
    Link_Web,
    ruta_documentos,
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

if ($stmt->execute()) {

    $idProducto = $stmt->insert_id;

    echo "
    <h2>Producto guardado correctamente.</h2>

    <p>ID generado: {$idProducto}</p>

    <a href='productos.php'>
        Capturar otro producto
    </a>
    ";

} else {

    echo "Error al guardar: " . $stmt->error;

}

$stmt->close();
$conn->close();

?>