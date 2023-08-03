<?php 

if($_GET["aplicacion"] == "Nasal Sprays" || "Creams" || "Tabletas Duras" || "Jarabes" || "Pomadas" || "Acidos" || "Polietilenglicol"){
    
    echo "<script type='text/javascript'>
    
    document.getElementById('primertr').style.backgroundColor = '#a6a6a6';
    
    </script>";
    
    echo  "<script type='text/javascript'>
    
    var x = document.getElementsByClassName('segundotr');
    
    x[0].style.backgroundColor = '#e1e1e1';
    
    </script>";
    
    echo  "<script type='text/javascript'>
    
    var y = document.getElementsByClassName('tercertr');
    y[0].style.backgroundColor = '#f0f0f0';
    
    </script>";

    echo  "<script type='text/javascript'>
    
    var y = document.getElementsByClassName('cuartotr');
    y[0].style.backgroundColor = '#e1e1e1';
    
    </script>";

    echo  "<script type='text/javascript'>
    
    var y = document.getElementsByClassName('quintotr');
    y[0].style.backgroundColor = '#f0f0f0';
    
    </script>";

    echo  "<script type='text/javascript'>
    
    var y = document.getElementsByClassName('sextotr');
    y[0].style.backgroundColor = '#e1e1e1';
    
    </script>";
    
}else if($_GET["aplicacion"] == "Meat"){
    echo "<script type='text/javascript'>
    
    document.getElementById('primertr').style.backgroundColor = '#ed7d31';
    
    </script>";
    
    echo  "<script type='text/javascript'>
    
    var x = document.getElementsByClassName('segundotr');
    
    x[0].style.backgroundColor = '#f8d7cd';
    
    </script>";
    
    echo  "<script type='text/javascript'>
    
    var y = document.getElementsByClassName('tercertr');
    y[0].style.backgroundColor = '#fcece8';
    
    </script>";
}
?>