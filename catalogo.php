<input
type="text"
id="buscar"
placeholder="Buscar producto..."
>

<div class="abecedario">

<a href="#A">A</a>
<a href="#B">B</a>
<a href="#C">C</a>

...

<a href="#Z">Z</a>

</div>

<?php
include('conexion_catalogo.php');

$sql = "SELECT * FROM productos ORDER BY producto ASC";

$resultado = $conn->query($sql);
?>

<table border="1">

<tr>
    <th>Producto</th>
    <th>Familia</th>
    <th>CAS</th>
</tr>

<?php while($row = $resultado->fetch_assoc()) { ?>

<tr>

<td><?php echo $row['producto']; ?></td>

<td><?php echo $row['familia_quimica']; ?></td>

<td><?php echo $row['numero_cas']; ?></td>

</tr>

<?php } ?>

</table>