<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximun-scale=1.0">
  <meta name="description" content="La cadena de suministro de Chemical Broker considera puntos esenciales que aseguran la integridad y cumplimiento de los procesos de su organizacion">
  <title>Chemical Broker | Cadena de Suministro</title>
  <link rel="shortcut icon" href="img/CB_ICON.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../css/styles.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="css/History_Line.css">
  <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <script src="../js/materialize.js?n=1" type="text/javascript"></script>
   <script src="../js/init.js?n=1"></script>
  <script src="js/wow.js"></script>
  <script>
    new WOW().init();
  </script>
   <script type="text/javscript" src="../js/materialize.min.js?n=1"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
  </script>
  <script type="text/javascript" charset="utf8" src="js/Buscador.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SGJQ8FDDJ6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-SGJQ8FDDJ6');
  </script>
</head>

<body>
  <style>
    .flip-container {
      background-color: transparent;
      width: auto;
      height: auto;
      perspective: 1000px;
    }

    .card {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 1s;
      transform-style: preserve-3d;
    }

    .flip-container:hover .card {
      transform: rotateY(180deg);
    }

    .front,
    .back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 5rem;
    }

    .front {
      background-color: #ff0000;
      color: #fff;

    }

    .back {
      background-color: #262137;
      border-radius: 25px;
      color: white;
      transform: rotateY(180deg);
      font-size: 16px;
      margin-top: -161px;
    }
  </style>

  <div class="modal" id="modal1" style="overflow-y:auto;">
    <div class="modal-content" style="overflow-y:auto;">
      <h6 class="letranegro"> <b class="tipografia--general Titulos letranegro">Respetamos tu Privacidad</b></h6>
      <p class="General--Cuerpo Tipografia--general letranegro">Este sitio web utiliza cookies. Con la ayuda de las
        cookies, podemos mejorar el rendimiento de nuestro sitio web, analizar la navegacion del sitio web, respaldar
        nuestras actividades de marketing en internet y ampliar la funcionalidad del sitio web. Decida que cookies
        podemos utilizar para procesar sus datos personales y compartir los datos con terceros. Tenga en cuenta que las
        cookies técnicamente necesarias deben establecerse para mantener la funcionalidad de nuestro sitio web. Si hace
        clic en 'Acepto', acepta el almacenamiento de cookies en su dispositivo y el procesamiento y transferencia de
        datos a terceros. Puede revocar su concentimiento en cualquier momento, administrar su configuración de cookies
        y obtener más información sobre nuestro uso de cookies en 'Configuracion de cookies'. Puede encontrar más
        información en nuestra <a class="Tipografia--general" href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf"
          style="color:rgba(2 146 238 /99%)">Política de Privacidad.</a></p>
    </div>
    <div class="modal-footer" style="height:25px">
      <div class="row center-align">
        <div class="col s12 m12 l4 xl4" style="margin-top:20px"><a
            class="modal-trigger close_hover Tipografia--general letranegro Botones" href="#modal2">Configuracion</a>
          <div class="modal" id="modal2" style="overflow-x:hidden">
            <div class="modal-content">
              <h6 class="letranegro"> <b class="Tipografia--general letranegro Titulos" style="float:left;">Centro de
                  Preferencias de Privacidad </b></h6>
              <p class="Tipografia--general letranegro General--Cuerpo" style="float:left;">Cuando visita cualquier
                sitio web, puede almacenar o recuperar información en su navegador, principalmente en forma de cookies.
                Esta información puede ser sobre usted, sus preferencias o su dispositivo y se utiliza principalmente
                para hacer que el sitio funcione como espera. Por lo general, la informacion no lo identifica
                directamente, pero puede brindarle una experiencia web mas personalizada. Debido a que respetamos su
                derecho a la privacidad, puede optar por no permitir algunos tipos de cookies. Haga clic en los titulos
                de las diferentes categorías para obtener más información y cambiar nuestra configuración
                predeterminada. Sin embargo, bloquear algunos tipos de cookies puede afectar su experiencia en el sitio
                y los servicios que podemos ofrecer.</p>
              <p> <a class="Botones Tipografia--general" href="#" style="color:blue;float:left;">Mas información</a></p>
              <div class="row">
                <div class="col s12 m12 l12 xl12" style="margin-top:16px"><a
                    class="modal-close Tipografia--general Botones" href="#!"
                    style="color:white;background-color:#262137 !important;padding:10px;float:left">Permitir Todo </a>
                </div>
              </div>
              <h6 class="letranegro"><b class="Tipografia--general letranegro Subtitulos"
                  style="float:left;">Administrar las preferencias de consentimiento</b><br></h6>
              <ul class="collapsible" style="margin-top:20px">
                <li>
                  <div class="collapsible-header letranegro Tipografia--general Botones">Cookies estrictamente
                    necesarias
                    <label>
                      <input class="filled-in" type="checkbox" checked="checked" style="float:right !important"
                        disabled><span class="letranegro"> </span>
                    </label>
                  </div>
                  <div class="collapsible-body">
                    <p class="Tipografia--general letranegro General--Cuerpo">Estas cookies son necesarias para que el
                      sitio web funcione y no se pueden desactivar en nuestros sistemas. Usualmente estan configuradas
                      para responder a acciones hechas por usted para recibir servicios, tales como ajustar sus
                      preferencias de privacidad, iniciar sesion en el sitio, o llenar formularios. Usted puede
                      configurar su navegador para bloquear o alertar la presencia de estas cookies, pero algunas partes
                      del sitio web no funcionaran. Estas cookies no guardan ninguna informacion personal identificable
                    </p>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header Tipografia--general Botones letranegro">Cookies de rendimiento
                    <label>
                      <input class="filled-in" type="checkbox" style="float:right !important" disabled><span
                        class="letranegro"> </span>
                    </label>
                  </div>
                  <div class="collapsible-body">
                    <p class="Tipografia--general letranegro General--Cuerpo">Estas cookies nos permiten contar las
                      visitas y fuentes de circulacion para poder medir y mejorar el desempeño de nuestro sitio. Nos
                      ayudan a saber qué son las más o menos populares y ver cuantas personas visitan el sitio. Toda la
                      informacion que recogen estas cookies es agregada y, por lo tanto, anónima. Si no permite estas
                      cookies no sabremos cuando visito nuestro sitio.</p>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header Tipografia--general letranegro Botones">Cookies de funcionalidad
                    <label>
                      <input class="filled-in" type="checkbox" style="float:right !important" disabled><span
                        class="letranegro"> </span>
                    </label>
                  </div>
                  <div class="collapsible-body">
                    <p class="Tipografia--general letranegro General--Cuerpo">Estas cookies permiten que el sitio
                      ofrezca una mejor funcionalidad y personalizacion. Pueden ser establecidas por nosotros o por
                      terceras partes cuyos servicios hemos agregado a nuestras paginas. Si no permiten estas cookies
                      algunos de nuestros servicios no funcionaran correctamente.</p>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header Tipografia--general letranegro  Botones">Cookies dirigidas
                    <label>
                      <input class="filled-in" type="checkbox" style="float:right !important" disabled><span
                        class="letranegro"> </span>
                    </label>
                  </div>
                  <div class="collapsible-body">
                    <p class="Tipografia--general letranegro General--Cuerpo">Estas cookies pueden estar en todo el
                      sitio web, colocadas por nuestros socios publicitarios. Estos negocios pueden utilizarlas para
                      crear un perfil de sus intereses y mostrarle anuncios relevantes en otros sitios. No almacenan
                      informacion personal directamente, sino que se basan en la identificación unica de su navegador y
                      dispositivo de acceso al internet. Si no permite estas cookies, tendra menos publicidad dirigida
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="modal-footer">
              <div class="row center-align">
                <div class="col s12 m12 l12 xl12" style="margin-top:20px;padding-right:25px"><a
                    class="modal-trigger modal-close letranegro Tipografia--general Botones" style="float:right"
                    onclick="cerrar_modal();">Confirmar Opciones</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m12 l4 xl4" style="margin-top:20px"><a
            class="close_hover letranegro Tipografia--general Botones" href="#!" onclick="denegarCookies();">No Estoy de
            Acuerdo </a></div>
        <div class="col s12 m12 l4 xl4" style="margin-top:20px"><a
            class="modal-close close_hover letranegro Tipografia--general Botones" href="#!"
            onclick="aceptarCookies();">Estoy de Acuerdo</a></div>
      </div>
    </div>
  </div>
  <div class="row">
    <ul class="collapsible">
      <li>
        <div class="collapsible-header"
          style="background-color:black;color:white;border:none;padding:0;margin-top:-9px;margin-left:-1px;margin-right:-1px"
          id="chefle"><span style="margin-left:15px"><b class="Tipografia--general Desplegables">Chemical Broker
            </b></span><i class="medium material-icons rigth" id="rotar">arrow_drop_down</i></div>
        <div class="collapsible-header Carreras_altura"
          style="background-color:black;color:white;border:none;padding:0;margin-right:15px;float:right;height:0px;">
          <span style="margin-left:15px"><b class="Tipografia--general Desplegables"> <a href="Carreras.php">Carreras
              </a></b></span>
        </div>
        <div class="collapsible-body" style="background-color:black;margin-left:-1px;margin-right:-1px">
          <div class="row">
            <div class="col s12 m12 l6 xl6">
              <section>
                <div class="container">
                  <div class="row">
                    <div class="col s12 m12 l10 xl10 sections">
                      <h6 class="Tipografia--general Titulos" style="color:white;padding-top:5px">Nosotros</h6>
                      <p class="Tipografia--general General--Cuerpo" style="color:#a7a7a7;">Chemical Broker es un
                        proveedor mundial de servicios de intermediación, comercialización, distribución, importación y
                        exportación de productos químicos.</p>
                    </div>
                  </div>
                </div>
              </section>
              <section style="margin-top:-17px">
                <div class="container">
                  <div class="divider divider_sections"></div>
                  <div class="row">
                    <div class="col s12 m12 l10 xl10 sections">
                      <h6 class="Tipografia--general Titulos" style="color:white;padding-top:5px;">Enfoque de Negocios
                      </h6>
                      <p class="Tipografia--general General--Cuerpo" style="color: #a7a7a7;">Nuestros negocios brindan
                        servicio a nuestros clientes en las industrias Farmacéutica, Alimentaria y Nutrición Humana,
                        Alimentaria y Nutrición Animal, Agroquímicos, Cosmética y Cuidado Personal, Detergencia,
                        Industria Química.</p>
                    </div>
                  </div>
                </div>
              </section>
              <section style="margin-top:-17px">
                <div class="container">
                  <div class="divider divider_sections"></div>
                  <div class="row">
                    <div class="col s12 m12 l10 xl10 sections">
                      <h6 class="Tipografia--general Titulos" style="color:white;padding-top:5px">Teléfonos </h6>
                      <div class="col s12 m12 l12 xl12">
                        <h6 class="Tipografia--general Titulos" style="color:white !important;">Ventas </h6>
                        <p class="Tipografia--general General--Cuerpo" style="color: #a7a7a7 !important;">Teléfono:
                          +52.55.7586.1888</p>
                      </div>
                      <div class="col s12 m12 l12 xl12">
                        <h6 class="Tipografia--general Titulos" style="color:white !Important;">Información General
                        </h6>
                        <p class="Tipografia--general General--Cuerpo" style="color: #a7a7a7 !important;">Teléfono:
                          +52.55.7586.1818 </p>
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
                    <p style="color:white;"><b class="Tipografia--general Titulos">Compañia</b></p>
                    <hr class="hr">
                    <ul> <a class="arrowblue Tipografia--general Subtitulos" href="index.php">Nosotros<i
                          class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a><br><a
                        class="arrowblue Tipografia--general Subtitulos" href="Historia_Hechos.php">Historia y Hechos
                        &nbsp<i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a><br><a
                        class="arrowblue Tipografia--general Subtitulos" href="Marca.php">Marca &nbsp<i
                          class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a><br><a
                        class="arrowblue Tipografia--general Subtitulos" href="values.php">Valores &nbsp<i
                          class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a><br><a
                        class="arrowblue Tipografia--general Subtitulos" href="Premisas.php">Premisas &nbsp<i
                          class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a><br><a
                        class="arrowblue Tipografia--general Subtitulos" href="Servicio_Total.php">Servicio Integral
                        &nbsp<i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></ul>
                  </ul>
                </section>
              </div>
              <div class="col s12 m12 l8 xl6 push-l3">
                <section>
                  <ul>
                    <p style="color:white"><b class="Tipografia--general Titulos">Politicas </b>
                      <hr class="hr">
                      <li> <a class="arrowblue Tipografia--general Subtitulos" href="Code_of_Conduct.php">Codigo de
                          conducta &nbsp <i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></li>
                      <li> <a class="arrowblue Tipogradia--general Subtitulos"
                          href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download>Politica de Privacidad <i
                            class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></li>
                      <li><a class="arrowblue Tipografia--general Subtitulos" href="Politica_Calidad.php">Politica de
                          Calidad &nbsp <i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></li>
                          <li><a class="arrowblue Tipografia--general Subtitulos" href="../PDF/CBMX_CODIGO-CONDUCTA-PROVEEDORES_220823.pdf" download>Código de Conducta de Proveedores &nbsp <i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></li>
<li><a class="arrowblue Tipografia--general Subtitulos" href="../PDF/CBMX_SLS_REF-DOC-2_V0 - CÓDIGO DE CONDUCTA PARA CLIENTES.pdf" download>Código de Conducta de Clientes &nbsp <i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></li>
                    </p>
                  </ul>
                </section>
              </div>
              <div class="col s12 m12 l12 xl8">
                <section>
                  <ul>
                    <p style="color: white"><b class="Tipografia--general Titulos">Empleados </b>
                      <hr class="hr">
                      <li> <a class="arrowblue Tipografia--general Subtitulos" href="VISTA/Principal.php">Intranet
                          &nbsp<i class="fas fa-long-arrow-alt-right desaparece" id="aparece"></i></a></li>
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
</section>
              </div>
              <div class="col s12 m12 l12 pull-l7 xl4 pull-xl2">
                <section>
                  <ul>
                    <p style="color:white"><b class="Tipografia--general Titulos">Carreras </b>
                      <hr class="hr">
                      <li> <a class="arrowblue Tipografia--general Subtitulos" href="Carreras.php">Carreras <i
                            class="fas fa-long-arrow-alt-right desaparece" id="aparece"> </i></a></li>
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
    <nav style="background-color:#000020;height:137px;margin-top:-35px" role="navigation">
      <div class="nav-wrapper container contlog"><img class="img-logo" src="img/CB_IMAGOTIPO_AZUL.png" alt="Logotipo">
      </div>
    </nav>
  </div>
  <nav style="background-color:white;height:25px;margin-top:-19px">
    <div class="nav-wrapper flex"><a class="sidenav-trigger" href="#" data-target="mobile-demo"><i
          class="material-icons letranegro">menu</i></a><span class="Pmenu letranegro">Menu</span>
      <ul class="hide-on-med-and-down">
        <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos"
            href="Mercados.php"><b>Mercados</b></a></li>
        <ul id="dropdown3" class="dropdown-content">
                    <li><a href="Productos_news.php" class="Tipografia--general letranegro Subtitulos">Ingredientes Químicos</a>
          </li>
          <li><a href="Product_List.php" class="Tipografia--general letranegro Subtitulos">Lista de Productos</a>
<li><a href="Catalogos_Productos" class="Tipografia--general letranegro Subtitulos">Catalogos</a></li> 
          </li>
        </ul>
        <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos dropdown-trigger" href="#!"
            data-target="dropdown3"><b>Productos<i class="material-icons right">arrow_drop_down</i></b></a></li>
        <li><a class="elemennav-secun Tipografia--general letranegro Subtitulos" <li><a
              class="elemennav-secun Tipografia--general letranegro Subtitulos"
              href="Servicios.php"><b>Servicios</b></a></li>
              <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos dropdown-trigger" data-target="dropdown4" href="../COMPLIANCE/Cumplimiento.php"><b>Cumplimiento<i class="material-icons right">arrow_drop_down</i></b></a>
<ul id="dropdown4" class="dropdown-content" tabindex="0">
<li tabindex="0"><a href="../COMPLIANCE/Cumplimiento.php" class="Tipografia--general letranegro Subtitulos">Cumplimiento</a></li>
<li tabindex="0"><a href="../COMPLIANCE/Marco_Regulatorio.php" class="Tipografia--general letranegro Subtitulos">Marco Regulatorio</a></li>
  <li tabindex="0"><a href="../COMPLIANCE/Certificaciones.php" class="Tipografia--general letranegro Subtitulos">Certificaciones</a></li>
</ul></li>
        <li> <a class="elemennav-secun Tipografia--general letranegro Subtitulos" href="Contact.php"><b>Contacto
            </b></a></li>
      </ul>
    </div>
    <div>
      <ul> <a class="waves-effect right btn-lock1" style="background-color:#c73e32;cursor:pointer;padding:10px;" href=""
          id="LockBoton"><i class="material-icons left icon-lock1 desaparecelock"
            style="color:white !Important;margin-top:-24px;font-size:20px !important">lock</i><i
            class="material-icons left icon-lock1 aparecelock"
            style="color:white !Important;display:none;margin-top:-24px;font-size:20px !important"
            id="unlock1">lock_open</i><span class="candadodesktop"></span>
          <div style="display:flex;justify-content:center">
            <p class="Botones Logindesktop Tipografia--general" style="align-self:center"> <b>Iniciar Sesión</b></p>
          </div>
        </a>
        <li class="ul-independiente right"><a class="btn-search-desktop1" href="#" id="busquedaprueba"
            onclick="abrirsearch();"><i class="material-icons left search-desktop-icon"
              style="color:black !important;font-size:24px;font-weight:500;position:absolute;z-index:1">search</i></a>
        </li>
      </ul>
      <div style="height:0;"><a class="sidenav-trigger btn-search-mobile1 right" href="#" data-target="mobile-search"><i
            class="material-icons search-mobile-icon" style="width:0px">search</i></a></div>
    </div>
  </nav>
  <ul class="collapsible" id="search1" style="display:none">
    <li>
      <div class="collapsible-header">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l12 xl12">
              <p> Search <i class="small material-icons left ico-Search">chevron_right</i></p>
              <hr style="background-color:black !important;color:black !important;">
            </div>
            <div class="col s12 m12 l6 xl6"><a href="#" style="margin-left:13px"><i
                  class="material-icons left icon-menu-search" style="color:black">search</i></a>
              <input class="txt-menu-search" type="search" id="inputBusqueda"
                placeholder=" Buscar contenido dentro del sitio">
            </div>
            <div class="col s12 m12 l6 xl6">
              <button class="btn btn-menu-search-ok" type="submit" name="action" style="font-weight:200"
                value="OK">OK</button>
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
                  <td style="border:hidden"><a href="index.php" style="color:black !important;border:hidden">Acerca de
                    </a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Historia_Hechos.php"
                      style="color:black !important;border:hidden">Historia y Hechos</a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Marca.php" style="color:black !important;border:hidden">Marca</a>
                  </td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="values.php"
                      style="color:black !important;border:hidden">Valores</a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Premisas.php"
                      style="color:black !important;border:hidden">Premisas</a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Servicio_Total.php"
                      style="color:black !important;border:hidden">Servicio Integral</a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Code_of_Conduct.php"
                      style="color:black !important;border:hidden">Codigo de Conducta</a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Mercados.php"
                      style="color:black !important;border:hidden">Mercados</a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Servicios.php"
                      style="color:black !important;border:hidden">Servicios</a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Cumplimiento.php"
                      style="color:black !important;border:hidden">Cumplimiento</a></td>
                </tr>
                <tr>
                  <td style="border:hidden"><a href="Contact.php"
                      style="color:black !important;border:hidden">Contacto</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col s12 m12 l12 xl12 center-align"><a href="#" onclick="cerrarsearch();"><i class="material-icons"
                style="font-size:45px;color:black;">keyboard_arrow_up</i></a></div>
        </div>
      </div>
    </li>
  </ul>
  <ul class="sidenav" id="mobile-demo" style="background-color:#262137">
    <li> <a href="Mercados.php" style="color:white !important"> <i class="small material-icons right"
          style="color:white !important;margin-top:0px !important;">chevron_right</i>
        <p style="color:white !important;">Mercados</p>
      </a>
      <div class="divider"></div>
    </li>
    <li> <a href="Productos_news.php" style="color:white !important"><i class="small material-icons right"
          style="color:white !important;margin-top:0px !important;">chevron_right</i>
        <p style="color:white !important;">Productos </p>
      </a>
      <div class="divider"> </div>
    <li> <a href="Servicios.php" style="color:white !important"><i class="small material-icons right"
          style="color:white !important;margin-top:0px !important;">chevron_right</i>
        <p style="color:white !important;">Servicios</p>
      </a></li>
    <div class="divider"></div>
    <li> <a href="Cumplimiento.php" style="color:white !important"><i class="small material-icons right"
          style="color:white !important;margin-top:0px !important;">chevron_right</i>
        <p style="color:white !important;">Cumplimiento </p>
      </a></li>
    <div class="divider"></div>
    <li> <a href="Contact.php" style="color:white !important"><i class="small material-icons right"
          style="color:white !important;margin-top:0px !important;">chevron_right</i>
        <p style="color:white !important;">Contact</p>
      </a></li>
    <div class="divider"></div>
    <li> <a class="sidenav-trigger" href="#" data-target="mobile-search" style="color:white !important;"><i
          class="small material-icons right" style="color:white !important;margin-top:0px !important;">search</i>
        <p style="color:white !important">Search</p>
      </a></li>
    <div class="divider"></div>
    <li> <a class="waves-effect waves-light" href="VISTA/Principal.php" style="background-color:#c73e32;color: white"
        id="LockBoton">Login<i class="material-icons right"
          style="color:white !important;margin-top:-1px !important;">lock</i></a></li>
    </li>
  </ul>
  <ul class="sidenav" id="mobile-search" style="background-color:#262137">
    <div class="container grid-search-mobile">
      <p style="color:white">Search<i class="small material-icons right ico-Search"
          style="color:white !important">search</i></p>
      <hr style="background-color:black !important;color:black !important">
      <input type="text" id="Busqueda_mobile" style="border: 1px solid black;background-color:#e9e9e9"
        placeholder=" Buscar contenido">
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
                  <td style="border:hidden;background-color:#262137;"><a href="index.php"
                      style="color:white !important;border:hidden">Nosotros</a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137;"><a href="Historia_Hechos.php"
                      style="color:white !important;border:hidden">Historia y Hechos</a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137;"><a href="Marca.php"></a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137"><a href="values.php"
                      style="color:white !important;border:hidden">Valores </a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137"><a href="Premisas.php"
                      style="color:white !important;border:hidden">Premisas </a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137"><a href="Servicio_Total.php"
                      style="color:white !important;border:hidden">Servicio Integral</a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137"><a href="Code_of_Conduct.php"
                      style="color:white !important;border:hidden">Codigo de Conducta </a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137"><a href="Mercados.php"
                      style="color:white !important;border:hidden">Mercados </a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137"> <a href="Servicios.php"
                      style="color:white !important;border:hidden">Servicios </a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137"><a href="Cumplimiento.php"
                      style="color:white !important;border:hidden">Cumplimiento </a></td>
                </tr>
                <tr>
                  <td style="border:hidden;background-color:#262137"><a href="Contact.php"
                      style="color:white !important;border:hidden">Contacto </a></td>
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
<li> <img src="img/CADENA_SUMINISTRO_BANNER_040123.jpg" style="height:600px;" alt="Industria Quimica">
<div class="caption center-align"><br><br><br><br>
<h3 class="primertitulo"><b>Chemical Broker</b><br></h3><b class="segundotitulo">Cadena de Suministro</b>
</div>
</li>
</ul>
</div>
</div>





  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12 xl12">
        <section class="breadcumb--general-cadena_suministro"><a class="breditem active" href="index.php"
            style="color:#262137 !important"><b>Inicio&nbsp </b><b> >&nbsp </b></a><a class="breditem active"
            href="Servicios.php" style="color:#262137 !important"><b>Servicios&nbsp </b><b> >&nbsp </b></a><a
            class="breditem active" href="CADENA_SUMINISTRO.php" style="color:#262137 !important"><b
              class="breadcrumb">Cadena de Suministro</b></a></section>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12 xl12">
        <!-- <h5 class="colornegro Tipografia--general General--Cuerpo" style="text-align:center;font-size:24px"><b
            style="color:#000020;margin-bottom:0px">Cadena de Suministros</b></h5> -->
        <h5 class="Tipografia--general General--Cuerpo"
          style="text-align:center;color:#0065ad;margin-top:50px;font-size:25px;margin-bottom:0px"><b style="color: #0065ad">“La cadena de suministros contempla todos los aspectos involucrados en una operación para la obtención de un producto o un servicio , que va desde su adquisición , hasta la entrega al cliente final.</b></h5>
      
           <p class="Tipografia--general General--Cuerpo colornegro" style="margin-top:50px;">En <b style="color:#000020;">Chemical Broker</b>, reconocemos la importancia de la integración efectiva entre proveedores y clientes en el ámbito de la gestión de la cadena de suministro. Nuestro enfoque se centra en maximizar la eficiencia y eficacia tanto interna como externamente en cada eslabón de nuestra cadena de suministro, en donde contemplamos los siguientes puntos: </p>
       
          

      </div>
    </div>
  </div>

      <div class="container">
            <div class="row">
              <div class="col s6 m6 l4 xl4">
                    
                    <div class="container  center-align" style="background-color:#000020;border-radius: 60px;width: 300px;height:450px;color:white">
                    <i class="large material-icons" style="color:#DE7B1F;margin-top:-48px">supervisor_account</i> 
                    <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:white;text-align:center"><b>Alianza Estratégica</b></h5>
                    <p class="Tipografia--general" style="color:white;padding:15px;font-family:Arial, Helvetica, sans-serif">Fomentamos la colaboración cercana entre nuestros socios de negocio, construyendo relaciones sólidas basadas en la confianza y comunicación.</p>
                    </div>
                    
              </div>
              <div class="col s6 m6 l4 xl4 center-align">
              <div class="container" style="background-color:#000020;border-radius:60px;width: 300px;height: 450px;color:white;">
              <i class="large material-icons" style="color:#DE7B1F;margin-top:-48px">offline_pin</i> 
              <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:white;text-align:center"><b>Calidad y Seguridad</b></h5>
              <p class="Tipografia--general" style="color:white;padding:15px;font-family:Arial, Helvetica, sans-serif">Mantenemos los más altos estándares de calidad y seguridad en todos nuestros procesos. Asegurando que los productos sean manejados y transportados de manera segura, contratando proveedores que cumplan con las regulaciones y normativas aplicables, así como certificaciones de calidad.</p>
              </div>
              </div>
              <div class="col s6 m6 l4 xl4 center-align">
              <div class="container" style="background-color:#000020;border-radius:60px;width: 300px;height: 450px;color:white;">
              <i class="large material-icons" style="color:#DE7B1F;margin-top:-48px">query_builder</i> 
              <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:white;text-align:center"><b>Flexibilidad y Adaptabilidad</b></h5>
              <p class="Tipografia--general" style="color:white;padding:15px;font-family:Arial, Helvetica, sans-serif">Entendemos que las necesidades de nuestros clientes pueden cambiar con el tiempo. Por lo tanto, estamos preparados para adaptarnos a situaciones imprevistas y ajustar nuestra cadena de suministro para satisfacer el cambio en los requerimientos.</p>
              </div>
            </div>
            <div class="col s12 m12 l12 xl12" style="margin-top:50px;">
            <p class="Tipografia--general General--Cuerpo colrnegro">Nuestra comprensión de la cadena de suministro y nuestra experiencia en su optimización nos permiten ofrecer un <b style="color:#000020;">"Servicio Integral”</b> a todos nuestros socios de negocios, impulsando la eficiencia, la reducción de costos y la mejora de la calidad en cada etapa del proceso, cuidando atender cada aspecto como:</p>
            </div>
            <div class="col s12 m12 l6 xl6" style="margin-top:50px;">
              <img src="img/CB_SUPPLIERS_150923.jpg" alt="" width="100%" style="border-radius:10px;">
            </div>
            <div class="col s12 m12 l6 xl6" style="margin-top:50px;">
            <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:black;text-align:center;"><b style="border-bottom:2px solid #0065ad;">Proveedores</b></h5>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">Nuestras relaciones de negocios con los principales Fabricantes de Ingredientes Químicos; situados en diferentes países, nos permite ofrecer una gran variedad de productos apegados a las necesidades de nuestros clientes y en cumplimiento a las regulaciones de cada industria.</p>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">A través de un “Servicio Integral”; generamos relaciones de largo plazo con nuestros proveedores para garantizar el suministro de materias primas, con productos de la más alta calidad, abastecimiento oportuno, precios competitivos, garantía y seguridad..</p>
            </div>
          
           </div>

           <div class="row">
           <div class="col s12 m12 l6 xl6" style="margin-top:50px;float:right;">
              <img src="img/CB_SUPPLIERS_140923.jpg" alt="" width="100%" style="border-radius:10px;">
            </div>
            <div class="col s12 m12 l6 xl6" style="margin-top:50px;">
            <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:black;text-align:center;"><b style="border-bottom:2px solid #0065ad;">Distribución</b></h5>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">Consideramos todos los aspectos a considerar en el proceso de distribución de nuestros ingredientes químicos; con el objetivo de ser eficientes en nuestras entregas.</p>
            <ol>
              <li style="list-style-type:disc;">Con nuestros Proveedores involucra una planeación de pronósticos de consumo, tiempos de fabricación y entrega, tiempos de tránsito y procesos logísticos integrales.</li>
              <br>
              <li style="list-style-type:disc;">Con nuestros clientes; inventario general y de seguridad, puntos de reordenó y fechas de requerimiento.</li>
            </ol>
          
            </div>
           </div>
   
           <div class="row">
           <div class="col s12 m12 l6 xl6" style="margin-top:50px;float:left;">
              <img src="img/CB_COMERCIO_INTERNACIONAL_140923.jpg" alt="" width="100%" style="border-radius:10px;">
            </div>
            <div class="col s12 m12 l6 xl6" style="margin-top:50px;">
            <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:black;text-align:center;"><b style="border-bottom:2px solid #0065ad;">Comercio Internacional</b></h5>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">Involucramos operaciones de Importación y Exportación por todas las aduanas en el mundo; marítimas, aéreas y terrestres, con procesos estandarizados y en cumplimiento a las leyes internacionales vigentes y políticas de comercio exterior.</p>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">Nuestros Agentes Aduanales y Forwarders trabajan en estricto cumplimiento a nuestros requerimientos y forma de trabajo con <b style="color:#000020;">Chemical Broker</b> para preservar la inocuidad e integridad física de nuestros ingredientes químicos.</p>
            </div>
           </div>

           <div class="row">
           <div class="col s12 m12 l6 xl6" style="margin-top:50px;float:right;">
              <img src="img/CB_LOGISTICS_140923.jpg" alt="" width="100%" style="border-radius:10px;">
            </div>
            <div class="col s12 m12 l6 xl6" style="margin-top:50px;">
            <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:black;text-align:center;"><b style="border-bottom:2px solid #0065ad;">Logística</b></h5>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">La Logística Global para <b style="color:#000020">Chemical Broker</b>, es la actividad que Planifica, Gestiona y Controla (PGC), el envío de ingredientes químicos dentro de nuestra cadena de suministros. Tiene como principal objetivo administrar todas las operaciones relacionadas con el movimiento de los productos químicos de forma eficiente.</p>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">Nuestra misión es la Gestión y Organización de las actividades relacionadas con la Compra, Recepción, Ubicación, Transporte (Aéreo, Marítimo, Terrestre o Multimodal) y la Expedición de los productos químicos en el lugar, tiempo y condiciones adecuadas.</p>
            </div>
           </div>

           <div class="row">
           <div class="col s12 m12 l6 xl6" style="margin-top:50px;float:left;">
              <img src="img/CB_BUQUE_SEGURO_140923.jpg" alt="" width="100%" style="border-radius:10px;">
            </div>
            <div class="col s12 m12 l6 xl6" style="margin-top:50px;">
            <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:black;text-align:center;"><b style="border-bottom:2px solid #0065ad;">Cobertura de Riesgos</b></h5>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">En <b style="color:#000020;">Chemical Broker</b>, la tranquilidad de nuestros socios de negocios es nuestra máxima prioridad. Gracias a una política estricta para mitigar los riesgos en cada operación, diseñamos estrategias y soluciones que aseguran una Logística Global libre de siniestros.</p>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">Trabajamos de la mano con las principales aseguradoras de riesgos a nivel mundial para garantizar la llegada de nuestros ingredientes químicos a las instalaciones de cada cliente. Su confianza en nosotros es esencial, y nos esforzamos continuamente para ofrecer un servicio que proteja su inversión y asegure la continuidad de sus operaciones. En <b style="color:#000020;">Chemical Broker</b>, su éxito y seguridad son nuestra prioridad.</p>
            </div>
           </div>
   

           <!-- <div class="row">
           <div class="col s12 m12 l6 xl6" style="margin-top:50px;float:right;">
              <img src="img/QUIMICA.jpg" alt="" width="100%" style="border-radius:10px;">
            </div>
            <div class="col s12 m12 l6 xl6" style="margin-top:50px;">
            <h5 class="Tipografia--general letranegro General--Cuerpo" style="color:black;text-align:center;"><b style="border-bottom:2px solid #0065ad;">Proveedores</b></h5>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">Nuestras relaciones de negocios con los principales Fabricantes de Ingredientes Químicos; situados en diferentes países, nos permite ofrecer una gran variedad de productos apegados a las necesidades de nuestros clientes y en cumplimiento a las regulaciones de cada industria.</p>
            <p class="Tipografia--general General--Cuerpo" style="color:black;">A través de un “Servicio Integral”; generamos relaciones de largo plazo con nuestros proveedores para garantizar el suministro de materias primas, con productos de la más alta calidad, abastecimiento oportuno, precios competitivos, garantía y seguridad..</p>
            </div>
           </div> -->
   
   
         

      </div>
</body>
<footer class="altofooter">
      <div class="divfooter" style="text-align:center;"><img class="imglogoCE" src="img/CE_ESCUDO_FONDO-TRANSPARENTE.png" alt=""/></div><br/><br/>
      <div class="container-fluid center-align" style="margin-top:-50px">
        <p class="Tipografia--general letranegro center-align Pie--Pagina">© 2014 C&E | Chemical Broker Todos los Derechos Reservados. | <a href="Contact.php" style="color:black !important;font-size:16px">Contacto |&nbsp</a><a href="PDF/CB_POLITICA_PRIVACIDAD_240521.pdf" download="download" style="color:black !important;font-size:16px">Politica de Privacidad </a></p>
      </div>
    </footer>
<script>

var cuadrante_cadenasuministro = document.getElementById("cuadrante_cadenasuministro");
var cuadrante_coberturariesgos = document.getElementById("cuadrante_coberturariesgos");
var cuadrante_comerciointernacional = document.getElementById("cuadrante_comerciointernacional");
var cuadrante_logisticaglobal = document.getElementById("cuadrante_logisticaglobal");
var cambiofondo = document.getElementById("cambiofondo");

cuadrante_cadenasuministro.addEventListener("mouseover", function(){

cuadrante_cadenasuministro.style.backgroundColor = "#000020";
cambiofondo.style.backgroundImage = "url('img/CADENA_SUMINISTRO_BANNER_040123.jpg')";
cambiofondo.style.width = "1900px"


})

cuadrante_cadenasuministro.addEventListener("mouseout", function(){

  cuadrante_cadenasuministro.style.backgroundColor = "transparent";
cambiofondo.style.backgroundImage = "url('img/LOGISTICA-GLOBAL_BANNER_040123.jpg')";

})

cuadrante_coberturariesgos.addEventListener('mouseover', function(){

  cuadrante_coberturariesgos.style.backgroundColor = "#000020";
  cambiofondo.style.backgroundImage = "url('img/COBERTURA-RIESGOS_BANNER_040123.jpg')";
  cambiofondo.style.width = "1900px"

})

cuadrante_coberturariesgos.addEventListener('mouseout', function(){

  cuadrante_coberturariesgos.style.backgroundColor = "transparent";
  cambiofondo.style.backgroundImage = "url('img/LOGISTICA-GLOBAL_BANNER_040123.jpg')";

})

cuadrante_comerciointernacional.addEventListener('mouseover',function(){

  cuadrante_comerciointernacional.style.backgroundColor = "#000020";
  cambiofondo.style.backgroundImage = "url('img/COMERCIO-INTERNACIONAL_BANNER_040123.jpg')";
  cambiofondo.style.width = "1900px"

})

cuadrante_comerciointernacional.addEventListener('mouseout', function(){

  cuadrante_comerciointernacional.style.backgroundColor = "transparent";
  cambiofondo.style.backgroundImage = "url('img/LOGISTICA-GLOBAL_BANNER_040123.jpg')";

})

cuadrante_logisticaglobal.addEventListener('mouseover', function(){

  cuadrante_logisticaglobal.style.backgroundColor = "#000020";
  cambiofondo.style.backgroundImage = "url('img/LOGISTICA-GLOBAL_BANNER_040123.jpg')"
  cambiofondo.style.width = "1900px"

})

cuadrante_logisticaglobal.addEventListener('mouseout', function(){

  cuadrante_logisticaglobal.style.backgroundColor = "transparent";
  cambiofondo.style.backgroundImage = "url('img/LOGISTICA-GLOBAL_BANNER_040123.jpg')"

})



</script>
</html>