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
                <div class="row">
                    <div class="col s12">
                        <input type="hidden" value="<?php echo $mostrar1['id_aviso'] ?>">
                        <ul class="tabs">
                            <li class="tab col s6" id="test1li"><a class="active" href="#test1">1: Datos del Aviso</a>
                            </li>
                            <li class="tab col s6" id="test2li"><a id="activeli" href="#test2">2: Vista Previa</a></li>
                        </ul>
                    </div>
                    <div id="test1" class="col s12" style="margin-top:50px;">
                        <form role="form" class="div-form">
                            <div class="col s12 m12 l4 xl4">
                                <p><b>Nombre del Puesto*</b></p>
                            </div>
                            <div class="col s12 m12 l4 xl4">
                                <label for="nombre_puesto">Ingrese el Nombre del Puesto</label>
                                <input type="text" id="nombre_puesto1" name="nombre_puesto1"
                                    placeholder="Ej: Enfermera, Arquitecto, Secretaria" required>
                            </div>
                            <div class="col s12 m12 l4 xl4">
                                <label for="complemento_titulo">Complementa el Título</label>
                                <input type="text" id="complemento_titulo1" name="complemento_titulo1"
                                    placeholder="Ej: con experiencia, titulado, recién egresado" required>
                            </div>
                            <!-- <div class="col s12 m12 l12 xl12" style="margin-top:30px;">
                                <p><b>Titulo del Aviso</b></p>
                            </div> -->
                            <!-- <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Puestos Adicionales</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <label for="puesto_adicional">Coloca Puestos Similares</label>
                                <input type="text" id="puesto_adicional1" name="puesto_adicional1" required>
                            </div> -->
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Descripcion del Puesto*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <label for="Requisitos_puesto">Requisitos:</label>
                                <input type="text" id="Requisitos_puesto1" name="Requisitos_puesto1"
                                    placeholder="Ej: Conocimientos en inglés, herramientas informaticas (word, excel), etc."
                                    required>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p style="display:none;">prueba</p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <label for="Actividades_realizar">Actividades a Realizar:</label>
                                <input type="text" id="Actividades_realizar1" name="Actividades_realizar1"
                                    placeholder="Ej: Atención de clientes, administracion de documentos, coordinacion de personal, etc."
                                    required>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p style="display:none;">prueba</p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <label for="ofrecemos">Ofrecemos:</label>
                                <input type="text" id="ofrecemos1" name="ofrecemos1"
                                    placeholder="Ej: Agradable ambiente laboral, prestaciones superiores, gastos medicos, etc."
                                    required>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Área del puesto*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <select name="area_puesto1" id="area_puesto1" required>
                                    <option value="#" disabled selected>Seleccionar</option>
                                    <option value="prueba">Prueba1</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>País*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <select name="pais1" id="pais1" required>
                                    <option value="#" disabled selected>Seleccionar</option>
                                    <option value="prueba">prueba</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Provincia*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <select name="provincia1" id="provincia1" required>
                                    <option value="#" disabled selected>Seleccionar</option>
                                    <option value="prueba">prueba</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Descartar las Postulaciones de otras provincias.*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <select name="descartar_provincias1" id="descartar_provincias1" required>
                                    <option value="" disabled selected>Seleccionar</option>
                                    <option value="prueba">prueba</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Ciudad, Localidad o Barrio*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6"  style="margin-top:30px;">
                                <input type="text" placeholder="Escribe o Selecciona una Ciudad" id="Municipio1"
                                    name="Municipio1" required>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Jornada Laboral*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <select name="jornada_laboral1" id="jornada_laboral1" required>
                                    <option value="" disabled selected>Seleccionar</option>
                                    <option value="prueba">prueba</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Tipo de Empleo*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <select name="tipo_empleo1" id="tipo_empleo1" required>
                                    <option value="" disabled selected>Seleccionar</option>
                                    <option value="prueba">prueba</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l3 xl3" style="margin-top:30px;">
                                <p><b>Rango Salarial</b></p>
                            </div>
                            <div class="col s12 m12 l3 xl3" style="margin-top:30px;">
                                <input type="number" placeholder="Ingreso Minimo" id="Ingreso_minimo1"
                                    name="Ingreso_minimo1" required>
                            </div>
                            <div class="col s12 m12 l3 xl3" style="margin-top:30px;">
                                <input type="number" placeholder="Ingreso Maximo" id="Ingreso_maximo1"
                                    name="Ingreso_maximo1" required>
                            </div>
                            <div class="col s12 m12 l3 xl3" style="margin-top:30px;">
                                <select name="Periodicidad1" id="Periodicidad1" required>
                                    <option value="" disabled selected>Seleccionar</option>
                                    <option value="prueba">prueba</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Ocultar el Rango Salarial "Sueldo A Convenir"</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <select name="salario_convenir1" id="salario_convenir1" required>
                                    <option value="" disabled selected>Seleccionar</option>
                                    <option value="prueba">prueba</option>
                                </select>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <p><b>Permite Trabajar desde Casa*</b></p>
                            </div>
                            <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                <select name="homeoffice1" id="homeoffice1" required>
                                    <option value="" disabled selected>Seleccionar</option>
                                    <option value="prueba">prueba</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12 xl12" style="margin-top:30px;">
                                    <p><b>Requisitos Adicionales</b></p>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <p><b>Experiencia Mínima</b></p>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <select name="experiencia_minima1" id="experiencia_minima1" required>
                                        <option value="" disabled selected>Seleccionar</option>
                                        <option value="prueba">prueba</option>
                                    </select>
                                </div>
                                <div class="col s12 m12 l4 xl4" style="margin-top:30px;">
                                    <p><b>Idioma Requerido</b></p>
                                </div>
                                <div class="col s12 m12 l4 xl4" style="margin-top:30px;">
                                    <select name="idioma_requerido1" id="idioma_requerido1" required>
                                        <option value="" disabled selected>Seleccionar Idioma</option>
                                        <option value="prueba">prueba</option>
                                    </select>
                                </div>
                                <div class="col s12 m12 l4 xl4" style="margin-top:30px;">
                                    <select name="idioma_nivel1" id="idioma_nivel1" required>
                                        <option value="" disabled selected>Seleccionar Nivel</option>
                                        <option value="prueba">prueba</option>
                                    </select>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <p><b>Estudios Mínimos</b></p>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <select name="estudios_minimos1" id="estudios_minimos1" required>
                                        <option value="" disabled selected>Seleccionar</option>
                                        <option value="prueba">prueba</option>
                                    </select>
                                </div>
                                <div class="col s12 m12 l4 xl4" style="margin-top:30px;">
                                    <p><b>Edad Requerida</b></p>
                                </div>
                                <div class="col s12 m12 l4 xl4" style="margin-top:30px;">
                                    <input type="number" placeholder="Edad Mínima" id="edad_minima1" name="edad_minima1"
                                        required>
                                </div>
                                <div class="col s12 m12 l4 xl4" style="margin-top:30px;">
                                    <input type="number" placeholder="Edad Máxima" id="edad_maxima1" name="edad_maxima1"
                                        required>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <p><b>Conocimientos Informáticos</b></p>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <input type="text" placeholder="Elija uno o varios conocimientos"
                                        id="conocimientos_informaticos1" name="conocimientos_informaticos1" required>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <p><b>Sexo Requerido</b></p>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <select name="sexo1" id="sexo1" required>
                                        <option value="" selected disabled>Seleccionar</option>
                                        <option value="prueba">prueba</option>
                                    </select>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <p><b>Disponibilidad para Viajar</b></p>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <select name="viaje1" id="viaje1" required>
                                        <option value="" selected disabled>Seleccionar</option>
                                        <option value="prueba">prueba</option>
                                    </select>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <p><b>Disponibilidad para Cambio de Residencia</b></p>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <select name="residencia1" id="residencia1" required>
                                        <option value="" selected disabled>Seleccionar</option>
                                        <option value="prueba">prueba</option>
                                    </select>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <p><b>Apto para personas con discapacidad</b></p>
                                </div>
                                <div class="col s12 m12 l6 xl6" style="margin-top:30px;">
                                    <select name="discapacidad1" id="discapacidad1" required>
                                        <option value="" selected disabled>Seleccionar</option>
                                        <option value="prueba">prueba</option>
                                    </select>
                                </div>
                                <div class="container center-align">
                                    <a class="btn" id="btnEnviar" style="background-color:#000020;color:white;margin-top:30px;">Enviar</a>
                                </div>
                        </form>
                        <!-- <div class="col s12 m12 l12 xl12">
                <p><b>Datos de Contacto</b></p>
            </div> -->
                    </div>
                </div>
                <div id="test2" class="col s12">
                    <table style="margin-top:50px;">
                    <thead>
                        <tr>
                            <td style="border:1px solid #f2f2f2;background-color:#000020;color:white;width:50%;text-align:center;">Concepto</td>
                            <td style="border:1px solid #f2f2f2;background-color:#000020;color:white;width:50%;text-align:center;">Parametros</td>
                        </tr>
                    </thead>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">ID Aviso</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar1['id_aviso'] ?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Nombre del Puesto</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar1['aviso_nombre_puesto'] ?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Complemento del Titulo</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar1['aviso_complemento_puesto'] ?>
                            </td>
                        </tr>
                        <!-- <tr>
                            <td style="border:1px solid #f2f2f2;">Puesto Similar</td>
                            <td style="border:1px solid #f2f2f2;">
                            </td>
                        </tr> -->
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Requisitos Puesto</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_requisitos_puesto'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Actividades</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_actividades_realizar'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Ofrecemos</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_ofrecemos'] ?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Area Puesto</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_area_puesto'] ?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Pais Puesto</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_pais_puesto']?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Provincia Puesto</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_provincia_puesto'] ?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Descartar Postulacion</td>
                            <td style="border:1px solid #f2f2f2;">
                                <?php echo $mostrar2['aviso_descartar_postulaciones'] ?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Municipio</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_municipio'] ?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Jornada Laboral</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_jornada_laboral'] ?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Tipo Empleo</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_tipo_empleo']?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Salario Minimo Deseado</td>
                            <td style="border:1px solid #f2f2f2;">
                                <?php echo $mostrar2['aviso_salario_minimo_deseado'] ?></td>

                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Salario Maximo</td>
                            <td style="border:1px solid #f2f2f2;">
                                <?php echo $mostrar2['aviso_salario_maximo_deseado'] ?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Salario Periodicidad</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_salario_periodicidad'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Salario Convenir</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_salario_convenir']?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Homeoffice</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_homeoffice']?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Experiencia Minima</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_experiencia_minima']?>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Idioma</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_idioma']?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Nivel Idioma</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_idioma_nivel']?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Estudios Minimos</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_estudios_minimos'] ?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Edad minima</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_edad_minima']  ?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Edad Maxima</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_edad_maxima']?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Conocimiento Informaticos</td>
                            <td style="border:1px solid #f2f2f2;">
                                <?php echo $mostrar2['aviso_conocimientos_informaticos'] ?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Sexo</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_sexo_requerido']?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Disponibilidad Viaje</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_disponibilidad_viaje'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Disponibilidad Residencia</td>
                            <td style="border:1px solid #f2f2f2;">
                                <?php echo $mostrar2['aviso_disponibilidad_residencia']?></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #f2f2f2;">Discapacidad</td>
                            <td style="border:1px solid #f2f2f2;"><?php echo $mostrar2['aviso_discapacidad']?></td>
                        </tr>
                    </table>
                    <div class="container center-align" style="margin-top:50px;">
                        <div class="row">
                            <div class="col s12 m12 l12 xl12">
                                <a href="Dashboard_Anuncios.php" style="background-color:#000020;color:white;padding:10px;">Publicar Anuncio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



    <footer style="margin-top:220px;">
        <div class="divfooter" style="text-align:center;"><img class="imglogoCE"
                src="img/CE_ESCUDO_FONDO-TRANSPARENTE.png" alt=""></div><br><br>
        <div class="container-fluid center-align" style="margin-top:-50px">
            <p class="Tipografia--general letranegro center-align Pie--Pagina">© 2014 C&E | Chemical Broker Todos los
                Derechos Reservados. | <a href="Contact.php" style="color:black !important;font-size:16px">Contacto
                    |&nbsp</a><a href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download
                    style="color:black !important;font-size:16px">Politica de Privacidad </a></p>
        </div>
    </footer>


    <script>
        $(document).ready(ini);

        function ini() {
            $("#btnEnviar").click(insercion_anuncio)
        }

        function insercion_anuncio() {
            var aviso_nombre_puesto = $("#nombre_puesto1").val();
            var complemente_titulo = $("#complemento_titulo1").val();
            var puestos_similares = $("#puesto_adicional1").val();
            var requisitos = $("#Requisitos_puesto1").val();
            var actividades_realizar = $("#Actividades_realizar1").val();
            var ofrecemos = $("#ofrecemos1").val();
            var area_puesto = $("#area_puesto1").val();
            var pais = $("#pais1").val();
            var provincia = $("#provincia1").val();
            var descartar_postulaciones = $("#descartar_provincias1").val();
            var ciudad_localidad_barrio = $("#Municipio1").val();
            var jornada_laboral = $("#jornada_laboral1").val();
            var tipo_empleo = $("#tipo_empleo1").val();
            var ingreso_minimo = $("#Ingreso_minimo1").val();
            var ingreso_maximo = $("#Ingreso_maximo1").val();
            var periodicidad = $("#Periodicidad1").val();
            var salario_convenir = $("#salario_convenir1").val();
            var homeoffice = $("#homeoffice1").val();
            var experiencia_minima = $("#experiencia_minima1").val();
            var idioma_requerido = $("#idioma_requerido1").val();
            var idioma_nivel = $("#idioma_nivel1").val();
            var estudios_minimos = $("#estudios_minimos1").val();
            var edad_minima = $("#edad_minima1").val();
            var edad_maxima = $("#edad_maxima1").val();
            var conocimientosinformaticos = $("#conocimientos_informaticos1").val();
            var sexo = $("#sexo1").val();
            var viaje = $("#viaje1").val();
            var residencia = $("#residencia1").val();
            var discapacidad = $("#discapacidad1").val();
            $.ajax({
                url: "Insertar_anuncio.php",
                success: function (result) {
                    if (result == "true\r\n") {
                        swal("si","","success");
                        $.ajax({
                            url: "Consulta_tiempo_real.php",
                            success: function(result){
                                if (result == "true"){
                                  location.reload();
                                  document.getElementById("test1li").style.display="none";
                                    document.getElementById("activeli").classList.add("active");
                                }else{
                                    alert("Esto no esta funcionando correctamente");
                                }
                            }
                        })
                    } else {
                        swal("Error", "", "error");
                    }
                },
                data: {
                    nombre_puesto1: aviso_nombre_puesto,
                    complemento_titulo1: complemente_titulo,
                    puesto_adicional1: puestos_similares,
                    Requisitos_puesto1: requisitos,
                    Actividades_realizar1: actividades_realizar,
                    ofrecemos1: ofrecemos,
                    area_puesto1: area_puesto,
                    pais1: pais,
                    provincia1: provincia,
                    descartar_provincias1: descartar_postulaciones,
                    Municipio1: ciudad_localidad_barrio,
                    jornada_laboral1: jornada_laboral,
                    tipo_empleo1: tipo_empleo,
                    Ingreso_minimo1: ingreso_minimo,
                    Ingreso_maximo1: ingreso_maximo,
                    Periodicidad1: periodicidad,
                    salario_convenir1: salario_convenir,
                    homeoffice1: homeoffice,
                    experiencia_minima1: experiencia_minima,
                    idioma_requerido1: idioma_requerido,
                    idioma_nivel1: idioma_nivel,
                    estudios_minimos1: estudios_minimos,
                    edad_minima1: edad_minima,
                    edad_maxima1: edad_maxima,
                    conocimientos_informaticos1: conocimientosinformaticos,
                    sexo1: sexo,
                    viaje1: viaje,
                    residencia1: residencia,
                    discapacidad1: discapacidad
                },
                type: "POST"
            });
        }
    </script>
    <script src="js/materialize.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
</body>

</html>