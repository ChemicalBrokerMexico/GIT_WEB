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



    <ul id="slide-out" class="sidenav">
        <li><a class="btn" style="font-size:16px;background-color:#262137;" href="#Modal_empleo">Publicar un Empleo</a>
        </li>
        <li><a style="font-size:16px;" href="Empleos.php">Empleos <i class="material-icons">keyboard_arrow_right</i></a>
        </li>
        <li><a style="font-size:16px;" href="Candidatos.php">Candidatos <i
                    class="material-icons">keyboard_arrow_right</i></a></li>
        <li><a style="font-size:16px;" href="#Buscar_cv">Buscar CV <i
                    class="material-icons">keyboard_arrow_right</i></a></li>
        <li><a style="font-size:16px;" href="Entrevistas.php">Entrevistas <i
                    class="material-icons">keyboard_arrow_right</i></a></li>
        <li><a style="font-size:16px;" href="Analisis.php">Analisis <i
                    class="material-icons">keyboard_arrow_right</i></a></li>
        <li><a style="font-size:16px;" href="Herramientas.php">Herramientas <i
                    class="material-icons">keyboard_arrow_right</i></a></li>
    </ul>



    <nav id="nav_oscuro" style="background-color:white;height:100px;margin-top:-15px;">
        <div class="row">
            <div class="col s12 m12 l4 xl1">
                <img src="img/CB_IMAGOTIPO_LEON.jpg" alt="" style="width:50%;margin-top:20px;">
                <a href="#" data-target="slide-out" class="sidenav-trigger"
                    style="color:black;display:inline-block;margin-top:25px;"><i class="material-icons">menu</i></a>
            </div>
            <div class="col s12 m12 l4 xl7" style="margin-top:25px;text-align:center">
                <div style="display:inline-block;">
                    <i class="material-icons" style="display:inline-block;color:black;">help</i>
                </div>
                <div style="display:inline-block;margin-left:15px;">
                    <i class="material-icons" style="display:inline-block;color:black;">notifications</i>
                </div>
                <div style="display:inline-block;margin-left:15px;">
                    <i class="material-icons" style="display:inline-block;color:black;">email</i>
                </div>
                <div style="display:inline-block;margin-left:15px;">
                    <p data-target='dropdown1' style="color:#262137;display:inline-block;">
                        human.resources@chemicalbroker.mx <i class="material-icons"
                            style="display:inline-block;color:black;">account_box</i></p>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <h5 style="font-family:Arial;font-size:16px"><b>Candidatos</b></h5>
                <p>Contador - Chemical Broker - Naucalpan - Naucalpan, Méx.</p>
                <hr>
                <a href="" class="btn" style="color:black;">Filtros</a>
                <a href="" class="btn" style="color:black;">0 Activo</a>
                <a href="" class="btn" style="color:black;">0 En Espera de Valoración</a>
                <a href="" class="btn" style="color:black;">0 Valorado</a>
                <a href="" class="btn" style="color:black;">0 En Contacto</a>
                <a href="" class="btn" style="color:black;">0 Rechazado</a>
                <a href="" class="btn" style="color:black;float:right;">Añadir candidato <i class="material-icons"
                        style="float:right;">more_vert</i></a>
            </div>
        </div>
    </div>

    <div class="container" style="border-radius:10px;background-color:white;">
        <div class="row">
            <div class="col s12 m6 l6 xl8" style="border: 1px solid #262137;width:60%;">
                <div class="center-align">
                    <img src="img/CB_IMAGOTIPO_LEON.jpg" alt="" style="opacity: 0.5;width:250px;margin-top:px;">
                    <br>
                    <h5>Aun no tiene candidatos</h5>
                    <div class="row">
                        <div class="col s12 m6 l6 xl6"><a href="" class="btn" style="color:black;">Editar Ofertar de
                                Empleo</a></div>
                        <div class="col s12 m6 l6 xl6"><a href="" class="btn" style="color:black;">Ver Todas las Ofertas
                                de Empleo</a></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6 xl4" style="border:1px solid #262137;float:right;padding-bottom:15px;">
             <div class="center-align">
                <h5 style="font-size:16px;">Próximas Entrevistas Programadas</h5>
                <p style="font-size:14px;float:left;">Todos los Empleados</p>
               <div class="col s12 m12 l12 xl12" style="border:1px solid black;border-radius:10px;">
                <p>Sin entrevistas Programadas</p>
               </div>
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