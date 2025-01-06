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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
 <script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" defer="defer"></script>


    </script>
    <script src="js/main.js"></script>
<script>
    $(document).ready( function () {
    $('#example').DataTable();
} );
</script>
  
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

   <div class="container">
    <div class="row">
        <div class="col s12 m12 l12 xl12">
            <input type="submit" class="btn" style="background-color:#000020;" id="btn_Pausado" value="Pausado">
            <input type="submit" class="btn" style="background-color:#000020;" id="btn_Activo" value="Activo">
            <input type="submit" class="btn" style="background-color:#000020;" id="btn_Cerrado" value="Cerrado">
        </div>
    </div>
   </div>

   <div class="container">
    <div class="row">
        <div class="col s12 m12 l12 xl12">
        <table id="example" class="display" style="width:100%">
        


        <thead>
            <tr>
                <th>id</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>a</th>
                <th>v</th>
                <th>g</th>
            </tr>
        </thead>
        <tbody>
           
        <?php 

        include "./conexion_base_datos.php";

        $cnn = new conexion();
        $con = $cnn ->conectar();
        mysqli_select_db($con, "cb_rh");
        $sql = "SELECT * FROM empleos";
        $result = mysqli_query($con, $sql);
        while($mostrar = mysqli_fetch_array($result));{

        
        


?>
<tr>
<td class="center-align" id="Did"><?php echo $mostrar['id_empleos']; ?></td>
<td class="center-align" id="DTitulo_puesto"><?php echo $mostrar['Titulo_Puesto']; ?></td>
<td class="center-align" id="DCantidad_Puesto"><?php echo $mostrar['Cantidad_puesto']; ?></td>
<td class="center-align" id="DUbicacion_Empleo"><?php echo $mostrar['Ubicacion_empleo']; ?></td>
<td class="center-align" id="DTipo_Empleo"><?php echo $mostrar['TIPO_EMPLEO']; ?></td>
<td class="center-align" id="DHorario"><?php echo $mostrar['horario']; ?></td>
<td class="center-align" id="DSalario"><?php echo $mostrar['Salario']; ?></td>
<td class="center-align" id="DCompresacion"><?php echo $mostrar['Comprensaciones']; ?></td>
<td class="center-align" id="DStatus"><?php echo $mostrar['STATUS']; ?></td>

</tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>

        <?php
    }

        ?>

    </table>
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
    <script type="text/javascript">

        $("btn_Pausado").click(function(){
            $.ajax({
                type:"post",
                url: "Consulta_Status.php",
                success:function(result){
                    
                }

            })
        })

    </script>
</body>

</html>