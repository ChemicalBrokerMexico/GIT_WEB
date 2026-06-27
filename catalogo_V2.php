<?php

include('conexion2.php');

$sql = "
SELECT *
FROM productos
ORDER BY
UPPER(LEFT(producto,1)),
familia_quimica,
producto
";

$resultado = $conn->query($sql);

$productos = [];

while($row = $resultado->fetch_assoc()){
    $productos[] = $row;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Catálogo de Productos</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
rel="stylesheet"
href="css/estilos.css">

</head>

<body>

<div class="container-catalogo">

    <h1 class="titulo">
        Catálogo de Productos
    </h1>

    <input
        type="text"
        id="buscar"
        placeholder="Buscar producto, CAS, fabricante u origen..."
    >

    <div class="abecedario">

        <?php

        foreach(range('A','Z') as $letra){

            echo "<a href='#$letra'>$letra</a>";

        }

        ?>

    </div>

<?php

$letraActual = '';
$familiaActual = '';

foreach($productos as $producto){

    $letra = strtoupper(
        mb_substr(
            trim($producto['producto']),
            0,
            1,
            'UTF-8'
        )
    );

    if($letra != $letraActual){

        $letraActual = $letra;
        $familiaActual = '';

        echo "
        <div id='{$letra}' class='letra'>
            {$letra}
        </div>";
    }

    if($familiaActual != $producto['familia_quimica']){

        $familiaActual = $producto['familia_quimica'];

        echo "
        <div class='familia'>
            ".htmlspecialchars($familiaActual)."
        </div>";
    }

?>

<div class="producto">

<?php if($producto['tiene_pagina'] == 1){ ?>

    <a
        href="<?= htmlspecialchars($producto['url_producto']) ?>"
        class="nombre-producto-link"
    >
        <?= htmlspecialchars($producto['producto']) ?>
    </a>

<?php } else { ?>

    <span class="nombre-producto-normal">

        <?= htmlspecialchars($producto['producto']) ?>

    </span>

<?php } ?>

    <div class="detalle-producto">

        <strong>CAS:</strong>
        <?= htmlspecialchars($producto['numero_cas']) ?>

        <span class="separador">|</span>

        <strong>Fabricante:</strong>
        <?= htmlspecialchars($producto['fabricante']) ?>

        <span class="separador">|</span>

        <strong>Origen:</strong>
        <?= htmlspecialchars($producto['origen']) ?>

    </div>

</div>

<?php } ?>

</div>

<script src="js/catalogo.js"></script>

</body>

</html>