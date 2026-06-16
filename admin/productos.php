<?php

$conn = new mysqli("localhost", "root", "", "industria_productos2");

if ($conn->connect_error) {
    die("Error de conexión");
}

$sql = "
SELECT
    id_producto,
    nombre_producto,
    fabricante,
    pais,
    activo
FROM productos
ORDER BY nombre_producto ASC
";

$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Productos</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body class="grey lighten-4">

<div class="container">

    <h4>Administración de Productos</h4>

    <br>

    <a href="nuevo_producto.php"
       class="btn"
       style="background:#071637;">

        Nuevo Producto

    </a>

    <br><br>

    <table class="striped responsive-table">

        <thead>

            <tr>

                <th>ID</th>

                <th>Producto</th>

                <th>Fabricante</th>

                <th>País</th>

                <th>Estado</th>

                <th>Acciones</th>

            </tr>

        </thead>

        <tbody>

        <?php while($row = $resultado->fetch_assoc()){ ?>

            <tr>

                <td><?php echo $row["id_producto"]; ?></td>

                <td><?php echo htmlspecialchars($row["nombre_producto"]); ?></td>

                <td><?php echo htmlspecialchars($row["fabricante"]); ?></td>

                <td><?php echo htmlspecialchars($row["pais"]); ?></td>

                <td>

                    <?php

                    echo $row["activo"]
                        ? "Activo"
                        : "Inactivo";

                    ?>

                </td>

                <td>

                    <a
                        href="editar_producto.php?id=<?php echo $row["id_producto"]; ?>"
                        class="btn-small blue">

                        Editar

                    </a>

                    <a
                        href="clasificaciones.php?id=<?php echo $row["id_producto"]; ?>"
                        class="btn-small green">

                        Clasificaciones

                    </a>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>