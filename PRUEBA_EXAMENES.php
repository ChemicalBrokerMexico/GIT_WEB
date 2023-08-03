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
        <h5 style="color:black;margin-top:60px;" class="examen_oscuro" id="examen_oscuro">Examen de...</h5>
        </div>
        <div class="col s12 m12 l4 xl1" style="float:right;">
        <p style="color:black;margin-top:50px;" class="Tipografia--general respondidas_oscuro"
        id="respondidas_oscuro"><b>Answered:</b> 0/2</p>
        </div>
        <div class="col s12 m12 l4 xl1" style="float:right;">
        <p style="color:black;margin-top:55px;" class="Tipografia--general"><i class="material-icons sol_oscuro"
        style="cursor: pointer;" id="sol_oscuro" onclick="modo_oscuro();">wb_sunny</i></p>
        </div>
        <div class="col s12 m12 l4 xl1" style="float:right;">
        <p style="color:black;margin-top:50px;" id="tiempo_oscuro" class="Tipografia--general tiempo_oscuro">
        <b>Time:</b> 30 minutes
        </p>
        </div>
        </div>
        </nav>
        
        
        <!-- <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12">
        <ul id="slide-out" class="sidenav position-fixed"
        style="left:110px !important;top:130px !important;height:100%;width:100px;overflow-x:hidden;overflow-y:hidden;">
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
        </div> -->
        
        <nav style="background-color:white;" class="center-align">
        <div class="nav-wrapper">
        <ul id="nav-mobile" class="hide-on-med-and-down center-align">
        <li><a href="sass.html"><a href="#modal_shorcut" class="modal-trigger"><i class="small material-icons"
        style="color:#262137;padding:0px;margin-left:310px;">redo</i></a></a></li>
        <li><a href="#preguntasall" id="boton_all">
        <h5 class="Tipografia--general" style="color:#262137;">All</h5>
        </li>
        <li><a href="#modal_instructions" class="modal-trigger"><i class="small material-icons"
        style="color:#262137;">info</i></a></li>
        <li><a href="#Question1" id="Boton_question1">
        <h5 style="color:#262137;">1</h5>
        </li>
        <li><a href="#Question2" id="Boton_question2">
        <h5 style="color:#262137;">2</h5>
        </li>
        <li><a href="#Question3" id="Boton_question3">
        <h5 style="color:#262137;">3</h5>
        </li>
        <li><a href="#Question4" id="Boton_question4">
        <h5 style="color:#262137;">4</h5>
        </li>
        <li><a href="#Question5" id="Boton_question5">
        <h5 style="color:#262137;">5</h5>
        </li>
        <li><a href="#Question6" id="Boton_question6">
        <h5 style="color:#262137;">6</h5>
        </li>
        <li><a href="#Question7" id="Boton_question7">
        <h5 style="color:#262137;">7</h5>
        </li>
        <li><a href="#Question8" id="Boton_question8">
        <h5 style="color:#262137;">8</h5>
        </li>
        <li><a href="#Question9" id="Boton_question9">
        <h5 style="color:#262137;">9</h5>
        </li>
        <li><a href="#Question10" id="Boton_question10">
        <h5 style="color:#262137;">10</h5>
        </li>
        <li><a href="#Question11" id="Boton_question11">
        <h5 style="color:#262137;">11</h5>
        </li>
        <li><a href="#Question12" id="Boton_question12">
        <h5 style="color:#262137;">12</h5>
        </li>
        <li><a href="#Question13" id="Boton_question13">
        <h5 style="color:#262137;">13</h5>
        </li>
        <li><a href="#Question14" id="Boton_question14">
        <h5 style="color:#262137;">14</h5>
        </li>
        <li><a href="#Question15" id="Boton_question15">
        <h5 style="color:#262137;">15</h5>
        </li>
        </ul>
        </div>
        </nav>
        
        
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
        
        
        
        
        <div class="container center-align">
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
        
        
        
        <div class="container center-align" id="preguntasall1" name="preguntasall1" style="background-color:#262137;">
        <div class="row">
        <div class="col s12 m12 l4 xl4 center-align">
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
        style="background-color:#262137;">
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
        
        <div class="container" id="preguntasall3" name="preguntasall3"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">3. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall4" name="preguntasall4"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">4. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall5" name="preguntasall5"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">5. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall6" name="preguntasall6"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">6. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall7" name="preguntasall7"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">7. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall8" name="preguntasall8"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">8. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall9" name="preguntasall9"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">9. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall10" name="preguntasall10"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">10. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall11" name="preguntasall11"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">11. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall12" name="preguntasall12"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">12. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall13" name="preguntasall13"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">13. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall14" name="preguntasall14"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">14. What is the difference between span and div</p>
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
        
        <div class="container" id="preguntasall15" name="preguntasall15"
        style="background-color:#262137;">
        <div class="row center-align">
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">15. What is the difference between span and div</p>
        </div>
        <div class="col s12 m12 l4 xl4">
        <p class="Tipografia--general" style="color:white;">Subjective</p>
        </div>
        <div class="col s12 m12 l4 xl4">
        <a href="#" class="btn" style="background-color:green;margin-top:9px;">Solve</a>
        </div>
        </div>
        </div>
        
        <br>
        
        <div class="container center-align">
        <div class="row">
        <div class="col s12 m12 l12 xl12">
        <a href="" id="EnviarTest" name="EnviarTest" class="btn"
        style="background-color:#262137;margin-top:20px;">Submit Test</a>
        </div>
        </div>
        </div>
        
        
        
        <div id="modal_instructions" class="modal">
        <div class="modal-content">
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12">
        <h5 class="Tipografia--general letranegro"
        style="background-color:#262137;color:white;padding:10px;">Instructions</h5>
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
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general" style="margin-left:-370px;">1. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion" id="txtDescripcion"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        <!--Pregunta 2  -->
        
        <div class="container" id="Question2" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">2. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion2" id="txtDescripcion2"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        <!-- Pregunta 3 -->
        
        <div class="container" id="Question3" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">3. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion3" id="txtDescripcion3"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        <!-- Pregunta 4 -->
        
        <div class="container" id="Question4" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">4. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion4" id="txtDescripcion4"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        <!-- Pregunta 5 -->
        
        <div class="container" id="Question5" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">5. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion5" id="txtDescripcion5"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        <!-- Pregunta 6 -->
        
        <div class="container" id="Question6" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">6. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion6" id="txtDescripcion6"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        <!-- Pregunta 7 -->
        
        <div class="container" id="Question7" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">7. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion7" id="txtDescripcion7"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        
        <!-- Pregunta 8 -->
        
        <div class="container" id="Question8" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">8. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion8" id="txtDescripcion8"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        
        <!-- Pregunta 9 -->
        
        
        <div class="container" id="Question9" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">9. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion9" id="txtDescripcion9"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        
        <!-- Pregunta 10 -->
        
        
        <div class="container" id="Question10" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">10. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion10" id="txtDescripcion10"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        
        <!-- Pregunta 11 -->
        
        <div class="container" id="Question11" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">11. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion11" id="txtDescripcion11"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        <!-- Pregunta 12 -->
        
        <div class="container" id="Question12" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">12. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion12" id="txtDescripcion12"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        
        <!-- Pregunta 13 -->
        
        <div class="container" id="Question13" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">13. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion13" id="txtDescripcion13"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        
        <!-- Pregunta 14 -->
        
        
        <div class="container" id="Question14" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">14. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion14" id="txtDescripcion14"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        
        <!-- Pregunta 15 -->
        
        <div class="container" id="Question15" style="display:none;">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-180px;margin-top:-335px;">
        <p> &nbsp Can´t read the text? <a href="#"> Switch theme </a> <span
        style="padding:4px;border:1px solid #262137;border-radius:5px;width:4%;float:left;"> Beta
        </span></p>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-298px;">
        <h5 class="Tipografia--general " style="margin-left:-370px;">15. What is the difference between span
        and div</h5>
        </div>
        </div>
        </div>
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-top:-268px;">
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">What is the difference between
        span and div</p>
        <p class="Tipografia--general letranegra" style="margin-left:-370px;">Please provide your answer in
        the following editor</p>
        </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row">
        <div class="col s12 m12 l12 xl12" style="margin-left:-370px;margin-top:-190px;">
        <textarea type="text" name="txtDescripcion15" id="txtDescripcion15"></textarea>
        </div>
        </div>
        </div>
        
        </div>
        
        
        <footer style="margin-top:auto;">
        <div class="divfooter" style="text-align:center;"><img class="imglogoCE"
        src="img/CE_ESCUDO_FONDO-TRANSPARENTE.png" alt=""></div><br><br>
        <div class="container-fluid center-align" style="margin-top:-50px">
        <p class="Tipografia--general letranegro center-align Pie--Pagina" id="footer_dark">© 2014 C&E | Chemical
        Broker Todos los Derechos Reservados. | <a href="Contact.php"
        style="color:black !important;font-size:16px">Contacto
        |&nbsp</a><a href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download
        style="color:black !important;font-size:16px">Politica de Privacidad </a></p>
        </div>
        </footer>
        
       
        
        
        <script src=""></script>
        
        <script src="js/materialize.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="js/init.js"></script>
        <script src="js/Examenes_RH.js"></script>
        </body>
        
        </html>