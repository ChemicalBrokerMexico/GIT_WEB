<h3>Clasificar producto</h3>

<h5>
    <?php echo htmlspecialchars($producto["nombre_producto"]); ?>
</h5>

<form action="guardar_clasificacion.php" method="POST">

    <input
        type="hidden"
        name="id_producto"
        value="<?php echo $producto["id_producto"]; ?>">

    <table border="1" cellpadding="8">

        <tr>
            <th>Asignar</th>
            <th>Industria</th>
            <th>Segmento</th>
        </tr>

        <?php
        while($industria = $industrias->fetch_assoc()){

            $segmentos->data_seek(0);

            while($segmento = $segmentos->fetch_assoc()){
        ?>

        <tr>

            <td>

                <input
                    type="checkbox"
                    name="clasificaciones[]"
                    value="<?php echo $industria["id_industria"] . "|" . $segmento["id_segmento"]; ?>">

            </td>

            <td>

                <?php echo htmlspecialchars($industria["nombre_industria"]); ?>

            </td>

            <td>

                <?php echo htmlspecialchars($segmento["nombre_segmento"]); ?>

            </td>

        </tr>

        <?php

            }

        }

        ?>

    </table>

    <br>

    <button type="submit">
        Guardar clasificación
    </button>

</form>