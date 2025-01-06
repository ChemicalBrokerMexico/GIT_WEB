<!DOCTYPE html>
<html lang="es">
<?php
// session_start();

// $con = mysqli_connect("localhost","root","","cb_rh");

// $query = "SELECT * FROM rh_general INNER JOIN rh_usuarios ON rh_usuarios.id = rh_general.fk_generales WHERE rh_usuarios.id = '".$_SESSION['id']."' ";

// $result = mysqli_query($con, $query);

// $mostrar = mysqli_fetch_array($result);

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

<body style="background-color:;">
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


    <div class="row">
        <div class="col s12 m12 l6 xl6" style="position:sticky;">

            <h5 class="center-align Tipografia--general letranegro" style="color:black;margin-top:300px;font-size:40px;position:sticky;">Bienvenido al test de...</h5>
            <div class="col s12 m12 l6 xl6 center-align">
                <p style="color:black;margin:auto;margin-right:-150px;margin-top:20px;" class="Tipografia--general letranegro">Test Duration</p>
                <br>
                <p style="color:black;margin:auto;margin-right:-150px;margin-top:-20px;" class="Tipografia--general letranegro">20 mins</p>
            </div>

            <div class="col s12 m12 l6 xl6 center-align">
                <p style="color:black;margin: auto;margin-left:-150px;margin-top:20px;" class="Tipografia--general letranegro">No. of questions</p>
                <br>
                <p style="color:black;margin: auto;margin-left:-150px;margin-top:-20px;" class="Tipografia--general letranegro">10 Questions</p>
            </div>
        </div>
        <div class="col s12 m12 l6 xl6" style="background-color:#f3f7f7;">
            <h5 style="color:black;margin-top: 150px;" class="Tipografia--general letranegro">Instructions</h5>

            <p style="color:black;" class="Tipografia--general letranegro">1. This is a sample test to help you get familiar with the HackerRank test
                environment</p>

            <a href="" class="btn Tipografia--general" style="background-color:green;">Continue</a>

            <h5 style="color:black;margin-top:150px;" class="Tipografia--general letranegro">Questions</h5>
            <p style="color:black;" class="Tipografia--general letranegro">Feel free to choose your preferred programming language from the list</p>
            <p style="color:black;" class="Tipografia--general letranegro">There are 2 questions that are part of this test</p>

            <div class="col s12 m12 l6 xl2">
                <p style="color:black;" class="Tipografia--general letranegro">Q1</p>
            </div>
            <div class="col s12 m12 l6 xl10">
                <p style="color:black;" class="Tipografia--general letranegro">Subjective Question</p>
            </div>

            <div class="col s12 m12 l6 xl2">
                <p style="color:black;" class="Tipografia--general letranegro">Q2</p>
            </div>
            <div class="col s12 m12 l6 xl10">
                <p style="color:black;" class="Tipografia--general letranegro">Coding Question</p>
            </div>

            <a href="" class="btn Tipografia--general" style="background-color:green;">Continue</a>

            <h5 style="color:black;margin-top:150px;" class="Tipografia--general letranegro">Confirmation Form</h5>
            <br>
            <p style="color:black;" class="Tipografia--general letranegro">Before we start, here is some extra information we need to assess you better</p>
            <p style="color:black;" class="Tipografia--general letranegro">Email address/Login <b style="color:red;">*</b></p>
            <input type="text" name="email-usuario" id="email-usuario" style="width:50%;"
                placeholder="Enter your email address/login">



            <p style="color:black;margin-top:50px;" class="Tipografia--general letranegro">Declaration Statement<b style="color:red">*</b></p>

            <div class="col s12 m12 l12 xl12 center-align" style="margin-top:20px;">
                <label>
                    <input type="checkbox" name="checkbox1" id="checkbox1" value="false" onclick="verdad();">
                    <span style="width:100%;color:black;text-align:justify" class="Tipografia--general letranegro">I will not consult/copy code from any source
                        including a website, book, or friend/colleague to complete these test, though may reference
                        language documentation or use and IDE that has code completion features</span>
                </label>
                <!-- <button type="submit" class="btn center-align" style="background-color: #262137;margin-top:20px;">Registrarse</button> -->
            </div>


            <div class="col s12 m12 l12 xl12">
                <p style="color:black;" class="Tipografia--general letranegro">You agree to Chemical Broker <a>cookie policy.</a>We use cookies to ensure you have the best browsing experience on our website</p>
                <br>
                <a href="" class="btn Tipografia--general" style="background-color:green;">Continue</a>
            </div>

        </div>





    </div>






    </div>
    </div>
    </div>
    <footer style="margin-top:0px;">
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