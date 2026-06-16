<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Administrador de Productos</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body class="grey lighten-4">

<div class="container">

    <h4>Alta de Producto</h4>

    <form action="guardar_producto.php"
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
                Descripción del fabricante
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
                Link web
            </label>
        </div>

        <div class="input-field">
            <input
                type="text"
                id="ruta_documentos"
                name="ruta_documentos">

            <label for="ruta_documentos">
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

        <p>
            <label>
                <input
                    type="checkbox"
                    name="activo"
                    value="1"
                    checked>

                <span>Producto visible</span>
            </label>
        </p>

        <br>

        <button
            type="submit"
            class="btn blue darken-4">

            Guardar producto

        </button>

    </form>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>