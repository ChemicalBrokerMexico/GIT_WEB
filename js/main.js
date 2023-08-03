
//FUNCION 1 
function compruebaAceptaCookies() {
  if (localStorage.aceptaCookies == "true") {
    modal1.style.display = "none";
  }else if(localStorage.aceptaCookies == "false"){
    modal1.style.display = "none";
  }else{
    modal1.style.display = "inline";
  }
}


//FUNCION 2
function aceptarCookies() {
  localStorage.aceptaCookies = "true";
  modal1.style.display = "none";
}

//FUNCION 3

function denegarCookies(){
  localStorage.aceptaCookies = "false";
  modal1.style.display = "none";
}


//FUNCION 4

function cerrar_modal(){
  document.getElementById("modal2").style.display = "none";
}


$(document).ready(function () {
  compruebaAceptaCookies();
});


//FUNCION 5
var rotated = false;
document.getElementById("chefle").onclick = function () {
  var flecha = document.getElementById("rotar"),
  deg = rotated ? 0 : 180;
  
  flecha.style.transform = "rotate(" + deg + "deg)";
  
  rotated = !rotated;
};


//FUNCION 6 
function abrirsearch() {
  document.getElementById("search1").style.display = "inline";
}

//FUNCION 7 

function cerrarsearch() {
  document.getElementById("search1").style.display = "none";
}

//FUNCION 8 
var items = document.querySelectorAll(".timeline li");

function callbackFunc(){
  for(var i = 0; i < items.length; i++){
    if(isElementInViewport(items[i])){
      items[i].classList.add("in-view");
    }
  }
}
window.addEventListener("load", callbackFunc);
window.addEventListener("scroll", callbackFunc);


//FUNCION 9
function asignacionclavpa() {
  var a = document.getElementById('pais').value;
  var split = a.substring(0, 3);
  document.getElementById('numtel').value = split;
}

// function cambiotext() {
//   if (Validarcampos() == true) {
//     document.getElementById('Enviarinformacion').style.color = "green";
//     document.getElementById('Enviarinformacion').textContent = "Información Enviada";
//     alert("Informacion Enviada con Exito");
//   }else{
//     document.getElementById('Enviarinformacion').style.color = "red"
//     document.getElementById('Enviarinformacion').textContent = "Informacion no enviada";
//   }
  
// }


//FUNCION 10 
function limpiar() {
  $('input[type="text"]').val('');
  $('input[type="select"]').val('');
  $('input[type="email"]').val('');
  $('textarea').val('')
  document.getElementById('Enviarinformacion').style.color = "white";
  document.getElementById('Enviarinformacion').textContent = "Enviar Informacion"; 
}


//FUNCION 11
function Validarcampos() {
  var titulo = document.getElementById("titulo").value;
  var nombre_apellido = document.getElementById("nombre").value;
  var organizacion = document.getElementById("organizacion").value;
  var puesto = document.getElementById("puesto").value;
  var email = document.getElementById("email").value;
  var callen = document.getElementById("calleN").value;
  var colonia = document.getElementById("colonia").value;
  var codigop = document.getElementById("codigop").value;
  var ciudad = document.getElementById("ciudad").value;
  var pais = document.getElementById("pais").value;
  var estado = document.getElementById("estado").value;
  var numtel = document.getElementById("numtel").value;
  var textarea1 = document.getElementById("textarea1").value;
  if (titulo == "" || nombre_apellido == "" || organizacion == "" || puesto == "" || email == "" || callen == "" || colonia == "" || codigop == "" ||
  ciudad == "" || pais == "" || estado == "" || numtel == "" || textarea1 == "" && spamkill != "") {
    alert("Revisa los campos, Existen campos vacios");
    document.getElementById('Enviarinformacion').style.color = "red"
    document.getElementById('Enviarinformacion').textContent = "Informacion no enviada";
    return false;
  }else{
    // document.getElementById('Enviarinformacion').style.color = "green";
    // document.getElementById('Enviarinformacion').textContent = "Información Enviada";
    document.getElementById('modalContact').style.display = 'block';
    setTimeout(
      function cerrarmodal(){
        document.getElementById('modalContact').style.display = 'none';
      },1500
    );
    limpiar();
    return true;
  }
}


//FUNCION 12 
$(document).ready(function () {
  if(document.title == "Glycerines" || "Carbomeros" || "Unsaturated" || "Saturated"){
    var consulta = $("#table_id").DataTable({
      "pageLength": 50,
      "ordering": false
    });
    document.getElementsByClassName("quitar")[0].style.display = "none";
    document.getElementsByClassName("quitar")[1].style.display = "none";
    document.getElementsByClassName("quitar")[2].style.display = "none";
    document.getElementsByClassName("quitar")[3].style.display = "none";
    document.getElementsByClassName("quitar")[4].style.display = "none";
    document.getElementsByClassName("quitar")[5].style.display = "none";
    document.getElementsByClassName("quitar")[6].style.display = "none";
    document.getElementsByClassName("quitar")[7].style.display = "none";
    document.getElementsByClassName("quitar")[8].style.display = "none";
    document.getElementsByClassName("quitar")[9].style.display = "none";
  }else{
    var consulta = $("#table_id").DataTable({
      "pageLength": 50,
      "ordering": false
    });
    
    
    
  }
  
  $("#ProductName").on("change", function () {
    consulta.search(this.value).draw();
    if ($("#ProductName").val() == "") {
      $("header").css({
        height: "auto",
        background: "none",
      });
    }
  });
  
  $("#ProductGroup").on("change", function(){
    consulta.search(this.value).draw();
    if($("#ProductGroup").val() == ""){
      $("header").css({
        height:"auto",
        background:"none",
      });
    }
  });
  
  $("#UseType").on("change", function(){
    consulta.search(this.value).draw();
    if($("#UseType").val() == ""){
      $("header").css({
        height:"auto",
        background:"none",
      });
    }
  });
  
  
});







//FUNCION 13
function desplegarmenu(){
  busqueda = document.getElementById("busquedaprueba");
  busqueda.addEventListener("click", function(){
    document.getElementById("search1").style.transition = "height 20s"
    document.getElementById("search1").style.height = "100px";
  })
  
}

//FUNCION 14
// SE CREA FUNCION PARA MOSTRAR LA CONTRASEÑA
function mostrarcontra(){
  // SE CREA LA VARIABLE TIPO QUE CONTIENE EL VALOR DEL CAMPO DE CONTRASEÑA
      var tipo = document.getElementById("txtContrasena");
      // SE VALIDA SI EL CAMPO ES DE TIPO CONTRASEÑA
      if(tipo.type == "password"){
          // SI LO ES SE CAMBIARA DE TIPO CONTRASEÑA A TIPO TEXTO
          tipo.type = "text";
          // AL SER DE TIPO TEXTO SE MOSTRARA EL ICONO DEL OJO A CERRAR 
          document.getElementById("eyeoff").style.display = "inline";
      }else{
          // SI NO SE REGRESARA A SER DE TIPO CONTRASEÑA 
          tipo.type = "password";
          // SE DEJARA DE MOSTRAR EL OJO CON TACHE Y SE MOSTRARA EL OJO NORMAL 
          document.getElementById("eyeoff").style.display = "none";
          document.getElementById("eyeon").style.display = "inline";
      }
  }

  function mostrarcontra2(){
    // SE CREA LA VARIABLE TIPO QUE CONTIENE EL VALOR DEL CAMPO DE CONTRASEÑA
        var tipo = document.getElementById("txtContrasena_Confirmacion");
        // SE VALIDA SI EL CAMPO ES DE TIPO CONTRASEÑA
        if(tipo.type == "password"){
            // SI LO ES SE CAMBIARA DE TIPO CONTRASEÑA A TIPO TEXTO
            tipo.type = "text";
            // AL SER DE TIPO TEXTO SE MOSTRARA EL ICONO DEL OJO A CERRAR 
            document.getElementById("eyeoff2").style.display = "inline";
        }else{
            // SI NO SE REGRESARA A SER DE TIPO CONTRASEÑA 
            tipo.type = "password";
            // SE DEJARA DE MOSTRAR EL OJO CON TACHE Y SE MOSTRARA EL OJO NORMAL 
            document.getElementById("eyeoff2").style.display = "none";
            document.getElementById("eyeon2").style.display = "inline";
        }
    }

    function modo_oscuro(){
      var cuerpoweb = document.body; 
      var nav = document.getElementById('nav_oscuro');
      var footer = document.getElementById('footer_dark');
      var examen_oscuro = document.getElementById('examen_oscuro');
      var respondidas_oscuro = document.getElementById('respondidas_oscuro');
      var sol_oscuro = document.getElementById('sol_oscuro');
      var tiempo_oscuro = document.getElementById('tiempo_oscuro');
      cuerpoweb.classList.toggle("oscuro");
      nav.style.removeProperty('background-color'); 
      examen_oscuro.style.removeProperty('color');
      respondidas_oscuro.style.removeProperty('color');
      tiempo_oscuro.style.removeProperty('color');
      nav.classList.add("oscuro");
      footer.classList.add("oscuro");
      examen_oscuro.classList.add("oscuro");
      respondidas_oscuro.classList.add('oscuro');
      sol_oscuro.classList.add("oscuro");
      tiempo_oscuro.classList.add("oscuro");
    }


    //FUNCION 14 RECORDAR USUARIO LOGIN RH

// SE CREA LA FUNCION VERDAD QUE SERVIRA PARA ACTIVAR EL VALOR DEL CHECKBOX 
function verdad(){
  if(document.getElementById("Recordar").checked == true){
      document.getElementById("Recordar").value = true;
      
// SI NO ES VERDAD EL VALOR DEL CHECK SERA FALSO   
  }else{
      document.getElementById("Recordar").value = false;
  }
}


//FUNCION 15 LOWER CASE PARA 

// FUNCION QUE PERMITE PASAR CUALQUIER TEXTO QUE SE ENCUENTRE EN MAYUSCULAS A MINUSCULAS
function lowercase(){
  document.getElementById("txtUsu").value = document.getElementById("txtUsu").value.toLowerCase();
}

//Funcion de expresion regular para evaluar contraseña

function evaluacionContraseña(){
  //Expresiones regulares

    

  //Cambio de mayusculas a minusculas

  document.getElementById('txtUsu').value = document.getElementById("txtUsu").value.toLowerCase;



}

//Funcion 16 


var card1 = document.getElementById("cardcontentprueba");
var boton = document.getElementById("mostrarmas");



boton.addEventListener('click', function MostrarContenido(){
  card1.style.display = "block";
  card1.style.color = "black";
})

//Funcion 17 Buscador de tabla lista de productos

// $(document).ready(function(){
//   var consulta = $("#searchTable").DataTable({
//     languaje:{
//       zeroRecords:"Sin Resultado",
//     },
//   });

  

//   $("#inputBusqueda2").on("keyup", function(){
//     consulta3.search(this.value).draw();

//     if($("#inputBusqueda2").val() == ""){
//       $("header").css({
//         height:"auto",
//         background:"none",
//       });
//       $("#search3").hide();
//     }else{
//       $("#search3").fadeIn("fast");
//     }
//   });


//   $("#Busqueda_mobile").on("keyup", function(){
//     consulta4.search(this.value)draw();

//     if($("#Busqueda_mobile_prods").val() == ""){
//       $("header").css({
//         height: "auto",
//         background: "none",
//       });
//       $("#search4").hide():
//     }else{
//       $("#search4").fadeIn("fast");
//     }
//   })

// })



