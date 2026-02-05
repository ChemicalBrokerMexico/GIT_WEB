<?php     

    
    require "conexion.php";

    $conexion = new conexion();
    
    $cnn = $conexion-> conectar();
    
    mysqli_select_db($cnn,"catalogos_productos");
    
    $consulta = "SELECT * FROM catalogo_productos WHERE Familia like 'a%'";
    
    $result1 = mysqli_query($cnn, $consulta);
    
    
    while($mostrar = mysqli_fetch_array($result1)){
    
    
  ?>


  <?php

  
     echo "<table> <tr style='margin-top:-70px;'>";

    if($mostrar['Alfabetico'] != ""){
     
      echo "<td style='background-color:#EB592F;color:white;text-align:center;' colspan = '3'>" . $mostrar['Alfabetico'] . "</td>";

    }else{
     
    }
        
        ?></td>


  
  </tr>
  <tr>
    <td style="background-color:#071637;color:white;text-align:center;border-right:1px solid white;">Familia</td>
    <td style="background-color:#071637;color:white;text-align:center;border-right:1px solid white;">Descripción Quimica</td>
    <td style="background-color:#071637;color:white;text-align:center;border-right:1px solid white;">CAS #</td>
  </tr>
  <tr>
    <td style="text-align:center;width: 33.33%;"><?php echo $mostrar['Familia']?></td>
    <td style="text-align:center;width: 33.33%;"><?php echo $mostrar['Producto']?></td>
    <td style="text-align:center;width: 33.33%;"><?php echo $mostrar['CAS']?></td>
  </tr>
</table>
<?php
}
?>

   
