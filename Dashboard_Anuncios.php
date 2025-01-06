<?php
// session_start();
// $con = mysqli_connect("localhost","root","","cb_rh");
// $query = "SELECT * FROM datos_aviso ORDER BY id_aviso DESC LIMIT 1";
// $result = mysqli_query($con,$query);
// $mostrar2 = mysqli_fetch_array($result);
// if($result == true){
//     echo "true";
// }else{
//     echo "false";
// }

include "Consulta_tiempo_real.php";

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
            overflow-y: hidden;
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
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="#!">three</a></li>
        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
    </ul>

    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="#!">three</a></li>
        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
    </ul>

    <nav style="background-color:white;height:80px;padding-right:50px;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"> <img src="img/CB_IMAGOTIPO_LEON.jpg" alt=""
                    style="width:46%;padding:20px;margin-top:-16px"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Publicar_Anuncio.php" class="modal-trigger" style="color:black;">Publicar Anuncio</a></li>
                <li><a href="Buscar_Candidatos.php" style="color:black;">Buscar Candidatos</a></li>
                <li><a class='dropdown-trigger' href='#' data-target='dropdown1' style="color:black;">Notificaciones</a>
                </li>
                <li> <a class='dropdown-trigger' href='#' data-target='dropdown1' style="color:black;">Usuario</a></li>
            </ul>


        </div>
    </nav>

    <nav style="background-color:white;height:49px;background-color:#262137;">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="Anuncios.php" style="color:white;">Anuncios</a></li>
                <li><a href="Base_Candidatos.php" style="color:white;">Candidatos</a></li>
                <li><a class='Agenda.php' href='#' data-target='dropdown1' style="color:white;">Agenda</a></li>
                <li> <a class='Configuracion.php' href='#' data-target='dropdown1'
                        style="color:white;">Configuración</a>
                </li>
                <li> <a class='dropdown-trigger' href='#' data-target='dropdown1' style="color:white;">Ayuda</a></li>
            </ul>
        </div>
    </nav>

  <div class="container">
    <div class="row">
        <div class="col s12 m12 l12 xl12">
        </div>
            <?php
                $conexion = mysqli_connect("localhost","root","","cb_rh");
                $query_anuncios = "SELECT * FROM datos_aviso where Publicado = 1";
                $result = mysqli_query($conexion,$query_anuncios);
                while($mostrar = mysqli_fetch_array($result)){
            ?>
  <div class="row">
    <div class="col s12 m4">
      <div class="card" style="height:300px;background-color:#000020;">
        <div class="card-content white-text">
          <span class="card-title"><b>Responsable Comercial</b></span>
          <div class="col s12 m12 l6 xl12" style="margin-top:15px;">
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Nombre del Puesto: <?php echo $mostrar["aviso_nombre_puesto"] ?></p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Empresa: Chemical Broker México</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Tu Postulación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Ubicación: <?php echo $mostrar["aviso_pais_puesto"] ?></p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Salario: <?php echo $mostrar["aviso_salario_minimo_deseado"] ?></p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Publicado:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>ID:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Correo de Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Whatsapp:</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card" style="height:300px;background-color:#000020;">
        <div class="card-content white-text">
          <span class="card-title"><b>Responsable Comercial</b></span>
          <div class="col s12 m12 l6 xl12" style="margin-top:15px;">
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Nombre del Puesto:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Tu Postulación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Ubicación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Salario:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Publicado:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>ID:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Correo de Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Whatsapp:</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card" style="height:300px;background-color:#000020;">
        <div class="card-content white-text">
          <span class="card-title"><b>Responsable Comercial</b></span>
          <div class="col s12 m12 l6 xl12" style="margin-top:15px;">
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Nombre del Puesto:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Tu Postulación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Ubicación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Salario:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Publicado:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>ID:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Correo de Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Whatsapp:</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card" style="height:300px;background-color:#000020;">
        <div class="card-content white-text">
          <span class="card-title"><b>Responsable Comercial</b></span>
          <div class="col s12 m12 l6 xl12" style="margin-top:15px;">
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Nombre del Puesto:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Tu Postulación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Ubicación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Salario:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Publicado:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>ID:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Correo de Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Whatsapp:</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card" style="height:300px;background-color:#000020;">
        <div class="card-content white-text">
          <span class="card-title"><b>Responsable Comercial</b></span>
          <div class="col s12 m12 l6 xl12" style="margin-top:15px;">
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Nombre del Puesto:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Tu Postulación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Ubicación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Salario:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Publicado:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>ID:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Correo de Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Whatsapp:</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card" style="height:300px;background-color:#000020;">
        <div class="card-content white-text">
          <span class="card-title"><b>Responsable Comercial</b></span>
          <div class="col s12 m12 l6 xl12" style="margin-top:15px;">
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Nombre del Puesto:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Tu Postulación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Ubicación:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Salario:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Publicado:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>ID:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Correo de Empresa:</p>
            </div>
            <div class="col s12 m12 l12 xl12" style="font-size:14px;margin-left:-20px;">
            <p>Whatsapp:</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      


<?php
                }

?>
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