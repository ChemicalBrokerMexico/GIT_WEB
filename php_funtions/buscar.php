<?php


$mysqli = new mysqli("localhost","root","","linkbuscador");

$salida = "";

$query = "SELECT * FROM linkbuscador ORDER BY id_buscador ";


if(isset($_POST['consulta'])){
    $q = $mysqli -> real_escape_string($_POST['consulta']);
    $query = "SELECT * FROM busqueda_link WHERE visualizacion_buscador LIKE '%" .$q. "%'";
}

$resultado = $mysqli -> query($query);

$rowcount = mysqli_num_rows($resultado); 

if($rowcount > 0){


    $salida.= "<table class='tabla_datos'>
                    <thead>
                      <tr>
                        <td>Busqueda</td>
                        </tr>
                        </thead>
                        <tbody>

    
    
    
    
    
    
    
    ";


    while($fila = $resultado -> fetch_assoc()){
        $salida.="<tr>
                    "."<td><a style='color:black;cursor:pointer;font-weight:bold' href='".$fila['linkbusqueda']."'>".$fila['visualizacion_buscador']."</a></td>
        
        </tr>
        ";
    }

    $salida.="</tbody></table>";

} else{
    $salida.= "No se encontraron datos";
}

echo $salida;

$mysqli->close();


?>