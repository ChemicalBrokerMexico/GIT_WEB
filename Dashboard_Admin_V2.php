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



 

    <nav style="background-color:white;padding-right:50px;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"> <img src="img/CB_IMAGOTIPO_LEON.jpg" alt=""
                    style="width:40%;padding:20px;margin-top:-16px"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Publicar_Anuncio.php" class="modal-trigger" style="color:black;"><b>Publicar Anuncio</b></a></li>
                <li><a href="Buscar_Candidatos.php" style="color:black;"><b>Buscar Candidatos</b></a></li>
                <li><a class='dropdown-trigger' href='#' data-target='dropdown1' style="color:black;"><b>Notificaciones</b></a>
                </li>
                <li> <a class='dropdown-trigger' href='#' data-target='dropdown2' style="color:black;"><b>Usuario</b></a></li>
            </ul>
            <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">1. Ejemplo de Notificaciones</a></li>
  </ul>

  <ul id='dropdown2' class='dropdown-content'>
    <li><a href="#!">Cerrar Sesión</a></li>
  </ul>

        </div>
    </nav>

    <nav style="background-color:white;height:30px;background-color:#262137;">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="left hide-on-med-and-down" style="margin-top:-17px;">
                <li><a href="Anuncios.php" style="color:white;">Anuncios</a></li>
                <li><a href="Base_Candidatos.php" style="color:white;">Candidatos</a></li>
                <li><a class='Agenda.php' href='#' data-target='dropdown1' style="color:white;">Agenda</a></li>
                <li> <a class='Configuracion.php' href='#' data-target='dropdown1' style="color:white;">Configuración</a>
                </li>
                <li> <a class='dropdown-trigger' href='#' data-target='dropdown1' style="color:white;">Ayuda</a></li>
            </ul>
        </div>
    </nav>

    <div class="container contenedor_opciones_rh">
        <div class="row" style="margin-top:12px;">
            <div class="col s12 m12 l14 xl4"
                style="background-color:#ff6868;margin-left:-472px !important;padding-bottom:30px;border:3px solid white;">
                <h5 style="text-align:center;color:white;padding-top:10px;"><b><span style="font-size:70px;">5</span><br><br>Nuevos
                        Candidatos</b></h5>
                <ol>
                    <li style="list-style-type:disc;color:#071637;"><b>Últimos 7 días: 0</b></li>
                    <li style="list-style-type:disc;color:#071637;"><b>Últimos 30 días: 0</b></li>
                    <li style="list-style-type:disc;color:#071637;"><b>Total en mi Base de Candidatos: 8</b></li>
                </ol>
                <div class="container center-align">
                    <a href="Base_Candidatos.php" class="btn center-align" style="background-color:#071637;border-radius:10px;">Ir a mi Base de
                        Candidatos</a>
                </div>
            </div>
            <div class="col s12 m12 l4 xl4" style="background-color:#05a705;padding-bottom:30px;border:3px solid white;">
                <h5 style="text-align:center;color:white;padding-top:10px;"><b><span style="font-size:70px;">3</span><br><br>Anuncios
                        Activos</b></h5>
                <ol>
                    <li style="list-style-type:disc;color:#071637;"><b>Últimos 7 días: 0</b></li>
                    <li style="list-style-type:disc;color:#071637;"><b>Publicados total: 3</b></li>
                </ol>
                <div class="container center-align">
                    <a href="Anuncion_Activos.php" class="btn center-align" style="margin-top:23px;background-color: #071637;border-radius:10px;">Ver Todos Mis
                        Anuncios</a>
                </div>
            </div>
            <div class="col s12 m12 l4 xl4" style="background-color:#ffa93c;padding-bottom:30px;border:3px solid white;">
                <h5 style="text-align:center;color:white;padding-top:10px;"><b><span style="font-size:70px;">0</span><br><br>Entrevistas
                        hoy</b></h5>
                <ol>
                    <li style="list-style-type:disc;color:#071637;"><b>Esta Semana: 0</b></li>
                    <li style="list-style-type:disc;color:#071637;"><b>Este Mes: 0</b></li>
                </ol>
                <div class="container center-align">
                    <a href="Agenda.php" class="btn center-align" style="background-color:#262137;margin-top:23px;background-color: #071637;border-radius:10px;">Ir a mi
                        Agenda</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container contenedor_opciones_rh" style="border: 1px solid black;border-radius:10px;">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <h5 style="color:#262137;">Reporte</h5>
                <hr style="margin-top:15px;">
            </div>
        </div>
        <div class="row" style="display:flex;justify-content:center;align-items:center;">
            <div class="col s12 m12 l3 xl3">
            <label for="select_anuncio">Anuncio</label>
                <select name="" id="" style="width:;" id="select_anuncio">
                    <option value="" disabled selected>Seleccione un Anuncio</option>
                </select>
            </div>

            <div class="col s12 m12 l3 xl3">
            <label for="date_desde">Desde</label>
            <input type="date" style="width:;" id="date_desde">
            </div>
            <div class="col s12 m12 l3 xl3">
            <label for="date_hasta">Hasta</label>
                <input type="date" style="width:">
            </div>
            <div class="col s12 m12 l3 xl3">
                <a href="" class="btn" style="color:white;width:100%;background-color:#071637;">Ejecutar</a>
            </div>

        </div>
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <h5 style="color:#262137;">Reporte del intervalo de fechas: 11-10-2022 - 11-11-2022 | Total: 21 Visitas
                    y 0 Posiciones</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <img src="img/GRAFICA_PRUEBA_RH_111122.JPG" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l6 xl1">
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Postulaciones</span>
                    </label>
                </p>
            </div>
            <div class="col s12 m12 l6 xl1">
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Visitas</span>
                    </label>
                </p>
            </div>
        </div>

    </div>



    <footer style="margin-top:220px;">
        <div class="divfooter" style="text-align:center;"><img class="imglogoCE"
                src="img/CE_ESCUDO_FONDO-TRANSPARENTE.png" alt=""></div><br><br>
        <div class="container-fluid center-align" style="margin-top:-50px">
            <p class="Tipografia--general letranegro center-align Pie--Pagina">© 2014 | Chemical Broker Todos los
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