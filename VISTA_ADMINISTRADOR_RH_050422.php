<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chemical Broker RH Register</title>
<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link rel="stylesheet" href="css/LoginRH.css" type="text/css" rel="stylesheet" media="screen,projection">
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/Inicio_sesion.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
</script>
<style>
body{
    overflow-x: hidden;
}
html{
    overflow-x: hidden;
}

.contlog{

}

@media screen and (max-width:576px){
    .contlog{
     width: 100%;
    }
    .avatar{
    display: none;
}
}

@media screen and (min-width:1750px){
    .contlog{
     width: 50%;
    }


}
</style>
</head>
<body style="background-color:;">



<?php
include "./conexion.php";
$cnn = new conexion();
$conexion = $cnn -> conectar();
mysqli_select_db($conexion,"cb_rh");
if(isset($_GET['id'])){
    $query = "SELECT * FROM rh_usuarios WHERE id = '{$_GET['id']}'";
    $mostrar = mysqli_fetch_assoc(mysqli_query($conexion,$query));
    
}
?>


<nav style="background-color:white;height:25px;margin-top:auto;">
<div class="nav-wrapper flex"><a class="sidenav-trigger" href="#" data-target="mobile-demo"><i
class="material-icons letranegro">menu</i></a><span class="Pmenu letranegro">Menu</span>
<ul class="hide-on-med-and-down">
<li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos"
href="Mercados.php"><b>Mercados</b></a></li>
<li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos" href="Productos_news.php"><b>Productos
</b></a></li>
<li><a class="elemennav-secun Tipografia--general letranegro Subtitulos"
<li><a class="elemennav-secun Tipografia--general letranegro Subtitulos" href="Servicios.php"><b>Servicios</b></a></li>
<li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos"
href="Cumplimiento.php"><b>Cumplimiento </b></a></li>
<li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos" href="Contact.php"><b>Contacto
</b></a></li>
<li><a href="Carreras.php" class="elemennav-secun Tipografia--general letranegro Subtitulos"><b>Carreras</b></a></li>
</ul>
</div>
</nav>

<!-- <h5 class="center-align" style="padding-top:20px;"><b>Bienvenido a Chemical Broker</b></h5> -->


<div class="container">
<div class="row">
    <div class="col s12 m12 l12 xl12 center-align" style="padding:50px;">
        <h5 class="letranegro Tipografia--general General--Cuerpo">!!Consigue la Excelencia!!</h5>
    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m12 l12 xl12">

        <table id="table_id" class="display compact cell-border">
<thead>
    <tr class="center-align">
        <th style="text-align: center !important;">ID</th>
        <th style="text-align: center;">Usuario</th>
        <th style="text-align: center;">Contraseña</th>
    </tr>
</thead>
<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"cb_rh");
$query = "SELECT * FROM rh_usuarios";
$resultado = mysqli_query($con,$query);
while($mostrar = mysqli_fetch_array($resultado)){


?>
<tbody>
    <tr>
        <td style="text-align: center;"><?php echo $mostrar["id"];    ?></td>
        <td style="text-align: center;"><?php echo $mostrar["usuario"];    ?></td>
        <td style="text-align: center;"><?php echo $mostrar["contrasena"];   ?></td>
    </tr>
    <?php
    }
    ?>
</tbody>


        </table>

         
        </div>
    </div>
</div>





<script src="js/materialize.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>
