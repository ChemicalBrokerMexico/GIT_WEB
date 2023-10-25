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
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
            <h5>Empleos</h5>
            <div class="col s6 m6 l6 xl6" style="margin-top:10px;">
                <button type="button" class="btn btn-default" A style="background-color:blue;color:white;border-radius:10px">Abierto y en Pausa</button>
                <button type="button" class="btn btn-default" style="background-color:white;color:blue;border-radius:10px">Cerrado</button>
            </div>
            </div>
        </div>
    </div>
    

