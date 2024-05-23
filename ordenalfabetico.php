<?php     

    
    require "conexion.php";

    $conexion = new conexion();
    
    $cnn = $conexion-> conectar();
    
    mysqli_select_db($cnn,"catalogos_productos");
    
    $consulta = "SELECT * FROM catalogo_productos WHERE Familia like 'a%'";
    
    $result = mysqli_query($cnn, $consulta);

    $result1 = "<table> <tr style='margin-top:-70px;'>
              
    <td style='background-color:#EB592F;color:white;text-align:center;' colspan = '3'>" . $mostrar['Alfabetico'] . "</td>
    
    </tr>
    
    
    ";
  
    if($result == true){
        while($mostrar = mysqli_fetch_array($result)){

              echo $result1;

    }
}
    
   

   
