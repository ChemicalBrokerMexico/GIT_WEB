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
mysqli_select_db($conexion,"b8iu0m6g_cb_rh");
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


<div>
<div class="row" style="padding: 0px;margin:0px;">
<div class="col s7 l6 l6 xl6 avatar" style="margin-top: -100px;">
<div class="center-align">
<img src="img/CB_IMAGOTIPO_LEON.jpg" alt="" class="imagotipo_leon_RH" style="width:250px;margin-top:35%;"> 
<hr style="border-bottom:3px solid #c73e32;width:70%;">
<h1>!!Consigue la Excelencia!!</h1>
</div> 
</div>
<div class="col s12 m6 l6 xl6" style="padding: 40px;margin-top:100px;">
<div class="col s12 m12 l12 xl12 center-align">
<img src="IMG/CB_IMAGOTIPO_AZUL.png" class="center-align" alt="" style="max-width:280px;">
<h1 style="font-family:Edwardian Script ITC !important;color: white;">Lion Sales</h5>
</div>
<div class="col s12 m12 l12 xl12" style="margin-top: -120px;">
<div class="container contlog center-align" style="background-color: white;margin-top:55px;padding:20px;border-radius:5px;">
<img src="img/CB_LOGOTIPO_FONDO-BLANCO_V0.jpg" alt="" class="center-align" style="max-width:100%;">
<div role="form" class="div-form">
<div class="input-field col s12 m12 l12 xl12">
<input type="email" id="txtUsu" name="txtUsu" value="<?php echo $mostrar['usuario']?>" class="center-align">
</div>
<div class="input-field col s12 m12 l12 xl12">
<input type="password" id="txtContrasena" name="txtContrasena" placeholder="Contraseña" value="<?php $mostrar['contrasena']?>" class="login-inputs center-align"/><a href="#" style="color: black;" id="eyeon"><i class="material-icons prefix" style="font-size:25px;padding-top:10px" onclick="mostrarcontra();">visibility</i></a><a href="#" style="color: black;display: none;" id="eyeoff"><i class="material-icons prefix" style="font-size:25px;padding-top:10px" onclick="mostrarcontra();">visibility_off</i></a>
</div> 
<div class="row">
<div class="col s12 m12 l12 xl12 center-align" style="margin-top:20px;">
<label>
<input type="checkbox" name="terminos_condiciones" id="terminos_condiciones">
<span>Al continuar, acepta nuestros <a href="#">Terminos y Condiciones</a></span>
</label>
<!-- <button type="submit" class="btn center-align" style="background-color: #262137;margin-top:20px;">Registrarse</button> -->
<input type="hidden" name="id" id="id" value="<?php echo $mostrar['id'];?>"></a>
<center><a href="#" id="modificarusuario" class="waves-effect btn center-align" style="background-color:#262137;color:white;width: 150px;" >Modificar</a></center>
</div>
</div>
</div>
<br>
<br>

</div>

</div>

</div>

</div>
</div>
</div>

</div>






<script src="js/materialize.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>
