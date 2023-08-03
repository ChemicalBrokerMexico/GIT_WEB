<?php
include "./conexion.php";

$aviso_nombre_puesto = $_POST['nombre_puesto1'];
$aviso_complemento_puesto = $_POST['complemento_titulo1'];
// $aviso_puestos_similares = $_POST['puesto_adicional1'];
$aviso_requisitos_puesto = $_POST['Requisitos_puesto1'];
$aviso_actividades_realizar = $_POST['Actividades_realizar1'];
$aviso_ofrecemos = $_POST['ofrecemos1'];
$aviso_area_puesto = $_POST['area_puesto1'];
$aviso_pais_puesto = $_POST['pais1'];
$aviso_provincia_puesto = $_POST['provincia1'];
$aviso_descartar_postulaciones = $_POST['descartar_provincias1'];
$aviso_municipio = $_POST['Municipio1'];
$aviso_jornada_laboral = $_POST['jornada_laboral1'];
$aviso_tipo_empleo = $_POST['tipo_empleo1'];
$aviso_salario_minimo_deseado = $_POST['Ingreso_minimo1'];
$aviso_salario_maximo_deseado = $_POST['Ingreso_maximo1'];
$aviso_salario_periodicidad = $_POST['Periodicidad1'];
$aviso_salario_convenir = $_POST['salario_convenir1'];
$aviso_homeoffice = $_POST['homeoffice1'];
$aviso_experiencia_minima = $_POST['experiencia_minima1'];
$aviso_idioma = $_POST['idioma_requerido1'];
$aviso_idioma_nivel = $_POST['idioma_nivel1'];
$aviso_estudios_minimos = $_POST['estudios_minimos1'];
$aviso_edad_minima = $_POST['edad_minima1'];
$aviso_edad_maxima = $_POST['edad_maxima1'];
$aviso_conocimientos_informaticos = $_POST['conocimientos_informaticos1'];
$aviso_sexo_requerido = $_POST['sexo1'];
$aviso_disponibilidad_viaje = $_POST['viaje1'];
$aviso_disponibilidad_residencia = $_POST['residencia1'];
$aviso_discapacidad = $_POST['discapacidad1'];


$con = new conexion();

$cnn = $con -> conectar();

$db = mysqli_select_db($cnn,"cb_rh");

$query = "INSERT INTO datos_aviso (id_aviso, aviso_nombre_puesto, aviso_complemento_puesto, aviso_requisitos_puesto, aviso_actividades_realizar, 
aviso_ofrecemos, aviso_area_puesto, aviso_pais_puesto, aviso_provincia_puesto, aviso_descartar_postulaciones, aviso_municipio, aviso_jornada_laboral, aviso_tipo_empleo, 
aviso_salario_minimo_deseado, aviso_salario_maximo_deseado, aviso_salario_periodicidad, aviso_salario_convenir, aviso_homeoffice, aviso_experiencia_minima, aviso_idioma,
aviso_idioma_nivel, aviso_estudios_minimos, aviso_edad_minima, aviso_edad_maxima, aviso_conocimientos_informaticos, aviso_sexo_requerido, aviso_disponibilidad_viaje, 
aviso_disponibilidad_residencia, aviso_discapacidad) VALUES (null,'$aviso_nombre_puesto', '$aviso_complemento_puesto', '$aviso_requisitos_puesto', '$aviso_actividades_realizar'
, '$aviso_ofrecemos', '$aviso_area_puesto', '$aviso_pais_puesto', '$aviso_provincia_puesto', '$aviso_descartar_postulaciones', '$aviso_municipio', '$aviso_jornada_laboral',
'$aviso_tipo_empleo', '$aviso_salario_minimo_deseado', '$aviso_salario_maximo_deseado', '$aviso_salario_periodicidad', '$aviso_salario_convenir', '$aviso_homeoffice', '$aviso_experiencia_minima',
'$aviso_idioma', '$aviso_idioma_nivel', '$aviso_estudios_minimos', '$aviso_edad_minima', '$aviso_edad_maxima', '$aviso_conocimientos_informaticos', '$aviso_sexo_requerido', '$aviso_disponibilidad_viaje', 
'$aviso_disponibilidad_residencia', '$aviso_discapacidad')";

$resultado = mysqli_query($cnn,$query);

if($resultado == true){
    echo 'true';
}else{
    echo mysqli_error($cnn);
    echo 'false';
}

?>

