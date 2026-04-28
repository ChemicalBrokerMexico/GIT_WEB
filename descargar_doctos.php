<?php
ob_start(); // 🔥 evita errores de headers

// Validar parámetro
if (!isset($_GET['producto']) || empty($_GET['producto'])) {
    die("Producto no especificado");
}

$producto = basename($_GET['producto']); // seguridad

// Ruta base de documentos
$baseDir = __DIR__ . "/DOCUMENTOS/";

// Ruta final
$carpeta = $baseDir . $producto;

// Validar existencia
if (!is_dir($carpeta)) {
    die("Carpeta no existe");
}

// Crear ZIP
$zip = new ZipArchive();
$zipFile = tempnam(sys_get_temp_dir(), 'zip');

if ($zip->open($zipFile, ZipArchive::CREATE) !== TRUE) {
    die("No se pudo crear el ZIP");
}

// Recorrer archivos correctamente
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($carpeta, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $file) {

    // 🔥 AQUÍ ESTABA TU ERROR
    if ($file instanceof SplFileInfo && !$file->isDir()) {

        $filePath = $file->getRealPath();

        // Validar que no venga vacío
        if (!$filePath || !file_exists($filePath)) {
            continue;
        }

        $relativePath = substr($filePath, strlen($carpeta) + 1);

        if (!empty($relativePath)) {
            $zip->addFile($filePath, $relativePath);
        }
    }
}

$zip->close();

// 🔥 LIMPIAR BUFFER ANTES DE HEADERS
ob_clean();

// Headers correctos
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . $producto . '.zip"');
header('Content-Length: ' . filesize($zipFile));

// Enviar archivo
readfile($zipFile);

// Eliminar temporal
unlink($zipFile);
exit;