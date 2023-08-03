<?php
if($_GET["aplicacion"] == "Nasal Sprays" || "Creams" || "Tabletas Duras" || "Jarabes" || "Acidos" || "Polietilenglicol"){
    echo "<script type='text/javascript'>
    document.getElementById('Mercado').style.fontWeight = 'bold';
    document.getElementById('Mercado').innerHTML = 'Farmaceutica >&nbsp ';
    </script>";
}else{
    echo "<script type='text/javascript'>
    document.getElementById('Mercado').style.value = 'Alimentos'
    </script>";    
}

?>