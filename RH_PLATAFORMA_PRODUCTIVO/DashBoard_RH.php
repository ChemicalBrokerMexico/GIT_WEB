<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<?php
$con = mysqli_connect("localhost","b8iu0m6g_root","Ch3m1c4lbr0k3r","b8iu0m6g_cb_rh");

$query = "SELECT * FROM rh_general INNER JOIN rh_usuarios ON rh_usuarios.id = rh_general.fk_generales WHERE rh_usuarios.id = '".$_SESSION['id']."' ";

$result = mysqli_query($con, $query);

$mostrar = mysqli_fetch_array($result);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemical Broker RH Register</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="css/LoginRH.css" type="text/css" rel="stylesheet" media="screen,projection">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        body {
            overflow-x: hidden;
        }

        html {
            overflow-x: hidden;
        }

        .contlog {}

        @media screen and (max-width:576px) {
            .contlog {
                width: 100%;
            }

            .avatar {
                display: none;
            }
        }

        @media screen and (min-width:1750px) {
            .contlog {
                width: 50%;
            }


        }
    </style>

</head>

<body>
    <?php
// $conexion = mysqli_connect("localhost","root","","cb_rh");
// $query = "SELECT * FROM rh_general WHERE nombre = '{$_SESSION["txtUsu"]}'";
// $resultado = mysqli_query($conexion,$query);
// $mostrar = mysqli_fetch_array($resultado);
// if(mysqli_num_rows($resultado)>1){
    //     echo "Correcto";
    // }else{
        //     echo "No funciona";
        //     header("LOCATION:LOGIN_RH.php");
        // }
        ?>
    <nav style="background-color:white;height:25px;margin-top:auto;">
        <div class="nav-wrapper flex" style="float: left;padding-left:60px;"><a class="sidenav-trigger" href="#"
                data-target="mobile-demo"><i class="material-icons letranegro">menu</i></a><span
                class="Pmenu letranegro">Menu</span>
            <ul class="hide-on-med-and-down">
                <li> <a class="Tipografia--general letranegro Subtitulos" href="Mercados.php"><b>Mercados</b></a></li>
                <li> <a class="Tipografia--general letranegro Subtitulos" href="Productos_news.php"><b>Productos
                        </b></a></li>
                <li><a class="Tipografia--general letranegro Subtitulos" <li><a class="elemennav-secun Tipografia--general letranegro Subtitulos" href="Servicios.php"><b>Servicios</b></a></li>
                <li> <a class="Tipografia--general letranegro Subtitulos" href="Cumplimiento.php"><b>Cumplimiento
                        </b></a></li>
                <li> <a class="Tipografia--general letranegro Subtitulos" href="Contact.php"><b>Contacto
                        </b></a></li>
                <li><a href="Carreras.php" class="Tipografia--general letranegro Subtitulos"><b>Carreras</b></a></li>
            </ul>
        </div>

        <div class="nav-wrapper flex" style="float: right;padding-right:60px;"><a class="sidenav-trigger" href="#"
                data-target="mobile-demo"><i class="material-icons letranegro">menu</i></a><span
                class="Pmenu letranegro">Menu</span>
            <ul class="hide-on-med-and-down">
                <li style="margin-right:20px;"><i class="material-icons letranegro" id="aparece">notifications</i></li>
                <li><i class="material-icons letranegro" id="aparece">account_circle</i></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <ul id="slide-out" class="sidenav position-fixed"
                    style="left: 330px !important;top:50px !important;height:90%;">
                    <li class="center-align">
                        <div class="user-view">
                            <a href="#user"><i class="material-icons letranegro large">account_circle</i></a>
                        </div>
                        <div class="col s12 m12 l12 xl12">
                            <h5 class="center-align" style="font-size: 16px;font-family:Arial"><b>Usuario</b></h5>
                            <p class="center-align" style="font-size:16px;font-family:Arial">
                                <?php echo $mostrar['nombre'] . " " . $mostrar['apellido']?></p>
                            <h5 class="center-align" style="font-size: 16px;font-family:Arial"><b>Puesto</b></h5>
                            <p class="center-align" style="font-size: 16px;font-family:Arial">Sin Puesto Asignado</p>
                        </div>
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container" style="padding-left:40px;">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <ol style="display: inline;">
                    <span
                        style="background-color: #262137;color:white;border-radius:15px;padding:8px;font-size:16px;font-family:Arial"
                        id="spanprueba" name="spanprueba"></span>
                    <?php
        if($mostrar['Abierto_oportunidades'] == 0){
         
         echo "<script> 

          document.getElementById('spanprueba').innerHTML = 'No busca oportunidades'; 

           </script>


          ";


          }
        
         ?>

                    <span style="margin-left: 30px;font-size:16px;font-family:Arial">Tlalnepantla de Baz</span>
                    <span style="margin-left: 30px;font-size:16px;font-family:Arial">Busca ofertas como <b><?php echo $mostrar['Posiciones'];  ?></b></span>
                </ol>
                <ol>
                    <span><a href="https://api.whatsapp.com/send?phone=525610880580"><i
                                class="material-icons letranegro normal" style="margin-top:10px;"
                                id="aparece">local_phone</i></a></span>
                    <span style="margin-left: 30px;"><a href="PDF/CV/curriculum.pdf" download><i
                                class="material-icons letranegro normal">insert_drive_file</i></a></span>
                </ol>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s4"><a class="active" href="#test1"
                            style="font-size:16px;text-transform: none;font-family:Arial">General</a></li>
                    <li class="tab col s4"><a href="#test2"
                            style="font-size:16px;text-transform: none;font-family:Arial">Postulaciones</a></li>
                    <li class="tab col s4"><a href="#test4"
                            style="font-size:16px;text-transform: none;font-family:Arial">Favoritos</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12 m12 l12 xl12">
                <div class="container" style="margin-top:30px;">
                    <div class="row">
                        <div class="col s12 m12 l12 xl12">
                            <h5 class="Tipografia--general General--Cuerpo letranegro"
                                style="margin-left:-120px;font-size: 16px;font-family:Arial"><b>No
                                    description Assigned</b></h5>

                        </div>
                        <div class="col s12 m12 l12 xl12">
                            <h5 class="Tipografia--general General--Cuerpo letranegro"
                                style="margin-left: -120px;font-size:16px;font-family:Arial">
                                <b>Idiomas</b>
                            </h5>
                            <p style="margin-left:-120px;font-size:16px;font-family:Arial"><?php echo $mostrar['idiomas']; ?></p>
                        </div>
                        <div class="col s12 m12 l12 xl12">
                            <h5 class="Tipografia--general General--Cuerpo letranegro"
                                style="margin-left: -120px;font-size:16px;font-family:Arial">
                                <b>Intereses</b>
                            </h5>
                            <ol style="display: inline;margin-left:-160px;">
                                <span
                                    style="color:black;border-radius:15px;padding-top:20px;font-size:16px;font-family:Arial">Salario
                                    mínimo
                                    deseado</span>
                                <span style="margin-left:230px;font-size:16px;font-family:Arial">Áreas de interés</span>
                                <span style="margin-left:150px;font-size:16px;font-family:Arial">Posicion
                                    Buscada</span>
                            </ol>
                        </div>
                        <div class="col s12 m12 l12 xl12">
                            <ol style="display: inline-block;margin-left:-160px;margin-top:15px">
                                <span style="font-size:16px;font-family:Arial">
                                    MXN <?php echo $mostrar['Salario_minimo_deseado']; ?>
                                </span>
                                <span
                                    style="margin-left:330px;background-color:#262137;padding:5px;color: white;border-radius:5px;font-size: 16px;">
                                    <?php echo $mostrar['Areas_interes']; ?>
                                </span>
                                <span
                                    style="margin-left:150px;background-color:#262137;padding:5px;color:white;border-radius:5px;font-size:16px;">
                                    <?php echo $mostrar['Posiciones']; ?>
                                </span>
                                <!-- <span
                                    style="margin-left:20px;background-color:#262137;padding:5px;color:white;border-radius:5px;font-size:16px;">
                                    Back-End Developer
                                </span> -->
                            </ol>
                        </div>
                        <div class="col s12 m12 l12 xl12" style="margin-top:60px;">
                            <ol style="display: inline-block;margin-left:-300px;margin-top:15px;">
                                <span style="margin-left:140px;font-size:16px;font-family:Arial">
                                    Hard Skills Principales
                                </span>
                                <span style="margin-left:140px;font-size:16px;font-family:Arial">
                                    Hard Skills Secundarios
                                </span>
                            </ol>
                        </div>
                        <div class="col s12 m12 l12 xl12">
                            <ol style="display: inline-block;margin-left:-370px;margin-top:15px;">
                                <span
                                    style="margin-left:210px;background-color:#262137;padding:5px;color:white;border-radius:5px;font-size:16px">
                                    Sin asignar
                                </span>
                                <span
                                    style="margin-left:210px;background-color:#262137;padding:5px;color:white;border-radius:5px;font-size:16px">
                                    Sin asignar
                                </span>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div id="test2" class="col s12 m12 l12 xl12">

                <div class="container" style="margin-top: 30px;">
                    <div class="row">
                        <div class="col s12 m12 l12 xl12">
                            <h5 style="font-size:16px;font-family:Arial;margin-left:-120px;"><b>No Tienes Ofertas
                                    Actualmente</b></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div id="test3" class="col s12 m12 l12 xl12">

                <div class="container" style="margin-top:30px;">
                    <div class="row">
                        <div class="col s12 m12 l12 xl12">
                            <h5 style="font-size:16px;font-family:Arial;margin-left: -120px;"><b>No hay postulaciones
                                    actuales</b></h5>
                        </div>
                    </div>
                </div>


            </div>
            <div id="test4" class="col s12 m12 l12 xl12">

                <div class="container" style="margin-top:30px;">
                    <h5 style="font-family: Arial;font-size:16px;margin-left: -120px;"><b>Aun no has agregado ninguna
                            vacante a tus favoritos</b></h5>
                    <p style="font-family:Arial;font-size:16px;margin-left: -120px;">Tenemos muchas oportunidades que te
                        pueden interesar</p>
                </div>


            </div>
        </div>
    </div>
    <footer style="margin-top:220px;">
        <div class="divfooter" style="text-align:center;"><img class="imglogoCE"
                src="img/CE_ESCUDO_FONDO-TRANSPARENTE.png" alt=""></div><br><br>
        <div class="container-fluid center-align" style="margin-top:-50px">
            <p class="Tipografia--general letranegro center-align Pie--Pagina">© 2014 C&E | Chemical Broker Todos los
                Derechos Reservados. | <a href="Contact.php" style="color:black !important;font-size:16px">Contacto
                    |&nbsp</a><a href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download
                    style="color:black !important;font-size:16px">Politica de Privacidad </a></p>
        </div>
    </footer>



    <script src="js/materialize.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
</body>

</html>