<!DOCTYPE html>

<?php

//session_start();

//echo $mostrar['id'];
//  $con = mysqli_connect("localhost", "root", "","cb_rh");

//  $query = "SELECT * FROM rh_usuarios";

//  $result = mysqli_query($con,$query);

//  $mostrar = mysqli_fetch_array($result);

//  if(mysqli_num_rows($result) > 1){
//      echo "true";
//  }else{
//      mysqli_error($con);
//  }

//  $user_id;

//  $_SESSION[$mostrar['id']] = $user_id; 
?>
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

<body style="background-image:url(img/CB_IMAGOTIPO_AZUL.png)">

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


    <div class="container" style="margin-top:50px;">
        <h5 style="font-size:16px;font-family:Arial" class="center-align"><b style="color:#212637;">Datos Generales</b>
        </h5>
    </div>

    <div class="container center-align" style="border:1px solid #262137;border-radius:10px;">
        <div class="row">
            <form class="div-form" action="REGISTRO_GENERAL_SQL.php" method="POST">
                <div class="input-field col s12 m12 l6 xl6">
                    <input type="text" name="nombre" id="nombre" required>
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s12 m12 l6 xl6">
                    <input type="text" name="apellidos" id="apellidos" required>
                    <label for="nombre">Apellidos</label>
                </div>
                <div class="input-field col s12 m12 l6 xl6">
                    <select name="oportunidades" id="oportunidades">
                        <option value="" disabled selected>Oportunidades</option>
                        <option value="true">Si</option>
                        <option value="true">No</option>
                        <label for="oportunidades">Oportunidades</label>
                    </select>
                </div>
                <!-- <div class="input-field col s12 m12 l6 xl6">
                <input type="text" id="Pronombre" name="Pronombre">
                <label for="Pronombre">Pro-nombre</label>  
            </div> -->
                <!-- <div class="input-field col s12 m12 l6 xl6">
                <select name="reubicacion" id="reubicacion">
                    <option value="" disabled selected>Reubicacion</option>
                    <option value="true">Si</option>
                    <option value="false">No</option>
                </select>
            </div> -->
                <div class="input-field col s12 m12 l6 xl6">
                    <input type="text" id="ubicacion_actual" name="ubicacion_actual">
                    <label for="ubicacion_actual">Ubicacion Actual</label>
                </div>
                <!-- <div class="input-field col s12 m12 l6 xl6">
                <select name="busca_ofertas" id="busca_ofertas">
                    <option value="" disabled selected>Buscas ofertas</option>
                    <option value="true">Si</option>
                    <option value="false">No</option>
                </select>
            </div> -->
                <div class="input-field col s12 m12 l6 xl6">
                    <select name="idiomas[]" id="idiomas" multiple>
                        <option value="" disabled >Idiomas</option>
                        <option value="Ingles">Ingles</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="input-field col s12 m12 l6 xl6">
                    <input type="number" name="salario_deseado" id="salario_deseado">
                    <label for="salario_deseado">Salario Deseado</label>
                </div>
                <div class="input-field col s12 m12 l6 xl6">
                    <select name="areas_interes[]" id="areas_interes" multiple>
                        <option value="" disabled >Areas de Interes</option>
                        <option value="Informatica">Informatica</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="input-field col s12 m12 l6 xl6">
                    <select name="posiciones" id="posiciones">
                        <option value="" disabled>Posicion</option>
                        <option value="Desarrollador">Desarrollador</option>
                    </select>
                </div>
                <!-- <div class="input-field col s12 m12 l6 xl6">
                <select name="industrias_interes" id="industrias_interes">
                    <option value=""></option>
                    <option value=""></option>
                 
                </select>
            </div> -->
                <div class="input-field col s12 m12 l6 xl6">
                    <select name="hard_skills[]" id="hard_skills" multiple>
                        <option value="" disabled >Habilidades duras</option>
                        <option value="PHP">PHP</option>
                        <option value="sql">sql</option>
                    </select>
                </div>
                <div class="input-field col s12 m12 l6 xl6">
                    <select name="hard_skills2[]" id="hard_skills2">
                        <option value="" disabled selected>Habilidades blandas</option>
                        <option value="Comunicacion">Comunicacion</option>
                    </select>
                </div>
                <div class="input-field col s12 m12 l6 xl6">
                    <input type="hidden" name="form_lleno" id="form_lleno" value="0">
                    <input type="hidden" name="id" id="id" value="<?php $mostrar['id'];?>">
                </div>
                <div class="container center-align">
                    <div class="row">
                        <div class="col s12 m12 l12 xl12">
                        <button type="submit" id="btn" class="btn" style="background-color:#262137" onclick="campos_general();">Enviar</button>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
    </form>


    <script>

function campos_general(){
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById("apellidos"); 
    var abierto_oportunidades = document.getElementById("oportunidades");
    var ubicacion_actual = document.getElementById("ubicacion_actual");
    var Idiomas = document.getElementById("idiomas");
    var salario_minimo_deseado = document.getElementById("salario_deseado");
    var areas_interes = document.getElementById("areas_interes");
    var posiciones = document.getElementById("posiciones");
    var hard_skills_principales = document.getElementById("hard_skills");
    var hard_skills_secundarias = document.getElementById("hard_skills2");
    
    if(nombre == "" || apellido == "" || abierto_oportunidades == "" || ubicacion_actual == "" || Idiomas == "" || salario_minimo_deseado == "" || areas_interes == "" || posiciones == "" || hard_skills_principales == "" || hard_skills_secundarias == ""){
    swal("Contraseña o Usuario incorrectos!", "", "error");
    }else{
    document.getElementById("form_lleno").value = '1';
    }
}

    </script>



    <footer style="margin-top:370px;">
        <div class="divfooter" style="text-align:center;"><img class="imglogoCE"
                src="img/CE_ESCUDO_FONDO-TRANSPARENTE.png" alt=""></div><br><br>
        <div class="container-fluid center-align" style="margin-top:-50px">
            <p class="Tipografia--general letranegro center-align Pie--Pagina">© 2014 | Chemical Broker Todos los
                Derechos Reservados. | <a href="Contact.php" style="color:black !important;font-size:16px">Contacto
                    |&nbsp</a><a href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download
                    style="color:black !important;font-size:16px">Politica de Privacidad </a></p>
        </div>
    </footer>


<!-- <script type="text/javascript">

$(document).ready(ini);

function ini(){
    $("#btnregistrargen").click(alergeneral);
}


function reggen(){
    $.ajax({
        url:"RH_Datos_Generales",
        success: function (result){

        }
    })

}

</script> -->
    <script src="js/materialize.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
</body>

</html>
