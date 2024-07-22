"use strict";

$(buscar_datos());

function buscar_datos(consulta) {
  $.ajax({
    url: '../php_functions/buscar.php',
    //Ubicacion del archivo en el cual se encuentra la consulta SQL
    type: 'POST',
    //Metodo a traves del cual se envia la informacion desde la url correspondiente
    dataType: 'html',
    //Tipo de datos que seran recepcionados posterior a la consulta con sql
    data: {
      consulta: consulta
    } //Informacion que se desea enviar al archivo php

  }).done(function (respuesta) {
    $("#caja_resultados").html(respuesta);
  });
}

$(document).on("keyup", "#Buscador_Principal", function () {
  var valor = $(this).val();

  if (valor != "") {
    buscar_datos(valor);
  } else {
    buscar_datos();
  }
});