<?php

$conn = new mysqli("localhost", "root", "", "industria_productos2");

if ($conn->connect_error) {
    die("Error de conexión");
}

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

$listaIndustrias = [];
while ($row = $industrias->fetch_assoc()) {
    $listaIndustrias[] = $row;
}

$listaSegmentos = [];
while ($row = $segmentos->fetch_assoc()) {
    $listaSegmentos[] = $row;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Nuevo Producto</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<style>

.clasificacion-row{
    margin-bottom:15px;
    padding:10px;
    border:1px solid #e0e0e0;
    border-radius:8px;
}

</style>

</head>

<body class="grey lighten-4">

<div class="container">

    <h4>Nuevo Producto</h4>

    <form
        action="guardar_producto.php"
        method="POST"
        enctype="multipart/form-data">

        <div class="input-field">

            <input
                type="text"
                id="nombre_producto"
                name="nombre_producto"
                required>

            <label for="nombre_producto">
                Nombre del producto
            </label>

        </div>

        <div class="input-field">

            <textarea
                id="descripcion"
                name="descripcion"
                class="materialize-textarea"></textarea>

            <label for="descripcion">
                Descripción
            </label>

        </div>

        <div class="input-field">

            <input
                type="text"
                id="fabricante"
                name="fabricante">

            <label for="fabricante">
                Fabricante
            </label>

        </div>

        <div class="input-field">

            <textarea
                id="descripcion_fabricante"
                name="descripcion_fabricante"
                class="materialize-textarea"></textarea>

            <label for="descripcion_fabricante">
                Descripción fabricante
            </label>

        </div>

        <div class="input-field">

            <input
                type="text"
                id="pais"
                name="pais">

            <label for="pais">
                País
            </label>

        </div>

        <div class="input-field">

            <input
                type="text"
                id="Link_Web"
                name="Link_Web">

            <label for="Link_Web">
                Link Web
            </label>

        </div>

        <div class="input-field">

            <input
                type="text"
                id="Ruta_Documentos"
                name="Ruta_Documentos">

            <label for="Ruta_Documentos">
                Carpeta de documentos
            </label>

        </div>

        <div class="file-field input-field">

            <div class="btn">

                <span>Imagen</span>

                <input
                    type="file"
                    name="imagen"
                    accept="image/*">

            </div>

            <div class="file-path-wrapper">

                <input
                    class="file-path validate"
                    type="text">

            </div>

        </div>

        <h5>Clasificaciones</h5>

        <div id="contenedorClasificaciones">

        </div>

        <a
            id="btnAgregar"
            class="btn"
            style="background:#071637;">

            Agregar Clasificación

        </a>

        <br><br>

        <p>

            <label>

                <input
                    type="checkbox"
                    name="activo"
                    value="1"
                    checked>

                <span>Producto activo</span>

            </label>

        </p>

        <br>

        <button
            type="submit"
            class="btn green">

            Guardar Producto

        </button>

    </form>

</div>

<script>

const industrias = <?= json_encode($listaIndustrias); ?>;
const segmentos = <?= json_encode($listaSegmentos); ?>;

function crearFila(){

    const contenedor = document.getElementById("contenedorClasificaciones");

    const fila = document.createElement("div");

    fila.className = "row clasificacion-row";

    let opcionesIndustria = "";

    industrias.forEach(function(i){

        opcionesIndustria += `
            <option value="${i.id_industria}">
                ${i.nombre_industria}
            </option>
        `;

    });

    let opcionesSegmento = "";

    segmentos.forEach(function(s){

        opcionesSegmento += `
            <option value="${s.id_segmento}">
                ${s.nombre_segmento}
            </option>
        `;

    });

    fila.innerHTML = `

        <div class="input-field col s5">

            <select
                name="id_industria[]"
                required>

                ${opcionesIndustria}

            </select>

            <label>Industria</label>

        </div>

        <div class="input-field col s5">

            <select
                name="id_segmento[]"
                required>

                ${opcionesSegmento}

            </select>

            <label>Segmento</label>

        </div>

        <div class="col s2 center">

            <a
                class="btn red btnEliminar">

                X

            </a>

        </div>

    `;

    contenedor.appendChild(fila);

    M.FormSelect.init(
        fila.querySelectorAll("select")
    );

    fila.querySelector(".btnEliminar")
        .addEventListener("click", function(){

            fila.remove();

        });

}

document
.getElementById("btnAgregar")
.addEventListener("click", crearFila);

crearFila();

document.addEventListener("DOMContentLoaded", function(){

    M.FormSelect.init(
        document.querySelectorAll("select")
    );

});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>