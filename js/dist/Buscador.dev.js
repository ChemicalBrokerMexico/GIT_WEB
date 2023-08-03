"use strict";

$(document).ready(function () {
  var consulta = $("#searchTable").DataTable({
    language: {
      zeroRecords: "Sin Resultados"
    }
  });
  var consulta2 = $("#searchTable2").DataTable({
    language: {
      zeroRecords: "Sin Resultado"
    }
  });
  $("#inputBusqueda").on("keyup", function () {
    consulta.search(this.value).draw();

    if ($("#inputBusqueda").val() == "") {
      $("header").css({
        height: "auto",
        background: "none"
      });
      $("#search").hide();
    } else {
      $("#search").fadeIn("fast");
    }
  });
  $("#Busqueda_mobile").on("keyup", function () {
    consulta2.search(this.value).draw();

    if ($("#Busqueda_mobile").val() == "") {
      $("header").css({
        height: "auto",
        background: "none"
      });
      $("#search2").hide();
    } else {
      $("#search2").fadeIn("fast");
    }
  });
});