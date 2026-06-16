<?php

require_once "conexion_traducciones.php";
require_once "config.php";

function buscarTraduccion($textoOriginal, $idiomaDestino)
{
    global $conexion;

    $sql = "
        SELECT traduccion
        FROM traducciones
        WHERE texto_original = ?
          AND idioma = ?
        LIMIT 1
    ";

    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        die("Error en prepare(): " . $conexion->error);
    }
    
    $stmt->bind_param("ss", $textoOriginal, $idiomaDestino);

    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {

        $fila = $resultado->fetch_assoc();

        return $fila["texto_traducido"];

    }

    return null;
}


function guardarTraduccion(
    $textoOriginal,
    $idiomaDestino,
    $textoTraducido
)
{
    global $conexion;

    $sql = "
        INSERT INTO traducciones
        (
            texto_original,
            idioma_destino,
            texto_traducido
        )
        VALUES
        (
            ?,
            ?,
            ?
        )
    ";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param(
        "sss",
        $textoOriginal,
        $idiomaDestino,
        $textoTraducido
    );

    $stmt->execute();
}

function traducirGoogle($texto, $idiomaDestino)
{
    $apiKey = GOOGLE_TRANSLATE_API_KEY;

    $url = "https://translation.googleapis.com/language/translate/v2?key=" . $apiKey;

    $datos = [
        "q"      => $texto,
        "source" => "es",
        "target" => $idiomaDestino,
        "format" => "text"
    ];

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datos));

    $respuesta = curl_exec($ch);

    if ($respuesta === false) {
        die("Error CURL: " . curl_error($ch));
    }

    curl_close($ch);

    $json = json_decode($respuesta, true);

    if (isset($json["error"])) {
        die("Error Google: " . $json["error"]["message"]);
    }

    return html_entity_decode(
        $json["data"]["translations"][0]["translatedText"],
        ENT_QUOTES | ENT_HTML5,
        "UTF-8"
    );
}