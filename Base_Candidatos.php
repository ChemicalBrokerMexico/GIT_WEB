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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
    </script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script>
$(document).ready(function() {
    $('#table_id').DataTable({
        });  
    });
    </script>
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


    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#!">Prueba de Notificaciones</a></li>
    </ul>

    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="Cerrar_Sesion.php" >Cerrar Sesión</a></li>
    </ul>

    <nav style="background-color:white;height:80px;padding-right:50px;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"> <img src="img/CB_IMAGOTIPO_LEON.jpg" alt=""
                    style="width:46%;padding:20px;margin-top:-16px"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Publicar_Anuncio.php" style="color:black;">Publicar Anuncio</a></li>
                <li><a href="badges.html" style="color:black;">Buscar Candidatos</a></li>
                <li><a class='dropdown-trigger' href='#' data-target='dropdown1' style="color:black;">Notificaciones</a>
                </li>
                <li> <a class='dropdown-trigger' href='#' data-target='dropdown2' style="color:black;">Usuario</a></li>
            </ul>
        </div>
    </nav>

    <nav style="background-color:white;height:49px;background-color:#262137;">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="sass.html" style="color:white;">Anuncios</a></li>
                <li><a href="badges.html" style="color:white;">Candidatos</a></li>
                <li><a class='dropdown-trigger' href='#' data-target='dropdown3' style="color:white;">Agenda</a></li>
                <li> <a class='dropdown-trigger' href='#' data-target='dropdown4' style="color:white;">Configuración</a>
                </li>
                <li> <a class='dropdown-trigger' href='#' data-target='dropdown5' style="color:white;">Ayuda</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <ul id="slide-out" class="sidenav position-fixed"
                    style="left: 330px !important;top:140px !important;height:90%;">
                    <li>
                        <div class="col s12 m12 l12 xl12">
                            <h5 style="font-size: 16px;font-family:Arial;color:#071637;"><b>Filtros</b></h5>
                            <hr style="color:#071637;">
                            <p style="font-size:16px;font-family:Arial">Filtros Activos</p>
                            <ol>
                                <li style="color:#071637;list-style-type:disc;">Sin Filtros</li>
                            </ol>
                            <input type="search" class="center-align;">
                            <p style="font-size: 16px;font-family:Arial">CV</p>
                            <a href="">Leídos</a>
                            <br>
                            <a href="">No Leídos</a>
                            <p style="font-size:16px;font-family:Arial;">Estado</p>

                            <a href="">Desbloqueados</a>
                            <p style="font-size:16px;font-family:Arial">Edad</p>
                         
                                <p class="range-field">
                                    <input type="range" id="test5" min="0" max="100" />
                                </p>
                                <div class="container center-align" >
                           <a href="" class="btn" style="background-color:#071637;">Aplicar</a>
                           </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container" style="border:1px solid black;margin-left:20%;">
        <div class="row" style="display:flex;justify-content:center;align-items:center;">
            <div class="col s12 m12 l6 xl6">
            <h5 style="font-size: 16px;font-family:Arial;color:#071637;padding:20px;"><b>Listado de Candidatos</b></h5>
            </div>
            <div class="col s12 m12 l6 xl6">
                <select name="" id="">
           <option value="#" selected disabled>Ver Todas las Postulaciones</option>
                </select>
            </div>
        </div>
        <div class="row">
        <hr style="background-color:#071637;">
            <div class="col s12 m12 l12 xl12">
                <select name="" id="">
                    <option value="#" selected disabled>Ordenar por</option>
                </select>
            </div>
            <div class="container">
                <div class="col s12 m12 l12 xl12" style="display:flex;justify-content:flex-end;align-items:flex-end">
                    <a href="">Todos (8) &nbsp</a> 
                    <a href="">Descartados (2)</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12 xl12">
                        <table style="width:100%;margin-top:20px;border:1px solid #071637" id="table_id" class="display compact cell-border responsive">
                        <thead>
                            <tr>
                                <th style="border:1px solid #071637" class="center-align">Candidato</th>
                                <th style="border:1px solid #071637" class="center-align">Carrera</th>
                                <th style="border:1px solid #071637" class="center-align">Edad</th>
                                <th style="border:1px solid #071637" class="center-align">Genero</th>
                                <th style="border:1px solid #071637" class="center-align">Experiencia</th>
                                <th style="border:1px solid #071637" class="center-align">Afinidad</th>
                                <th style="border:1px solid #071637" class="center-align">Adicional</th>
                                <th style="border:1px solid #071637" class="center-align">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                             include "conexion.php";
                               $con = new conexion();
                               $Conexion = $con -> conectar();
                               $seleccion = mysqli_select_db($Conexion,"cb_rh");
                               $query = "SELECT * FROM candidatos";
                               $resultado = mysqli_query($Conexion,$query);
                               while($mostrar = mysqli_fetch_array($resultado)){
                                        ?>
                                        <tr>
                                        <td class="center-align" id="Dtype1" style="border:1px solid black;"><?php echo $mostrar['Nombre_Candidato']; ?></td>
                                        <td class="center-align" id="Dtype1" style="border:1px solid black;"><?php echo $mostrar['Carrera_Candidato']; ?></td>
                                        <td class="center-align" id="Dtype1" style="border:1px solid black;"><?php echo $mostrar['Edad_Candidato']; ?></td>
                                        <td class="center-align" id="Dtype1" style="border:1px solid black;"><?php echo $mostrar['Candidato_Genero']; ?></td>
                                        <td class="center-align" id="Dtype1" style="border:1px solid black;"><?php echo $mostrar['Candidato_Experiencia']; ?></td>
                                        <td class="center-align" id="Dtype1" style="border:1px solid black;"><?php echo $mostrar['Candidato_Afinidad']; ?></td>
                                        <td class="center-align" id="Dtype1" style="border:1px solid black;"><?php echo $mostrar['Candidato_Adicional']; ?></td>
                                        <td class="center-align" id="Dtype1" style="border:1px solid black;">
                                        <table>
                                          <th style="background-color:#071637;color:white;">
                                            <span style="font-size:12px;"><a href="Perfil.php">Ver Perfil</a></span>
                                          </th>
                                          <tr>
                                            <td>Enviar Mensaje</td>
                                          </tr>
                                          <tr>
                                          <td>Comentarios</td>
                                          </tr>
                                          <tr>
                                          <td><a href="Descartar_Candidato.php" style="color:red;">Descartar</a></td>
                                          </tr>
                                          <tr>
                                          <td>Mas Opciones</td>
                                          </tr>
                                        </table>
                                    </td>
                           
                            </tr>
                            </tbody>
                        </table>
                        <?php
 }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer style="margin-top:45%;">
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