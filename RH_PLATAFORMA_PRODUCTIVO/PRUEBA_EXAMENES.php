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
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
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
    <nav id="nav_oscuro" style="background-color:white;height:140px;margin-top:-15px;">
        <div class="row">
            <div class="col s12 m12 l4 xl1">
                <img src="img/CB_IMAGOTIPO_LEON.jpg" alt="" style="width:70%;margin-top:20px;">
            </div>
            <div class="col s12 m12 l4 xl2">
                <h5 style="color:black;margin-top:60px;">Examen de...</h5>
            </div>
            <div class="col s12 m12 l4 xl1" style="float:right;">
                <p style="color:black;margin-top:50px;" class="Tipografia--general"><b>Answered:</b> 0/2</p>
            </div>
            <div class="col s12 m12 l4 xl1" style="float:right;">
                <p style="color:black;margin-top:55px;" class="Tipografia--general"><i class="material-icons"
                        style="cursor: pointer;" onclick="modo_oscuro();">wb_sunny</i></p>
            </div>
            <div class="col s12 m12 l4 xl1" style="float:right;">
                <p style="color:black;margin-top:50px;" class="Tipografia--general"><b>Time:</b> 30 minutes</p>
            </div>
        </div>
    </nav>

    
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <ul id="slide-out" class="sidenav position-fixed"
                    style="left:110px !important;top:115px !important;height:90%;width:100px;overflow-x:hidden;">
                    <li class="center-align">
                        <div class="user-view" style="padding:0px;">
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12 center-align" style="border-bottom:1px solid #262137;">
                                    <a href="#modal_shorcut" class="modal-trigger"><i class="small material-icons"
                                            style="color:#262137;margin-top:20px;padding:0px;">redo</i></a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12 center-align" style="border-bottom:1px solid #262137;">
                                    <a href="#preguntasall" id="boton_all">
                                        <h5 class="Tipografia--general" style="color:#262137;">All</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#modal_instructions" class="modal-trigger"><i class="small material-icons"
                                            style="color:#262137;margin-top:20px;padding:0px;">info</i></a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question1" id="Boton_question1">
                                        <h5 style="color:#262137;padding: 0px;margin-top:10px;">1</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question2" id="Boton_question2">
                                        <h5 style="color:#262137;margin-top:10px">2</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question3" id="Boton_question3">
                                        <h5 style="color:#262137;margin-top:10px">3</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question4" id="Boton_question4">
                                        <h5 style="color:#262137;margin-top:10px">4</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question5" id="Boton_question5">
                                        <h5 style="color:#262137;margin-top:10px">5</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question6" id="Boton_question6">
                                        <h5 style="color:#262137;margin-top:10px">6</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question7" id="Boton_question7">
                                        <h5 style="color:#262137;margin-top:10px">7</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question8" id="Boton_question8">
                                        <h5 style="color:#262137;margin-top:10px">8</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question9" id="Boton_question9">
                                        <h5 style="color:#262137;margin-top:10px">9</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question10" id="Boton_question10">
                                        <h5 style="color:#262137;margin-top:10px">10</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question11" id="Boton_question11">
                                        <h5 style="color:#262137;margin-top:10px">11</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question12" id="Boton_question12">
                                        <h5 style="color:#262137;margin-top:10px">12</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question13" id="Boton_question13">
                                        <h5 style="color:#262137;margin-top:10px">13</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question14" id="Boton_question14">
                                        <h5 style="color:#262137;margin-top:10px">14</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom:0px;">
                                <div class="col s12 m12 l12 xl12" style="border-bottom:1px solid #262137;">
                                    <a href="#Question15" id="Boton_question15">
                                        <h5 style="color:#262137;margin-top:10px">15</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
            </div>
            </li>
            </ul>
        </div>
    </div>
    </div>


    <div id="modal_shorcut" class="modal">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 m12 l6 xl6">
                    <h5 class="Tipografia--general letranegro" style="float:left;">Test Shortcuts</h5>
                </div>
                <div class="col s12 m12 l6 xl6">
                    <p class="Tipografia--general letranegro" style="float:right;">Use shift + ? to show / hide</p>
                </div>


            </div>
            <div class="container center-align">
                <div class="row">
                    <div class="col s12 m12 l6 xl6">
                        <p class="Tipografia--general letranegro"><b>Keycode</b></p>
                    </div>
                    <div class="col s12 m12 l6 xl6">
                        <p class="Tipografia--general letranegro"><b>Description</b></p>
                    </div>
                </div>
            </div>

            <div class="container">
                <table>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">
                            <p class="Tipografia--general letranegro center-align">Ctrl + Alt + Enter</p>
                        </td>
                        <td style="border:1px solid black;">
                            <p class="Tipografia--general letranegro center-align">Submit Test</p>
                        </td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">
                            <p class="Tipografia--general letranegro center-align">Alt + Shift + D</p>
                        </td>
                        <td style="border:1px solid black;">
                            <p class="Tipografia--general letranegro center-align">Switch theme</p>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col s12 m12 l4 xl4" id="Question" style="display:none;">
                <p class="Tipografia--general letranegro"><b>Question</b></p>
            </div>
            <div class="col s12 m12 l4 xl4" id="Type" style="display:none;">
                <p class="Tipografia--general letranegro"><b>Type</b></p>
            </div>
            <div class="col s12 m12 l4 xl4" id="Action" style="display:none;">
                <p class="Tipografia--general letranegro"><b>Action</b></p>
            </div>
        </div>
    </div>



    <div class="container" id="preguntasall1" name="preguntasall1" style="background-color:#262137;padding:5px;margin-left:120px;display:none;">
        <div class="row center-align">
            <div class="col s12 m12 l4 xl4">
                <p class="Tipografia--general" style="color:white;">1. What is the difference between span and div</p>
            </div>
            <div class="col s12 m12 l4 xl4">
                <p class="Tipografia--general" style="color:white;">Subjective</p>
            </div>
            <div class="col s12 m12 l4 xl4">
                <a href="#" class="btn" style="background-color:green;margin-top:10px;">Solve</a>
            </div>
        </div>
    </div>

    <br>

    <div class="container" id="preguntasall2" name="preguntasall2"
        style="background-color:#262137;padding:5px;margin-left:120px;display:none;">
        <div class="row center-align">
            <div class="col s12 m12 l4 xl4">
                <p class="Tipografia--general" style="color:white;">2. What is the difference between span and div</p>
            </div>
            <div class="col s12 m12 l4 xl4">
                <p class="Tipografia--general" style="color:white;">Subjective</p>
            </div>
            <div class="col s12 m12 l4 xl4">
                <a href="#" class="btn" style="background-color:green;margin-top:10px;">Solve</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <a href="" id="EnviarTest" name="EnviarTest" class="btn"
                    style="background-color:#262137;margin-left:956px;display:none">Submit Test</a>
            </div>
        </div>
    </div>



    <div id="modal_instructions" class="modal">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12 xl12">
                        <h5 class="Tipografia--general letranegro">Instructions</h5>
                    </div>
                    <div class="col s12 m12 l12 xl12">
                        <p class="Tipografia--general letranegro">1. This is a sample test to help you get familiar with
                            the HackerRank test environment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


<!-- // Pregunta 1 -->

    <div class="container" id="Question1" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">1. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion" id="txtDescripcion"></textarea>
                </div>
            </div>
        </div>

    </div>

 <!--Pregunta 2  -->

    <div class="container" id="Question2" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">2. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion2" id="txtDescripcion2"></textarea>
                </div>
            </div>
        </div>

    </div>

    <!-- Pregunta 3 -->

    <div class="container" id="Question3" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">3. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion3" id="txtDescripcion3"></textarea>
                </div>
            </div>
        </div>

    </div>

    <!-- Pregunta 4 -->

    <div class="container" id="Question4" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">4. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion4" id="txtDescripcion4"></textarea>
                </div>
            </div>
        </div>

    </div>

<!-- Pregunta 5 -->

    <div class="container" id="Question5" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">5. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion5" id="txtDescripcion5"></textarea>
                </div>
            </div>
        </div>

    </div>

<!-- Pregunta 6 -->

    <div class="container" id="Question6" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">6. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion6" id="txtDescripcion6"></textarea>
                </div>
            </div>
        </div>

    </div>

<!-- Pregunta 7 -->

    <div class="container" id="Question7" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">7. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion7" id="txtDescripcion7"></textarea>
                </div>
            </div>
        </div>

    </div>


    <!-- Pregunta 8 -->

    <div class="container" id="Question8" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">8. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion8" id="txtDescripcion8"></textarea>
                </div>
            </div>
        </div>

    </div>


    <!-- Pregunta 9 -->


    <div class="container" id="Question9" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">9. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion9" id="txtDescripcion9"></textarea>
                </div>
            </div>
        </div>

    </div>


<!-- Pregunta 10 -->


<div class="container" id="Question10" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">10. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion10" id="txtDescripcion10"></textarea>
                </div>
            </div>
        </div>

    </div>


    <!-- Pregunta 11 -->

    <div class="container" id="Question11" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">11. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion11" id="txtDescripcion11"></textarea>
                </div>
            </div>
        </div>

    </div>

    <!-- Pregunta 12 -->

    <div class="container" id="Question12" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">12. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion12" id="txtDescripcion12"></textarea>
                </div>
            </div>
        </div>

    </div>


    <!-- Pregunta 13 -->

    <div class="container" id="Question13" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">13. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion13" id="txtDescripcion13"></textarea>
                </div>
            </div>
        </div>

    </div>


    <!-- Pregunta 14 -->


    <div class="container" id="Question14" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">14. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion14" id="txtDescripcion14"></textarea>
                </div>
            </div>
        </div>

    </div>


    <!-- Pregunta 15 -->

    <div class="container" id="Question15" style="display:none;">
        <div class="row">
            <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-100px;">
                <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
                        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
                    </span></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-50px;">
                    <h5 class="Tipografia--general " style="margin-left:-370px;">15. What is the difference between span
                        and div</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:-25px;">
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
                        span and div</p>
                    <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
                        the following editor</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-5px;">
                    <textarea type="text" name="txtDescripcion15" id="txtDescripcion15"></textarea>
                </div>
            </div>
        </div>

    </div>


    <footer style="margin-top:730px;">
        <div class="divfooter" style="text-align:center;"><img class="imglogoCE"
                src="img/CE_ESCUDO_FONDO-TRANSPARENTE.png" alt=""></div><br><br>
        <div class="container-fluid center-align" style="margin-top:-50px">
            <p class="Tipografia--general letranegro center-align Pie--Pagina" id="footer_dark">© 2014 C&E | Chemical Broker Todos los Derechos Reservados. | <a href="Contact.php" style="color:black !important;font-size:16px">Contacto
                    |&nbsp</a><a href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download
                    style="color:black !important;font-size:16px">Politica de Privacidad </a></p>
        </div>
    </footer>

    <script type="text/javascript">

            var boton_all = document.getElementById('boton_all');
            var question = document.getElementById('Question');
            var type = document.getElementById('Type');
            var action = document.getElementById('Action');
            var preguntasall = document.getElementById('preguntasall');
            var enviartest = document.getElementById('EnviarTest');
            var preguntasall2 = document.getElementById('preguntasall2');
            var preguntasall3 = document.getElementById('preguntasall3');
            var preguntasall4 = document.getElementById('preguntasall4');
            var preguntasall5 = document.getElementById('preguntasall5');
            var preguntasall6 = document.getElementById('preguntasall6');
            var preguntasall7 = document.getElementById('preguntasall7');
            var preguntasall8 = document.getElementById('preguntasall8');
            var preguntasall9 = document.getElementById('preguntasall9');
            var preguntasall10 = document.getElementById('preguntasall10');
            var preguntasall11 = document.getElementById('preguntasall11');
            var preguntasall12 = document.getElementById('preguntasall12');
            var preguntasall13 = document.getElementById('preguntasall13');
            var preguntasall14 = document.getElementById('preguntasall14');
            var preguntasall15 = document.getElementById('preguntasall15');
            var question1 = document.getElementById('Question1');
            var question2 = document.getElementById('Question2');
            var question3 = document.getElementById('Question3');
            var question4 = document.getElementById('Question4');
            var question5 = document.getElementById('Question5');
            var question6 = document.getElementById('Question6');
            var question7 = document.getElementById('Question7');
            var question8 = document.getElementById('Question8');
            var question9 = document.getElementById('Question9');
            var question10 = document.getElementById('Question10');
            var question11 = document.getElementById('Question11');
            var question12 = document.getElementById('Question12');
            var question13 = document.getElementById('Question13');
            var question14 = document.getElementById('Question14');
            var question15 = document.getElementById('Question15');


        boton_all.addEventListener('click', function () {

            question.style.display = 'inline-block';
            type.style.display = 'inline-block';
            action.style.display = 'inline-block';
            preguntasall1.style.display = 'inline-block';
            preguntasall2.style.display = 'inline-block';
            preguntasall3.style.display = 'inline-block';
            preguntasall4.style.display = 'inline-block';
            preguntasall5.style.display = 'inline-block';
            preguntasall6.style.display = 'inline-block';
            preguntasall7.style.display = 'inline-block';
            preguntasall8.style.display = 'inline-block';
            preguntasall9.style.display = 'inline-block';
            preguntasall10.style.display = 'inline-block';
            preguntasall11.style.display = 'inline-block';
            preguntasall12.style.display = 'inline-block';
            preguntasall13.style.display = 'inline-block';
            preguntasall14.style.display = 'inline-block';
            preguntasall15.style.display = 'inline-block';
            question1.style.display = 'none';
            question2.style.display = 'none';
            question3.style.display = 'none';
            question4.style.display = 'none';
            question5.style.display = 'none';
            question6.style.display = 'none';
            question7.style.display = 'none';
            question8.style.display = 'none';
            question9.style.display = 'none';
            question10.style.display = 'none';
            question11.style.display = 'none';
            question12.style.display = 'none';
            question13.style.display = 'none';
            question14.style.display = 'none';
            question15.style.display = 'none';
            enviartest.style.display = 'inline-block';

        })

        

        var boton_question1 = document.getElementById('Boton_question1');
        boton_question1.addEventListener('click', function () {
            var question1 = document.getElementById('Question1');
            question1.style.display = 'block';
            if(question1.style.display == 'block'){
                question2.style.display = 'none';
            }else{

            }

        })

        var boton_question2 = document.getElementById('Boton_question2');
        boton_question2.addEventListener('click', function(){
            var question2 = document.getElementById('Question2');
            question2.style.display = 'block';
            if(question2.style.display == 'block'){
                question1.style.display = 'none';
            }
        })

        var boton_question3 = document.getElementById('Boton_question3');
        boton_question3.addEventListener('click', function(){
            var question3 = document.getElementById('Question3');
            question3.style.display = 'block';
            if(question3.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
            }
        })

        var boton_question4 = document.getElementById('Boton_question4');
        boton_question4.addEventListener('click', function(){
            var question4 = document.getElementById('Question4');
            question4.style.display = 'block';
            if(question4.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
            }
        })

        var boton_question5 = document.getElementById('Boton_question5');
        boton_question5.addEventListener('click', function(){
         var question5 = document.getElementById('Question5');
         question5.style.display = 'block';
         if(question5.style.display == 'block'){
            question1.style.display = 'none';
            question2.style.display = 'none';
            question3.style.display = 'none';
            question4.style.display = 'none';
         }
        })

        var boton_question6 = document.getElementById('Boton_question6');
         boton_question6.addEventListener('click', function(){
         var question6 = document.getElementById('Question6');
         question6.style.display == 'block';
         
         if(question6.style.display = 'block'){
            question1.style.display = 'none';
            question2.style.display = 'none';
            question3.style.display = 'none';
            question4.style.display = 'none';
            question5.style.display = 'none';
         }

         })

         var boton_question7 = document.getElementById('Boton_question7');
         boton_question7.addEventListener('click', function(){
            var question7 = document.getElementById('Question7');
            question7.style.display = 'block'
            if(question7.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
                question4.style.display = 'none';
                question5.style.display = 'none';
                question6.style.display = 'none';
            }
         })

         var boton_question8 = document.getElementById('Boton_question8');
         boton_question8.addEventListener('click', function(){
            var question8 = document.getElementById('Question8');
            question8.style.display = 'block';
            if(question7.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
                question4.style.display = 'none';
                question5.style.display = 'none';
                question6.style.display = 'none';
                question7.style.display = 'none';
            }
         })

         var boton_question9 = document.getElementById('Boton_question9');
         boton_question9.addEventListener('click', function(){
            var question9 = document.getElementById('Question9');
            question9.style.display = 'block';
            if(question9.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
                question4.style.display = 'none';
                question5.style.display = 'none';
                question6.style.display = 'none';
                question7.style.display = 'none';
                question8.style.display = 'none';
            }
         })

         var boton_question10 = document.getElementById('Boton_question10');
         boton_question10.addEventListener('click', function(){
            var question10 = document.getElementById('Question10');
            question10.style.display = 'block';
            if(question10.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
                question4.style.display = 'none';
                question5.style.display = 'none';
                question6.style.display = 'none';
                question7.style.display = 'none';
                question8.style.display = 'none';
                question9.style.display = 'none';
            }
         })

         var boton_question11 = document.getElementById('Boton_question11');
         boton_question11.addEventListener('click', function(){
            var question11 = document.getElementById('Question11');
            question11.style.display = 'block';
            if(question10.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
                question4.style.display = 'none';
                question5.style.display = 'none';
                question6.style.display = 'none';
                question7.style.display = 'none';
                question8.style.display = 'none';
                question9.style.display = 'none';
                question10.style.display = 'none';
            }
         })

         var boton_question12 = document.getElementById('Boton_question12');
         boton_question12.addEventListener('click', function(){
            var question12 = document.getElementById('Question12');
            question12.style.display = 'block';
            if(question12.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
                question4.style.display = 'none';
                question5.style.display = 'none';
                question6.style.display = 'none';
                question7.style.display = 'none';
                question8.style.display = 'none';
                question9.style.display = 'none';
                question10.style.display = 'none';
                question11.style.display = 'none';
            }
         })

         var boton_question13 = document.getElementById('Boton_question13');
         boton_question13.addEventListener('click', function(){
            var question13 = document.getElementById('Question13');
            question13.style.display = 'block';
            if(question13.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
                question4.style.display = 'none';
                question5.style.display = 'none';
                question6.style.display = 'none';
                question7.style.display = 'none';
                question8.style.display = 'none';
                question9.style.display = 'none';
                question10.style.display = 'none';
                question11.style.display = 'none';
                question12.style.display = 'none';
            }

         })

         var boton_question14 = document.getElementById('Boton_question14');
         boton_question14.addEventListener('click', function(){
            var question14 = document.getElementById('Question14');
            question14.style.display = 'block';
            if(question14.style.display == 'block'){
                question1.style.display = 'none';
                question2.style.display = 'none';
                question3.style.display = 'none';
                question4.style.display = 'none';
                question5.style.display = 'none';
                question6.style.display = 'none';
                question7.style.display = 'none';
                question8.style.display = 'none';
                question9.style.display = 'none';
                question10.style.display = 'none';
                question11.style.display = 'none';
                question12.style.display = 'none';
                question13.style.display = 'none';
            }

         })

         var boton_question15 = document.getElementById('Boton_question15');
         boton_question15.addEventListener('click', function(){
            var question15 = document.getElementById('Question15');
            question15.style.display = 'block';
            if(question15.style.display == 'block'){
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';
                question1.style.display = 'none';

            }
         })


         if(question1.addEventListener('click', function(){

            question2.style.display = 'block';
            question3.style.display = 'none';
            question4.style.display = 'none';
            question5.style.display = 'none';
            question6.style.display = 'none';
            question7.style.display = 'none';
            question8.style.display = 'none';
            question9.style.display = 'none';
            question10.style.display = 'none';
            question11.style.display = 'none';
            question12.style.display = 'none';
            question13.style.display = 'none';
            question14.style.display = 'none';
         

         })){
         }else{

         }

    </script>


    <script>
        ClassicEditor
            .create(document.querySelector('#txtDescripcion'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
           .create(document.querySelector('#txtDescripcion2'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion3'))
           .catch(error=>{
            console.error(error);
           });
           
           ClassicEditor
           .create(document.querySelector('#txtDescripcion4'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion5'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion6'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion7'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion8'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion9'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion10'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion11'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion12'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion13'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion14'))
           .catch(error=>{
            console.error(error);
           });

           ClassicEditor
           .create(document.querySelector('#txtDescripcion15'))
           .catch(error=>{
            console.error(error);
           });            
    </script>

    <script src="js/materialize.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
</body>

</html>