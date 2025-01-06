<!DOCTYPE html>
<html lang="es">
<?php
// session_start();

// $con = mysqli_connect("localhost","root","","cb_rh");

// $usuario = $_SESSION['txtUsu'];

// $query = "SELECT * FROM rh_usuarios WHERE usuario = '".$_SESSION['txtUsu']."'";

// $result = mysqli_query($con,$query);

// $mostrar = mysqli_fetch_array($result);

// echo $mostrar['id'];

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

<script>

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $("#btnEntrar").click();
    }
});


</script>


</head>

<body style="background-color:;">
    

    <!-- <h5 class="center-align" style="padding-top:20px;"><b>Bienvenido a Chemical Broker</b></h5> -->

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
                <div class="col s12 m12 l12 xl12" style="margin-top: -120px;">
                    <div class="container contlog center-align"
                        style="background-color: white;margin-top:55px;padding:20px;border-radius:5px;">
                        <h5 class="Tipografia--general letranegro General--Cuerpo"><b style="color:#262137;">Edicion de Usuarios</b></h5>
                        <form class="div-form" role="form">
                            <div class="input-field col s12 m12 l12 xl12">
                                <input type="email" id="txtUsu" name="txtUsu" value="" placeholder="Correo Electronico"
                                    class="center-align">
                            </div>
                            <div class="input-field col s12 m12 l12 xl12">
                                <input type="password" id="txtContrasena" name="txtContrasena" value=""
                                    placeholder="Contraseña" class="login-inputs center-align" /><a href="#"
                                    style="color: black;" id="eyeon"><i class="material-icons prefix"
                                        style="font-size:25px;padding-top:10px"
                                        onclick="mostrarcontra();">visibility</i></a><a href="#"
                                    style="color: black;display: none;" id="eyeoff"><i class="material-icons prefix"
                                        style="font-size:25px;padding-top:10px"
                                        onclick="mostrarcontra();">visibility_off</i></a>
                            </div>
                            <div class="input-field col s12 m12 l12 xl12">
                                <select name="sel_privilegio" id="sel_privilegio">
                                    <option value="0" disabled selected>Privilegio</option>
                                    <option value="admin">Administrador</option>
                                    <option value="user">Usuario</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12 xl12 center-align" style="margin-top:20px;">
                                    <!-- <button type="submit" class="btn center-align" style="background-color: #262137;" onclick="alertsweet();">Iniciar Sesion</button> -->
                                    <center><a href="#" id="btnEntrar" class="waves-effect btn center-align"
                                            style="background-color:#262137;color:white;width:200px;">Registrar</a>
                                    </center>
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
        $(document).ready(ini);
        function ini() {
            $("#btnEntrar").click(alertsweet)
        }
        function alertsweet() {
            var usuario = $("#txtUsu").val();
            var contrasena = $("#txtContrasena").val();
            var selectype = $("#sel_privilegio").val();
            $.ajax({
                url: "Edicion_Usuarios_RH.php",
                success:function(result) {
                    if(result=="true") {
                        swal("Edicion Exitosa","","success")
                        document.location.href = "LOGIN_RH.php";
                    } else {
                        swal("Edicion Incorrecta", "", "error");
                    $('#txtUsu').val('');  
                    $('#txtContrasena').val('');
                    }
                },
                data: {
                    txtUsu: usuario,
                    txtContrasena: contrasena,
                    sel_privilegio: selectype
                },
                type: "GET"
            });
        }

    </script>

    <footer style="margin-top:20px">
    <div class="divfooter" style="text-align:center;"><img class="imglogoCE" src="img/CE_ESCUDO_FONDO-TRANSPARENTE.png"
            alt=""></div><br><br>
    <div class="container-fluid" style="text-align:center;margin-top:-50px">
        <p style="color:black;text-align:center;font-size:16px">© 2014 | Chemical Broker Todos los Derechos
            Reservados.
            | <a href="Contact.php" style="color:black !important;font-size:16px">Contacto | </a><a
                href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download
                style="color:black !important;font-size:16px">Politica de
                Privacidad </a>
            <script type="text/javascript" src="js/main.js"></script></a></strong>
        </p>
        <script type="text/javascript" src="js/Products.js"></script>
    </div>
</footer>





    <script src="js/materialize.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
</body>

</html>