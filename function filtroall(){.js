function filtroall(){
    
    
    document.getElementById("contenedorletrap").innerHTML =  `
    
    <div class="divfooter2" style="text-align:center;"><span style="font-size:66px;">All</span></div><br><br></div>
    
    `
    document.getElementById("contenedorliteral").innerHTML = `
    
    
    <div class = "col s12 m12 l6 xl12 center-align" style="margin-top:30px">
    
    <img src="img/SORBITOL_280721.jpg" alt="" style="width:100%;">
    
    </div>
    
    
    
    `;
    
    document.getElementById("contenedorliteral2").innerHTML = `
    
    
    <div class = "col s12 m12 l12 xl12">
    <h5><b>Sorbitols</b></h5>
    <hr style="border:1px solid green">
    <p style="text-align:justify"> El sorbitol se produce mediante la hidrogenación catalítica de D-glucosa y está disponible como un polvo cristalino de flujo libre y como soluciones acuosas. 
    Nuestro sorbitol cristalino es un excipiente único para la compresión directa de comprimidos. El sorbitol tiene excelentes propiedades de flujo, lo que garantiza una mezcla uniforme y un peso de tableta constante. 
    </p>
    <b><a href="Cargil_Sorbitols.php" style="color:green;"> Read More</a></b>
    </div>
    
    `
}


$(document).ready(function(){
    document.getElementById("contenedorletrap").innerHTML = `
    <div class="divfooter2" style="text-align:center;"><span style="font-size:55px;">All</span></div><br><br></div>
    `
    
    document.getElementById("contenedorliteral").innerHTML = `
    
    <div class="row"> 
    <div class = "col s12 m12 l6 xl12 center-align" style="margin-top:30px">
    
    <img src="img/GLYCERINE_140521.jpg" alt="" style="width:100%;">
    
    </div>
</div>


<div class="row">
    <div class = "col s12 m12 l6 xl12 center-align" style="margin-top:30px">
    <img src="img/SORBITOL_280721.jpg" alt="" style="width:100%;">
    </div>
</div>    
    `

    document.getElementById("contenedorliteral2").innerHTML = `
    
<div class="row">
    <div class = "col s12 m12 l12 xl12">
    <h5><b>Glicerinas</b></h5>
    <hr style="border:1px solid blue">
    <p style="text-align:justify"> La glicerina es un elemento importante durante la fabricacion de ciertos productos</p>
    <b><a href="Glycerins_Cremer.php" style="color:blue;"> Read More</a></b>
    </div>
    </div>
    
    

    <div class = "col s12 m12 l12 xl12" style="margin-top:255px">
    <h5><b>Sorbitols</b></h5>
    <hr style="border:1px solid green">
    <p style="text-align:justify"> El sorbitol se produce mediante la hidrogenación catalítica de D-glucosa y está disponible como un polvo cristalino de flujo libre y como soluciones acuosas. 
    
    Nuestro sorbitol cristalino es un excipiente único para la compresión directa de comprimidos. El sorbitol tiene excelentes propiedades de flujo, lo que garantiza una mezcla uniforme y un peso de tableta constante. 
    </p>
    <b><a href="Cargil_Sorbitols.php" style="color:green;"> Read More</a></b>
    </div>
   
    `
});