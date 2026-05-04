<!DOCTYPE html>
<?php 

$conn = new mysqli("localhost", "root", "", "industria_productos2");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$query = "
SELECT 
    p.id_producto,
    p.nombre_producto,
    p.descripcion,
    p.imagen,
    s.id_segmento,
    s.nombre_segmento,
    i.id_industria,
    i.nombre_industria,
    p.Link_Web,
    p.ruta_documentos
FROM productos p
INNER JOIN segmentos s ON p.id_segmento = s.id_segmento
INNER JOIN industrias i ON s.id_industria = i.id_industria
";

$resultado = $conn->query($query);

if(!$resultado){
    die("Error en la consulta SQL: " . $conn->error);
}

$productos = [];

while($row = $resultado->fetch_assoc()){
    $productos[] = $row;
}

?>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximun-scale=1.0" />
    <title>Chemical Broker | Productos por Fabricante | Proveedor Global de Ingredientes Quimicos</title>
    <link rel="shortcut icon" href="img/CB_ICON.ico" />
    <meta name="description"
        content="Explora nuestro catálogo de ingredientes químicos organizados por fabricante. Encuentra materias primas de marcas reconocidas, con disponibilidad inmediata, fichas técnicas y opciones de venta al mayoreo para la industria cosmética, alimentaria y farmacéutica.">
    <link rel="canonical" href="https://chemicalbroker.mx/Products_Manufacturer.php">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="css/materialize.css?n=1" type="text/css" rel="stylesheet" media="screen" />
    <link href="css/styles.css?n=1" type="text/css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymus" />
    <link rel="stylesheet" href="css/History_Line.css?n=1" />
    <link rel="stylesheet" href="css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/materialize.js?n=1" type="text/javascript"></script>
    <script src="js/init.js?n=1"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script type="text/javscript" src="js/materialize.min.js?n=1"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>
    <script type="text/javascript" charset="utf8" src="js/Buscador.js?n=1"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.js"></script>
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=G-SGJQ8FDDJ6"></script>
    <script>
        const productos = <?php echo json_encode($productos, JSON_UNESCAPED_UNICODE); ?> ;
    </script>

    <style>
        .card-industria {
            position: relative;
            width: 280px;
            height: 180px;
            border-radius: 16px;
            /* overflow: hidden; */
            cursor: pointer;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        /* Imagen */
        .card-industria img .card-industria video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Overlay oscuro degradado */
        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.1));
        }

        /* Texto */
        .contenido {
            position: absolute;
            bottom: 15px;
            left: 15px;
            color: white;
            font-weight: bold;
        }

        /* Check */
        .check {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 28px;
            height: 28px;
            background: #007bff;
            color: white;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .card-industria.activa .check {
            display: flex;
        }

        #Contenedor_Productos {
            display: block;
            width: 100%;
        }

        .card-producto {
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .card-info {
            width: 70%;
        }

        .card-industria {
            color: #ff6600;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .card-titulo {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .card-descripcion {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .card-botones button {
            margin-right: 10px;
            padding: 6px 12px;
            border-radius: 20px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .card-marca {
            text-align: center;
            font-weight: bold;
            color: #888;
        }


        .card-producto.card {
            display: flex;
            flex-direction: column;
            padding: 0;
        }

        .card-producto .card-content {
            padding: 24px 24px 16px 24px;
        }

        .card-producto .card-action {
            padding: 16px 24px;
            width: 100%;
        }

        .card-producto .card-action .row {
            margin-bottom: 0;
            width: 100%;
        }

        .card-producto img {
            max-height: 90px;
            margin-top: 10px;
        }

        .card-industria-pro {
            position: relative;
            height: 160px;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
        }

        /* IMAGEN */
        .bg-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.4s;
        }

        /* OVERLAY */
        .overlay-pro {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            background: linear-gradient(135deg,
                    rgba(7, 22, 55, 0.4),
                    rgba(7, 22, 55, 0.8));

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 12px;
            color: white;
        }

        /* ICONO */
        .icono-industria {
            width: 35px;
            height: 35px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icono-industria i {
            font-size: 18px;
        }

        /* TEXTO */
        .contenido h6 {
            margin: 0;
            font-weight: 600;
            font-size: 14px;
        }

        /* CHECK ACTIVO */
        .check-activo {
            position: absolute;
            top: 8px;
            right: 8px;
            background: #1976d2;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .check-activo i {
            font-size: 14px;
        }

        /* PATRÓN */
        .pattern-dots {
            position: absolute;
            bottom: 8px;
            right: 8px;
            width: 35px;
            height: 35px;

            background-image: radial-gradient(white 1.5px, transparent 1.5px);
            background-size: 6px 6px;
            opacity: 0.5;
        }

        /* HOVER */
        .card-industria-pro:hover .bg-img {
            transform: scale(1.08);
        }

        /* ACTIVA */
        .card-industria-pro.activa .overlay-pro {
            background: linear-gradient(135deg,
                    rgba(0, 102, 204, 0.7),
                    rgba(0, 51, 153, 0.9));
        }

        .card-industria-pro.activa .check-activo {
            display: flex;
        }
    </style>


    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const cards = document.querySelectorAll(".card-industria-pro");

            cards.forEach(function (card) {

                card.addEventListener("click", function () {

                    // Quitar selección previa
                    cards.forEach(c => c.classList.remove("activa"));

                    // Activar actual
                    this.classList.add("activa");

                });

            });

        });
    </script>

</head>

<body>
    <div class="modal" id="modal1" style="overflow-y:auto">
        <div class="modal-content" style="overflow-y:auto">
            <h6 class="letranegro"> <b class="tipografia--general Titulos letranegro">Respetamos tu Privacidad</b></h6>
            <p class="General--Cuerpo Tipografia--general letranegro">Este sitio web utiliza cookies. Con la ayuda de
                las cookies, podemos mejorar el rendimiento de nuestro sitio web, analizar la navegacion del sitio web,
                respaldar nuestras actividades de marketing en internet y ampliar la funcionalidad del sitio web. Decida
                que cookies podemos utilizar para procesar sus datos personales y compartir los datos con terceros.
                Tenga en cuenta que las cookies técnicamente necesarias deben establecerse para mantener la
                funcionalidad de nuestro sitio web. Si hace clic en 'Acepto', acepta el almacenamiento de cookies en su
                dispositivo y el procesamiento y transferencia de datos a terceros. Puede revocar su concentimiento en
                cualquier momento, administrar su configuración de cookies y obtener más información sobre nuestro uso
                de cookies en 'Configuracion de cookies'. Puede encontrar más información en nuestra <a
                    class="Tipografia--general" href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf"
                    style="color:rgba(2 146 238 /99%)">Política de Privacidad.</a></p>
        </div>
        <div class="modal-footer" style="height:25px">
            <div class="row center-align">
                <div class="col s12 m12 l4 xl4" style="margin-top:20px"><a
                        class="modal-trigger close_hover Tipografia--general letranegro Botones"
                        href="#modal2">Configuracion</a>
                    <div class="modal" id="modal2" style="overflow-x:hidden">
                        <div class="modal-content">
                            <h6 class="letranegro"> <b class="Tipografia--general letranegro Titulos"
                                    style="float:left;">Centro de Preferencias de Privacidad</b></h6>
                            <p class="Tipografia--general letranegro General--Cuerpo" style="float:left;">Cuando visita
                                cualquier sitio web, puede almacenar o recuperar información en su navegador,
                                principalmente en forma de cookies. Esta información puede ser sobre usted, sus
                                preferencias o su dispositivo y se utiliza principalmente para hacer que el sitio
                                funcione como espera. Por lo general, la informacion no lo identifica directamente, pero
                                puede brindarle una experiencia web mas personalizada. Debido a que respetamos su
                                derecho a la privacidad, puede optar por no permitir algunos tipos de cookies. Haga clic
                                en los titulos de las diferentes categorías para obtener más información y cambiar
                                nuestra configuración predeterminada. Sin embargo, bloquear algunos tipos de cookies
                                puede afectar su experiencia en el sitio y los servicios que podemos ofrecer.</p>
                            <p> <a class="Botones Tipografia--general" href="#" style="color:blue;float:left;">Mas
                                    información</a></p>
                            <div class="row">
                                <div class="col s12 m12 l12 xl12" style="margin-top:16px"><a
                                        class="modal-close color--blanco fondo--color--corporativo Tipografia--general Botones"
                                        href="#!" style="padding:10px;float:left">Permitir Todo </a></div>
                            </div>
                            <h6 class="letranegro"><b class="Tipografia--general letranegro Subtitulos"
                                    style="float:left;">Administrar las preferencias de consentimiento</b><br /></h6>
                            <ul class="collapsible elementos--cookies">
                                <li>
                                    <div class="collapsible-header letranegro Tipografia--general Botones">Cookies
                                        estrictamente necesarias
                                        <label>
                                            <input class="filled-in float-right" type="checkbox" checked="checked"
                                                disabled="disabled" /><span class="letranegro"> </span>
                                        </label>
                                    </div>
                                    <div class="collapsible-body">
                                        <p class="Tipografia--general letranegro General--Cuerpo">Estas cookies son
                                            necesarias para que el sitio web funcione y no se pueden desactivar en
                                            nuestros sistemas. Usualmente estan configuradas para responder a acciones
                                            hechas por usted para recibir servicios, tales como ajustar sus preferencias
                                            de privacidad, iniciar sesion en el sitio, o llenar formularios. Usted puede
                                            configurar su navegador para bloquear o alertar la presencia de estas
                                            cookies, pero algunas partes del sitio web no funcionaran. Estas cookies no
                                            guardan ninguna informacion personal identificable</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header Tipografia--general Botones letranegro">Cookies de
                                        rendimiento
                                        <label>
                                            <input class="filled-in float-right" type="checkbox"
                                                disabled="disabled" /><span class="letranegro"> </span>
                                        </label>
                                    </div>
                                    <div class="collapsible-body">
                                        <p class="Tipografia--general letranegro General--Cuerpo">Estas cookies nos
                                            permiten contar las visitas y fuentes de circulacion para poder medir y
                                            mejorar el desempeño de nuestro sitio. Nos ayudan a saber qué son las más o
                                            menos populares y ver cuantas personas visitan el sitio. Toda la informacion
                                            que recogen estas cookies es agregada y, por lo tanto, anónima. Si no
                                            permite estas cookies no sabremos cuando visito nuestro sitio.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header Tipografia--general letranegro Botones">Cookies de
                                        funcionalidad
                                        <label>
                                            <input class="filled-in float-right" type="checkbox"
                                                disabled="disabled" /><span class="letranegro"> </span>
                                        </label>
                                    </div>
                                    <div class="collapsible-body">
                                        <p class="Tipografia--general letranegro General--Cuerpo">Estas cookies permiten
                                            que el sitio ofrezca una mejor funcionalidad y personalizacion. Pueden ser
                                            establecidas por nosotros o por terceras partes cuyos servicios hemos
                                            agregado a nuestras paginas. Si no permiten estas cookies algunos de
                                            nuestros servicios no funcionaran correctamente.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header Tipografia--general letranegro  Botones">Cookies
                                        dirigidas
                                        <label>
                                            <input class="filled-in float-right" type="checkbox"
                                                disabled="disabled" /><span class="letranegro"> </span>
                                        </label>
                                    </div>
                                    <div class="collapsible-body">
                                        <p class="Tipografia--general letranegro General--Cuerpo">Estas cookies pueden
                                            estar en todo el sitio web, colocadas por nuestros socios publicitarios.
                                            Estos negocios pueden utilizarlas para crear un perfil de sus intereses y
                                            mostrarle anuncios relevantes en otros sitios. No almacenan informacion
                                            personal directamente, sino que se basan en la identificación unica de su
                                            navegador y dispositivo de acceso al internet. Si no permite estas cookies,
                                            tendra menos publicidad dirigida</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <div class="row center-align">
                                <div class="col s12 m12 l12 xl12 elementos--cookies" style="padding-right:25px"><a
                                        class="modal-trigger modal-close letranegro Tipografia--general Botones"
                                        style="float:right" onclick="cerrar_modal();">Confirmar Opciones</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4 xl4 elementos--cookies"><a
                        class="close_hover letranegro Tipografia--general Botones" href="#!"
                        onclick="denegarCookies();">No Estoy de Acuerdo </a></div>
                <div class="col s12 m12 l4 xl4 elementos--cookies"><a
                        class="modal-close close_hover letranegro Tipografia--general Botones" href="#!"
                        onclick="aceptarCookies();">Estoy de Acuerdo</a></div>
            </div>
        </div>
    </div>
    <div class="row">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header color--blanco color--fondo--negro"
                    style="border:none;padding:0;margin-top:-9px;margin-left:-1px;margin-right:-1px" id="chefle"><span
                        style="margin-left:15px"><b class="Tipografia--general Desplegables">Chemical Broker
                        </b></span><i class="medium material-icons rigth" id="rotar">arrow_drop_down</i></div>
                <div class="collapsible-header color--fondo--negro color--blanco Carreras_altura"
                    style="border:none;padding:0;margin-right:15px;float:right;height:0px"><span
                        style="margin-left:15px"><b class="Tipografia--general Desplegables"> <a
                                href="Carreras.php">Carreras </a></b></span></div>
                <div class="collapsible-body color--fondo--negro" style="margin-left:-1px;margin-right:-1px">
                    <div class="row">
                        <div class="col s12 m12 l6 xl6">
                            <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col s12 m12 l10 xl10 sections">
                                            <h6 class="Tipografia--general Titulos color--blanco"
                                                style="padding-top:5px">Nosotros</h6>
                                            <p class="Tipografia--general General--Cuerpo" style="color:#a7a7a7;">
                                                Chemical Broker es un proveedor mundial de servicios de intermediación,
                                                comercialización, distribución, importación y exportación de productos
                                                químicos.</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section style="margin-top:-17px">
                                <div class="container">
                                    <div class="divider divider_sections"></div>
                                    <div class="row">
                                        <div class="col s12 m12 l10 xl10 sections">
                                            <h6 class="Tipografia--general Titulos color--blanco"
                                                style="padding-top:5px;">Enfoque de Negocios</h6>
                                            <p class="Tipografia--general General--Cuerpo" style="color: #a7a7a7;">
                                                Nuestros negocios brindan servicio a nuestros clientes en las
                                                industrias&nbsp Farmacéutica, Alimentaria y Nutrición Humana,
                                                Alimentaria y Nutrición Animal, Agroquímicos, Cosmética y Cuidado
                                                Personal, Detergencia, Industria Química</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section style="margin-top:-17px">
                                <div class="container">
                                    <div class="divider divider_sections"></div>
                                    <div class="row">
                                        <div class="col s12 m12 l10 xl10 sections">
                                            <h6 class="Tipografia--general Titulos color--blanco"
                                                style="padding-top:5px">Teléfonos </h6>
                                            <div class="col s12 m12 l12 xl12">
                                                <h6 class="Tipografia--general Titulos color--blanco">Ventas </h6>
                                                <p class="Tipografia--general General--Cuerpo"
                                                    style="color: #a7a7a7 !important;">Teléfono:<a class="arrowblue"
                                                        href="tel:+525575861888"
                                                        style="color:#a7a7a7">+52.55.4438.7996</a></p>
                                            </div>
                                            <div class="col s12 m12 l12 xl12">
                                                <h6 class="Tipografia--general Titulos color--blanco">Información
                                                    General </h6>
                                                <p class="Tipografia--general General--Cuerpo"
                                                    style="color: #a7a7a7 !important;">Teléfono: <a class="arrowblue"
                                                        href="tel:+525575861818" style="color:#a7a7a7">+52.55.4438.7996
                                                    </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col s12 m12 l6 xl6 push-m1 pull-l1 pull-xl1">
                            <div class="col s12 m12 l4 xl6">
                                <section>
                                    <ul>
                                        <p class="color--blanco"><b class="Tipografia--general Titulos">Compañia</b></p>
                                        <hr class="hr" />
                                        <ul> <a class="arrowblue Tipografia--general Subtitulos"
                                                href="index.php">Nosotros <i
                                                    class="fas fa-long-arrow-alt-right desaparece"
                                                    id="aparece"></i></a><br /><a
                                                class="arrowblue Tipografia--general Subtitulos"
                                                href="Historia_Hechos.php">Historia y Hechos <i
                                                    class="fas fa-long-arrow-alt-right desaparece"
                                                    id="aparece"></i></a><br /><a
                                                class="arrowblue Tipografia--general Subtitulos" href="Marca.php">Marca
                                                <i class="fas fa-long-arrow-alt-right desaparece"
                                                    id="aparece"></i></a><br /><a
                                                class="arrowblue Tipografia--general Subtitulos"
                                                href="Valores.php">Valores <i
                                                    class="fas fa-long-arrow-alt-right desaparece"
                                                    id="aparece"></i></a><br /><a
                                                class="arrowblue Tipografia--general Subtitulos"
                                                href="Premisas.php">Premisas <i
                                                    class="fas fa-long-arrow-alt-right desaparece"
                                                    id="aparece"></i></a><br /><a
                                                class="arrowblue Tipografia--general Subtitulos"
                                                href="Servicio_Total.php">Servicio Integral &nbsp<i
                                                    class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a>
                                        </ul>
                                    </ul>
                                </section>
                            </div>
                            <div class="col s12 m12 l8 xl6 push-l3">
                                <section>
                                    <ul>
                                        <p class="color--blanco"><b class="Tipografia--general Titulos">Politicas </b>
                                            <hr class="hr" />
                                            <li> <a class="arrowblue Tipografia--general Subtitulos"
                                                    href="Code_of_Conduct.php">Codigo de Conducta Organizacional <i
                                                        class="fas fa-long-arrow-alt-right desaparece"
                                                        id="aparece"></i></a></li>
                                            <li> <a class="arrowblue Tipografia--general Subtitulos"
                                                    href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf"
                                                    download="download">Politica de Privacidad <i
                                                        class="fas fa-long-arrow-alt-right desaparece"
                                                        id="aparece"></i></a></li>
                                            <li><a class="arrowblue Tipografia--general Subtitulos"
                                                    href="Politica_Calidad.php">Politica de Calidad &nbsp <i
                                                        class="fas fa-long-arrow-alt-right desaparece"
                                                        id="aparece"></i></a></li>
                                            <li><a class="arrowblue Tipografia--general Subtitulos"
                                                    href="../PDF/CBM_CODCONDUCT_PROVEEDORES.pdf" download>Código de
                                                    Conducta de Proveedores &nbsp <i
                                                        class="fas fa-long-arrow-alt-right desaparece"
                                                        id="aparece"></i></a></li>
                                            <li><a class="arrowblue Tipografia--general Subtitulos"
                                                    href="../PDF/CBM_CODCONDUCT_CLIENTES.pdf" download>Código de
                                                    Conducta de Clientes &nbsp <i
                                                        class="fas fa-long-arrow-alt-right desaparece"
                                                        id="aparece"></i></a></li>
                                        </p>
                                    </ul>
                                </section>
                            </div>
                            <div class="col s12 m12 l12 xl8">
                                <!-- <section>
                    <ul> 
                      <p class="color--blanco"><b class="Tipografia--general Titulos">Empleados </b>
                        <hr class="hr"/>
                        <li> <a class="arrowblue Tipografia--general Subtitulos" href="VISTA/Principal.php">Intranet&nbsp <i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></li>
                      </p>
                    </ul>
                  </section>
                  <section>
<ul> 
<p class="color--blanco"><b class="Tipografia--general Titulos">Denuncias quejas y sugerencias</b>
</p><hr class="hr">
<li> <a class="arrowblue Tipografia--general Subtitulos" href="https://forms.gle/5n6TRNdamEHYYrFw8">Canal de denuncias, quejas y sugerencias&nbsp; <i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></li>
<p></p>
</ul>
</section> -->
                            </div>
                            <div class="col s12 m12 l12 pull-l7 xl4 pull-xl2">
                                <section>
                                    <ul>
                                        <p class="color--blanco"><b class="Tipografia--general Titulos">Carreras </b>
                                            <hr class="hr" />
                                            <li> <a class="arrowblue Tipografia--general Subtitulos"
                                                    href="Carreras.php">Carreras <i
                                                        class="fas fa-long-arrow-alt-right desaparece" id="aparece">
                                                    </i></a></li>
                                        </p>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="row">
        <nav class="fondo--color--corporativo" style="height:137px;margin-top:-35px" role="navigation">
            <div class="nav-wrapper container contlog"><img class="img-logo" src="img/CB_IMAGOTIPO_AZUL.png"
                    alt="Logotipo" /></div>
        </nav>
    </div>
    <nav style="background-color:white;height:25px;margin-top:-19px">
        <div class="nav-wrapper flex"><a class="sidenav-trigger" href="#" data-target="mobile-demo"><i
                    class="material-icons letranegro">menu</i></a><span class="Pmenu letranegro">Menu</span>
            <ul class="hide-on-med-and-down">
                <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos"
                        href="Mercados.php"><b>Mercados</b></a></li>
                <ul id="dropdown3" class="dropdown-content" style="width:300px !important;">
                    <li><a href="Productos_news.php" class="Tipografia--general letranegro Subtitulos">Familias</a>
                    </li>

                    <li><a href="Catalogos_Productos.php"
                            class="Tipografia--general letranegro Subtitulos">Catalogos</a></li>
                </ul>
                <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos dropdown-trigger" href="#!"
                        data-target="dropdown3"><b>Productos<i class="material-icons right">arrow_drop_down</i></b></a>
                </li>
                <li><a class="elemennav-secun Tipografia--general letranegro Subtitulos"
                        href="Servicios.php"><b>Servicios</b></a></li>
                <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos dropdown-trigger"
                        data-target="dropdown4" href="Cumplimiento.php"><b>Cumplimiento<i
                                class="material-icons right">arrow_drop_down</i></b></a>
                    <ul id="dropdown4" class="dropdown-content" tabindex="0">
                        <li tabindex="0"><a href="Cumplimiento.php"
                                class="Tipografia--general letranegro Subtitulos">Sistema de Gestión Integral</a></li>
                        <li tabindex="0"><a href="Marco_Regulatorio.php"
                                class="Tipografia--general letranegro Subtitulos">Marco Regulatorio</a></li>
                        <li tabindex="0"><a href="Certificaciones.php"
                                class="Tipografia--general letranegro Subtitulos">Certificaciones</a></li>
                    </ul>
                </li>
                <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos" href="Contact.php"><b>Contacto
                        </b></a></li>
            </ul>
        </div>
        <div>
            <ul>
                <!--  <a class="waves-effect right btn-lock1" style="background-color:#c73e32;cursor:pointer;padding:10px;" href="chemicalbroker.mx/Vista/Principal.php" id="LockBoton"><i class="material-icons left icon-lock1 desaparecelock color--blanco" style="margin-top:-24px;font-size:20px !important">lock</i><i class="material-icons left icon-lock1 aparecelock color--blanco" style="display:none;margin-top:-24px;font-size:20px !important" id="unlock1">lock_open</i><span class="candadodesktop"></span>
<div style="display:flex;justify-content:center"> 
<p class="Botones Logindesktop Tipografia--general" style="align-self:center"> <b>Iniciar Sesión</b></p>
</div></a> -->
                <li class="ul-independiente right"><a class="btn-search-desktop1" href="Buscador_CB.php"
                        id="busquedaprueba"><i class="material-icons left search-desktop-icon letranegro"
                            style="font-size:24px;font-weight:500;position:absolute;z-index:1;margin-left:188px;">search</i></a>
                </li>
            </ul>
            <div style="height:0;"><a class="sidenav-trigger btn-search-mobile1 right" href="Buscador_CB.php"><i
                        class="material-icons search-mobile-icon margin-left-search-mobile-icon"
                        style="width:0px;margin-left:-10px">search</i></a></div>
        </div>
    </nav>
    <ul class="collapsible" id="search1" style="display:none">
        <li>
            <div class="collapsible-header">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12 xl12">
                            <p> Search <i class="small material-icons left ico-Search">chevron_right</i></p>
                            <hr class="letranegro color--fondo--negro" />
                        </div>
                        <div class="col s12 m12 l12 xl12"><a href="#" style="margin-left:13px"><i
                                    class="material-icons left icon-menu-search letranegro">search</i></a>
                            <input class="txt-menu-search" type="search" id="inputBusqueda"
                                placeholder=" Buscar contenido dentro del sitio" />
                        </div>
                    </div>
                    <div class="col s12 m12 l12 xl12 search" id="search">
                        <table class="search-table" id="searchTable" style="width:100%">
                            <thead>
                                <tr>
                                    <td> </td>
                                </tr>
                            </thead>
                            <tbody class="center-aling">
                                <tr>
                                    <td class="border--hidden"><a class="letranegro border--hidden"
                                            href="index.php">Nosotros</a></td>
                                </tr>
                                <tr>
                                    <td class="border--hidden"><a class="letranegro border--hidden"
                                            href="Historia_Hechos.php">Historia y Hechos</a></td>
                                </tr>
                                <tr>
                                    <td class="border--hidden"><a class="letranegro border--hidden"
                                            href="Marca.php">Marca</a></td>
                                </tr>
                                <tr>
                                    <td class="border--hidden"><a class="letranegro border--hidden"
                                            href="Valores.php">Valores</a></td>
                                </tr>
                                <tr>
                                    <td class="border--hidden"><a class="letranegro border--hidden"
                                            href="Premisas.php">Premisas</a></td>
                                </tr>
                                <tr>
                                    <td class="border--hidden"><a class="letranegro border--hidden"
                                            href="Servicio_Total.php">Servicio Integral</a></td>
                                </tr>
                                <tr>
                                    <td class="border-hidden"><a class="letranegro border--hidden"
                                            href="Code_of_Conduct.php">Codigo de Conducta</a></td>
                                </tr>
                                <tr>
                                    <td class="border-hidden"><a class="letranegro border--hidden"
                                            href="Mercados.php">Mercados</a></td>
                                </tr>
                                <tr>
                                    <td class="border-hidden"><a class="letranegro border-hidden"
                                            href="Servicios.php">Servicios</a></td>
                                </tr>
                                <tr>
                                    <td class="border--hidden"><a class="letranegro border--hidden"
                                            href="Cumplimiento.php">Sistema de Gestión Integral</a></td>
                                </tr>
                                <tr>
                                    <td class="border--hidden"><a class="letranegro" href="Contact.php"
                                            style="border:hidden">Contacto</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col s12 m12 l12 xl12 center-align"><a href="#" onclick="cerrarsearch();"><i
                                class="material-icons letranegro" style="font-size:45px;">keyboard_arrow_up</i></a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <ul class="sidenav fondo--color--corporativo" id="mobile-demo">
        <li> <a class="color--blanco" href="Mercados.php"> <i class="small material-icons right color--blanco"
                    style="margin-top:0px !important;">chevron_right</i>
                <p class="color--blanco">Mercados</p>
            </a>
            <div class="divider"></div>
        </li>
        <li> <a class="color--blanco" href="Productos_news.php"><i class="small material-icons right color--blanco"
                    style="margin-top:0px !important;">chevron_right</i>
                <p class="color--blanco">Productos </p>
            </a>
            <div class="divider"> </div>
        <li> <a class="color--blanco" href="Servicios.php"><i class="small material-icons right color--blanco"
                    style="margin-top:0px !important;">chevron_right</i>
                <p class="color--blanco">Servicios</p>
            </a></li>
        <div class="divider"></div>
        <li> <a class="color--blanco" href="Cumplimiento.php"><i class="small material-icons right color--blanco"
                    style="margin-top:0px !important;">chevron_right</i>
                <p style="color:white !important;">SGI</p>
            </a></li>
        <div class="divider"></div>
        <li> <a class="color--blanco" href="Contact.php"><i class="small material-icons right color--blanco"
                    style="margin-top:0px !important;">chevron_right</i>
                <p class="color--blanco">Contact</p>
            </a></li>
        <div class="divider"></div>
        <li> <a class="sidenav-trigger color--blanco" href="#" data-target="mobile-search"><i
                    class="small material-icons right color--blanco" style="margin-top:0px !important;">search</i>
                <p class="color--blanco">Search</p>
            </a></li>
        <div class="divider"></div>

        </li>
    </ul>
    <ul class="sidenav fondo--color--corporativo" id="mobile-search">
        <div class="container grid-search-mobile">
            <p class="color--blanco">Search<i class="small material-icons right ico-Search color--blanco">search</i></p>
            <hr class="letranegro color--fondo--negro" />
            <input type="text" style="border: 1px solid black;background-color:#e9e9e9" id="Busqueda_mobile"
                placeholder=" Buscar contenido" />
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12 xl12 search" id="search2">
                        <table class="search-table" id="searchTable2" style="width:100%;">
                            <thead>
                                <tr>
                                    <td> </td>
                                </tr>
                            </thead>
                            <tbody class="center-align">
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="border--hidden color--blanco" href="index.php">Nosotros</a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="border--hidden color--blanco" href="Historia_Hechos.php">Historia y
                                            Hechos</a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a href="Marca.php"></a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="border--hidden color--blanco" href="Valores.php">Valores </a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="color--blanco border--hidden" href="Premisas.php">Premisas </a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="border--hidden color--blanco" href="Servicio_Total.php">Servicio
                                            Integral </a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="border--hidden color--blanco" href="Code_of_Conduct.php">Codigo de
                                            Conducta </a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="border--hidden color--blanco" href="Mercados.php">Mercados </a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"> <a
                                            class="border--hidden color--blanco" href="Servicios.php">Servicios</a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="border--hidden color--blanco" href="Cumplimiento.php">Sistema de
                                            Gestión Integral </a></td>
                                </tr>
                                <tr>
                                    <td class="fondo--color--corporativo border--hidden"><a
                                            class="border--hidden color--blanco" href="Contact.php">Contacto </a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </ul>
    <div class="row">
        <div class="slider slider-prueba">
            <ul class="slides">
                <li>
                    <div id="BannerDinamico" style="height:800px;background:linear-gradient(#071637 99%);">
                        <b class="segundotitulo"
                            style="float:right;color:white;margin-top:200px;margin-right:150px;"><span>Nuestros
                                Productos</span><br><span id="segundotitulo"></span></b>
                    </div>
                    <div class="caption center-align"><br><br><br><br>
                        <br>

                        <div class="container" style="margin-top:-100px;">
                            <div class="row">
                                <div class="col s12 m12 l12 xl12">



                                </div>
                            </div>
                        </div>


                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="container" style="margin-top:80px">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
            </div>
        </div>
    </div>

    <div class="container sticky-industria" style="margin-top:50px">
        <div class="row">
            <div class="col s12 m12 l12 xl12">

                <section style="margin-top:20px"><a class="active" href="index.php" style="color:black !important"><b
                            class="Tipografia--general Subtitulos">Inicio&nbsp</b><b
                            class="Tipografia--general Subtitulos" style="color:black;"> >&nbsp </b></a><a
                        class="breditem active" href="Products_news.php"
                        style="color:black !important;margin-left:-2px"><b
                            class="Tipografia-general Subtitulos">Productos ></b></a> <a class="breditem active"
                        href="Products_Manufacturer.php" style="color:red !important;margin-left:-2px"><b
                            class="Tipografia-general Subtitulos">Productos & Fabricantes </b></a></section>

                <h2 class="Tipografia--general letranegro General--Cuerpo"><b>Escoja un Sector de Negocio</b></h2>




                <div class="col s12 m6 l3">

                    <div class="card-industria-pro" data-industria="1" data-segmento="3" data-nindustria="Farmacéutica" data-color="#0066ff">

                        <video width="100%" style="border-radius:10px" autoplay="autoplay" loop="loop" muted
                            defaultMuted playsinline>


                            <source class="mercadosimagen" src="VIDEO/Farma.mp4" type="video/mp4">
                        </video>

                        <div class="overlay-pro">

                            <!-- ICONO -->
                            <div class="icono-industria">
                                <i class="material-icons">medical_services</i>
                            </div>

                            <!-- TEXTO -->
                            <div class="contenido">
                                <h6>Farmacéutica</h6>
                            </div>

                            <!-- CHECK ACTIVO -->
                            <div class="check-activo">
                                <i class="material-icons">check</i>
                            </div>

                            <!-- PATRÓN -->
                            <div class="pattern-dots"></div>

                        </div>

                    </div>

                </div>



                <div class="col s12 m6 l3">

                    <div class="card-industria-pro" data-industria="1" data-nombre="Veterinaria">

                        <video width="100%" style="border-radius:10px" autoplay="autoplay" loop="loop" muted
                            defaultMuted playsinline>


                            <source class="mercadosimagen" src="VIDEO/Veterinaria.mp4" type="video/mp4">
                        </video>


                        <div class="overlay-pro">

                            <!-- ICONO -->
                            <div class="icono-industria">
                                <i class="material-icons">medical_services</i>
                            </div>

                            <!-- TEXTO -->
                            <div class="contenido">
                                <h6>Veterinaria</h6>
                            </div>

                            <!-- CHECK ACTIVO -->
                            <div class="check-activo">
                                <i class="material-icons">check</i>
                            </div>

                            <!-- PATRÓN -->
                            <div class="pattern-dots"></div>

                        </div>

                    </div>

                </div>



                <div class="col s12 m6 l3">

                    <div class="card-industria-pro" data-industria="3" data-segmento="3" data-nindustria="Alimentos & Nutrición Humana" data-color="#F5DF4D">

                        <video width="100%" style="border-radius:10px" autoplay="autoplay" loop="loop" muted
                            defaultMuted playsinline>


                            <source class="mercadosimagen" src="VIDEO/NUTRICION_HUMANA2.mp4" type="video/mp4">
                        </video>

                        <div class="overlay-pro">

                            <!-- ICONO -->
                            <div class="icono-industria">
                                <i class="material-icons">medical_services</i>
                            </div>

                            <!-- TEXTO -->
                            <div class="contenido">
                                <h6>Alimentos & Nutrición Humana</h6>
                            </div>

                            <!-- CHECK ACTIVO -->
                            <div class="check-activo">
                                <i class="material-icons">check</i>
                            </div>

                            <!-- PATRÓN -->
                            <div class="pattern-dots"></div>

                        </div>

                    </div>

                </div>


                <div class="col s12 m6 l3">

                    <div class="card-industria-pro" data-industria="1" data-nombre="Alimentos & Nutricion Animal">

                        <video width="100%" style="border-radius:10px" autoplay="autoplay" loop="loop" muted
                            defaultMuted playsinline>


                            <source class="mercadosimagen" src="VIDEO/ALIMENTO_ANIMAL2.mp4" type="video/mp4">
                        </video>

                        <div class="overlay-pro">

                            <!-- ICONO -->
                            <div class="icono-industria">
                                <i class="material-icons">medical_services</i>
                            </div>

                            <!-- TEXTO -->
                            <div class="contenido">
                                <h6>Alimentos & Nutrición Animal</h6>
                            </div>

                            <!-- CHECK ACTIVO -->
                            <div class="check-activo">
                                <i class="material-icons">check</i>
                            </div>

                            <!-- PATRÓN -->
                            <div class="pattern-dots"></div>

                        </div>

                    </div>

                </div>



                <div class="col s12 m6 l3" style="margin-top:50px;">

                    <div class="card-industria-pro" data-industria="1" data-nombre="Agroquímicos">

                        <video width="100%" style="border-radius:10px" autoplay="autoplay" loop="loop" muted
                            defaultMuted playsinline>


                            <source class="mercadosimagen" src="VIDEO/AGRICULTURA3.mp4" type="video/mp4">
                        </video>
                        <div class="overlay-pro">

                            <!-- ICONO -->
                            <div class="icono-industria">
                                <i class="material-icons">medical_services</i>
                            </div>

                            <!-- TEXTO -->
                            <div class="contenido">
                                <h6>Agroquímicos</h6>
                            </div>

                            <!-- CHECK ACTIVO -->
                            <div class="check-activo">
                                <i class="material-icons">check</i>
                            </div>

                            <!-- PATRÓN -->
                            <div class="pattern-dots"></div>

                        </div>

                    </div>

                </div>

                <div class="col s12 m6 l3" style="margin-top:50px;">

                    <div class="card-industria-pro" data-industria="1" data-nombre="Cosmeticos & Cuidado Personal">

                        <video width="100%" style="border-radius:10px" autoplay="autoplay" loop="loop" muted
                            defaultMuted playsinline>


                            <source class="mercadosimagen" src="VIDEO/COSMETICOS.mp4" type="video/mp4">
                        </video>
                        <div class="overlay-pro">

                            <!-- ICONO -->
                            <div class="icono-industria">
                                <i class="material-icons">medical_services</i>
                            </div>

                            <!-- TEXTO -->
                            <div class="contenido">
                                <h6>Cosmeticos & Cuidado Personal</h6>
                            </div>

                            <!-- CHECK ACTIVO -->
                            <div class="check-activo">
                                <i class="material-icons">check</i>
                            </div>

                            <!-- PATRÓN -->
                            <div class="pattern-dots"></div>

                        </div>

                    </div>

                </div>



                <div class="col s12 m6 l3" style="margin-top:50px;">

                    <div class="card-industria-pro" data-industria="1" data-nombre="Detergentes & Hogar">

                        <video width="100%" style="border-radius:10px" autoplay="autoplay" loop="loop" muted
                            defaultMuted playsinline>


                            <source class="mercadosimagen" src="VIDEO/DETERGENTES2.mp4" type="video/mp4">
                        </video>
                        <div class="overlay-pro">

                            <!-- ICONO -->
                            <div class="icono-industria">
                                <i class="material-icons">medical_services</i>
                            </div>

                            <!-- TEXTO -->
                            <div class="contenido">
                                <h6>Detergentes & Hogar</h6>
                            </div>

                            <!-- CHECK ACTIVO -->
                            <div class="check-activo">
                                <i class="material-icons">check</i>
                            </div>

                            <!-- PATRÓN -->
                            <div class="pattern-dots"></div>

                        </div>

                    </div>

                </div>


                <div class="col s12 m6 l3" style="margin-top:50px;">

                    <div class="card-industria-pro" data-industria="1" data-nombre="Químicos">

                        <video width="100%" style="border-radius:10px" autoplay="autoplay" loop="loop" muted
                            defaultMuted playsinline>


                            <source class="mercadosimagen" src="VIDEO/QUIMICO.mp4" type="video/mp4">
                        </video>
                        <div class="overlay-pro">

                            <!-- ICONO -->
                            <div class="icono-industria">
                                <i class="material-icons">medical_services</i>
                            </div>

                            <!-- TEXTO -->
                            <div class="contenido">
                                <h6>Químicos</h6>
                            </div>

                            <!-- CHECK ACTIVO -->
                            <div class="check-activo">
                                <i class="material-icons">check</i>
                            </div>

                            <!-- PATRÓN -->
                            <div class="pattern-dots"></div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>





    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <h2 class="Tipografia--general letranegro General--Cuerpo"><b>Escoja un Segmento de Mercado de</b>
                    <b><span id="Segundotitulo2" style="color:black;"></span></b>
                </h2>
            </div>
            <div id="Contenedor_Filtros"></div>
            <div class="row">
                <div id="Contenedor_Productos" class="col s12"></div>
            </div>

        </div>
    </div>

    </div>

    <!-- <div class="container">
    <div class="row">
    <div class="col s12 m12 l12 xl12">
        <a href="https://wa.me/5615242685?text=Hola" clas="float-wa" target="_blank"><h2 class="Tipografia--general letranegro General--Cuerpo"><b><button class="btn" style="background-color:#071637;color:white;cursor:pointer;">Cotiza o Consulta con nosotros tu requerimiento</button> </b></h2></a> -->
    <!-- <button style="background-color:#071637;color:white;width:100%;border-radius:15px;height:60px;">Contactenos</button> -->
    <!-- </div>
    </div>
</div> -->



    <footer class="altofooter">
        <div class="divfooter" style="text-align:center;"><img class="imglogoCE" src="img/CB_IMAGOTIPO_LEON.jpg"
                alt="ESCUDO DE C&E"></div><br><br>
        <div class="container-fluid center-align" style="margin-top:-50px">
            <p class="Tipografia--general letranegro center-align Pie--Pagina">© 2014 | Chemical Broker Todos los
                Derechos Reservados. | <a href="Contact.php" style="color:black !important;font-size:16px">Contacto
                    |&nbsp</a><a href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download
                    style="color:black !important;font-size:16px">Politica de Privacidad </a></p>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/init.js"></script>
        <script type="text/javscript" src="js/materialize.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SGJQ8FDDJ6"></script>
        <script src="js/Banner_Dinamicos.js"></script>
        <link rel="shortcut icon" href="img/CB_ICON.ico" />

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
            integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymus">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </footer>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/43785156.js"></script>
    <script src="js/Traduccion.js"></script>
    <!-- End of HubSpot Embed Code -->
    <a href="https://wa.me/5615242685?text=Hola" class="float-wa" target="_blank">
        <i class="fa fa-whatsapp" style="margin-top:16px;"></i>
    </a>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-SGJQ8FDDJ6');
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            let industriaSeleccionada = null;
            let segmentoSeleccionado = null;
            let industriaNombreSeleccionada = null;

            const contenedorFiltros = document.getElementById("Contenedor_Filtros");
            const contenedorProductos = document.getElementById("Contenedor_Productos");

            // ===============================
            // INICIALIZAR MODAL
            // ===============================
            const modals = document.querySelectorAll('.modal');
            M.Modal.init(modals);


            // ===============================
            // CLICK EN INDUSTRIA
            // ===============================
            document.querySelectorAll(".card-industria-pro").forEach(card => {

                card.addEventListener("click", function () {

                    document.querySelectorAll(".card-industria-pro")
                        .forEach(c => c.classList.remove("activa"));

                    this.classList.add("activa");

                    industriaSeleccionada = this.dataset.industria;
                    industriaNombreSeleccionada = this.dataset.nombre; // IMPORTANTE

                    segmentoSeleccionado = null;

                    generarFiltros();
                    renderProductos();
                });

            });


            // ===============================
            // GENERAR FILTROS
            // ===============================
            function generarFiltros() {

                contenedorFiltros.innerHTML = "";

                const segmentosUnicos = [
                    ...new Map(
                        productos
                        .filter(p => p.id_industria == industriaSeleccionada)
                        .map(p => [p.id_segmento, p])
                    ).values()
                ];

                segmentosUnicos.forEach(seg => {

                    const btn = document.createElement("a");
                    btn.className = "btn";
                    btn.style.background = "#071637";
                    btn.style.marginRight = "10px";
                    btn.style.borderRadius = "15px";
                    btn.textContent = seg.nombre_segmento;
                    btn.dataset.segmento = seg.id_segmento;

                    btn.addEventListener("click", function () {

                        segmentoSeleccionado = this.dataset.segmento;
                        renderProductos();
                    });

                    contenedorFiltros.appendChild(btn);
                });
            }


            // ===============================
            // RENDER PRODUCTOS
            // ===============================
            function renderProductos() {

                contenedorProductos.innerHTML = "";

                const productosFiltrados = productos.filter(p => {

                    let coincideIndustria = industriaSeleccionada ?
                        p.id_industria == industriaSeleccionada :
                        true;

                    let coincideSegmento = segmentoSeleccionado ?
                        p.id_segmento == segmentoSeleccionado :
                        true;

                    return coincideIndustria && coincideSegmento;
                });

                if (productosFiltrados.length === 0) {
                    contenedorProductos.innerHTML = `
        <div style="width:100%; text-align:center; margin-top:40px;">
            <p>No hay productos disponibles</p>
        </div>`;
                    return;
                }

                productosFiltrados.forEach(prod => {

                    const div = document.createElement("div");
                    div.style.marginTop = "20px";
                    div.classList.add("card", "hoverable", "card-producto");

                    div.innerHTML = `

<div class="card-content">

    <div class="row valign-wrapper" style="margin-bottom:0;">

        <div class="col s12 m6 l8 xl8">

            <div class="chip orange lighten-5 orange-text text-darken-4">
                ${prod.nombre_industria}
            </div>

            <span class="card-title" style="font-weight:600;">
                ${prod.nombre_producto}
            </span>

            <p class="grey-text text-darken-1" style="margin:0;text-align:justify">
                ${prod.descripcion}
            </p>

            <a href="${prod.Link_Web}" class="blue-text text-darken-2">
                Ver detalles →
            </a>

        </div>

        <div class="col s12 m6 l4 xl4 center-align">
            ${prod.imagen 
                ? `<img src="${prod.imagen}" style="max-width:100%; max-height:120px; object-fit:contain;">`
                : ""}
        </div>

    </div>

</div>

<div class="divider"></div>

<div class="card-action grey lighten-5">

    <a href="descargar_doctos.php?producto=${prod.ruta_documentos}" 
       class="btn-small"
       style="margin-right:10px;border-radius:15px;background-color:#071637;">
       Descargar documentos
    </a>

    <a class="btn-small modal-trigger"
       href="#modalMuestra"
       data-producto="${prod.nombre_producto}"
       style="margin-right:10px;border-radius:15px;background-color:#071637;">
       Solicitar muestra
    </a>

    <a class="btn-small" href="https://wa.me/525615242686?text=Hola,%20quiero%20cotizar%20productos%20químicos"
       style="margin-right:10px;border-radius:15px;background-color:#071637;">
       Solicitar cotización
    </a>

   

</div>
`;

                    contenedorProductos.appendChild(div);
                });

            }

        });


        // ===============================
        // CAPTURAR PRODUCTO AL ABRIR MODAL
        // ===============================
        document.addEventListener("click", function (e) {

            const btn = e.target.closest(".modal-trigger");
            if (!btn) return;

            const producto = btn.dataset.producto;

            document.getElementById("producto_nombre").value = producto;

        });


        // ===============================
        // ENVIAR FORMULARIO A BD
        // ===============================
        document.addEventListener("submit", function (e) {

            if (e.target.id !== "formMuestra") return;

            e.preventDefault();

            const data = new FormData(e.target);

            fetch("descargar.php", {
                    method: "POST",
                    body: data
                })
                .then(res => res.text())
                .then(respuesta => {

                    console.log(respuesta);

                    M.toast({
                        html: 'Solicitud enviada correctamente'
                    });

                    e.target.reset();
                })
                .catch(error => {
                    console.error(error);
                    M.toast({
                        html: 'Error al enviar'
                    });
                });

        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modals = document.querySelectorAll('modal');
            M.Modal.init(modals);
        });
    </script>


    <div id="modalMuestra" class="modal modal-fixed-footer modal-corporativo">

        <div class="modal-content">

            <!-- HEADER -->
            <div class="header-modal">
                <div class="header-info">
                    <div class="header-logo">
                        <center><img src="img/IMAGOTIPO_WEB.jpg" alt="Chemical Broker" width="50%"
                                style="display:flex;justify-content:center;"></center>
                    </div>
                    <center>
                        <h5 class="subtitulo" style="color:black;">Solicitud de muestra</h5>
                    </center>
                </div>


            </div>

            <!-- FORM -->
            <div class="row">
                <form id="formMuestra" method="POST" action="descargar.php" class="col s12 m12 l12 xl12">



                    <!-- EMPRESA -->

                    <div class="row">


                        <div class="input-field col s12 m12 l6 xl6">

                            <input id="producto" name="producto" type="text" required>
                            <label for="producto">Producto</label>



                        </div>


                        <div class="input-field col s12 m12 l6 xl6">



                            <input id="empresa" name="empresa" type="text" required>
                            <label for="empresa">Empresa</label>

                        </div>

                        <div class="input-field col s12 m6 l6 xl6">
                            <input id="nombre" name="nombre" type="text" required>
                            <label for="nombre">Nombre completo</label>
                        </div>

                        <div class="input-field col s12 m6">
                            <input id="correo" name="correo" type="email" required>
                            <label for="correo">Correo corporativo</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="telefono" name="telefono" type="text">
                            <label for="telefono">Teléfono</label>
                        </div>

                        <div class="input-field col s12 m6 l6 xl6">
                            <textarea id="uso" name="uso" class="materialize-textarea"></textarea>
                            <label for="uso">¿Para qué proceso o producto lo utilizará?</label>
                        </div>

                    </div>




                    <div class="row">
                        <div class="input-field col s6">
                            <input id="cantidad" name="cantidad" type="text">
                            <label for="cantidad">Cantidad requerida</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="industria" name="industria" type="text">
                            <label for="industria">Industria</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                            <input id="comentarios" name="comentarios" type="text">
                            <label for="comentarios">Comentarios</label>
                        </div>
                    </div>






                    <!-- FOOTER -->
                    <div style="display:flex;justify-content:center;color:#071637;">
                        <a href="#!" class="modal-close btn-flat"
                            style="color:#071637;border-radius:20px;"><b>Cancelar</b></a>

                        <button type="submit" id="enviarMuestra" class="btn-flat"
                            style="color:#071637;border-radius:20px;">
                            <b>Enviar solicitud</b>
                        </button>
                    </div>


                </form>
            </div>

        </div>


    </div>


</body>

</html>