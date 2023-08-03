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

<body style="background-color:;">
    <nav style="background-color:white;height:25px;margin-top:auto;">
        <div class="nav-wrapper flex"><a class="sidenav-trigger" href="#" data-target="mobile-demo"><i
                    class="material-icons letranegro">menu</i></a><span class="Pmenu letranegro">Menu</span>
            <ul class="hide-on-med-and-down">
                <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos"
                        href="Mercados.php"><b>Mercados</b></a></li>
                <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos"
                        href="Productos_news.php"><b>Productos
                        </b></a></li>
                <li><a class="elemennav-secun Tipografia--general letranegro Subtitulos"
                        <li><a class="elemennav-secun Tipografia--general letranegro Subtitulos" href="Servicios.php"><b>Servicios</b></a></li>
                <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos"
                        href="Cumplimiento.php"><b>Cumplimiento </b></a></li>
                <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos" href="Contact.php"><b>Contacto
                        </b></a></li>
                <li><a href="Carreras.php"
                        class="elemennav-secun Tipografia--general letranegro Subtitulos"><b>Carreras</b></a></li>
            </ul>
        </div>
    </nav>

    <!-- <h5 class="center-align" style="padding-top:20px;"><b>Bienvenido a Chemical Broker</b></h5> -->

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <h5 class="Tipografia--general General--Cuerpo center-align" style="padding:15px;color: #262137;">
                    <b>Bienvenid@ a Chemical Broker</b>
                </h5>
            </div>
        </div>
    </div>

    <div>
        <div class="row" style="padding: 0px;margin:0px;">
            <div class="col s7 l6 l6 xl6 avatar" style="margin-top: -100px;">
                <div class="center-align">
                    <img src="img/CB_IMAGOTIPO_LEON.jpg" alt="" class="imagotipo_leon_RH"
                        style="width:250px;margin-top:35%;">
                    <hr style="border-bottom:3px solid #c73e32;width:70%;">
                    <h1>!!Consigue la Excelencia!!</h1>
                </div>
            </div>
            <div class="col s12 m6 l6 xl6" style="padding: 40px;margin-top:100px;">
                <div class="col s12 m12 l12 xl12 center-align">
                    <img src="IMG/CB_IMAGOTIPO_AZUL.png" class="center-align" alt="" style="max-width:280px;">
                    <h1 style="font-family:Edwardian Script ITC !important;color: white;">Lion Sales</h5>
                </div>
                <div class="col s12 m12 l12 xl12">
                    <div class="container contlog center-align"
                        style="background-color: white;margin-top:55px;padding:20px;border-radius:5px;">
                        <form class="div-form" role="form">
                            <div class="input-field col s12 m12 l12 xl12">
                                <input type="email" id="txtUsu" name="txtUsu" onchange="lowercase();" placeholder="Correo Electronico"
                                    class="center-align">
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12 xl12 center-align" style="margin-top:20px;">
                        <!-- <button type="submit" class="btn center-align" style="background-color: #262137;">Cambiar
                            Contraseña</button> -->
                            <a href="#" id="btnCambiar" class="waves-effect btn center-align" style="background-color: #262137;color: white;width:200px;">Cambiar contraseña</a>
                    </div>
                </div>
                </form>
                <!-- <label>
                            <div class="col s12 m12 l12 xl12" style="margin-top:20px;">
                                <input type="checkbox" id="Recordar" name="Recordar" value="false"
                                    onclick="verdad();" />
                                <span>Recodar Usuario</span>
                        </label> -->


                <br>
                <br>

            </div>

        </div>

    </div>

    </div>
    </div>

    <script>
        $(document).ready(sweet);

        function sweet() {
            $('#btnCambiar').click(sweetcambiar)
        }

        function sweetcambiar() {
            var usuario1 = $("#txtUsu").val();
            $.ajax({
                url: "Buscar_Correo.php",
                success:function(result) {
                    if (result=="true") {
                        swal("Usuario Encontrado", "", "success")
                        document.location.href = "Restablecer_Contraseña.php?"+"usuario"+"="+usuario1;
                    } else {
                        swal("Usuario no registrado en la base de datos", "", "error")
                        window.location.href = 'Registro_RH.php';
                    }
                },
                data: {
                    txtUsu: usuario1
                },
                type: "GET"

            });
        }
    </script>
    <script src="js/materialize.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
</body>

</html>