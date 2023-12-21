class Busqueda{

   constructor(){
this.personas = [

    {nombre:"Franco",edad:27},
    {nombre:"Alexis",edad:27},
    {nombre:"Aaron",edad:27}

];

this.personasBK = this.personas;
this.onInit();

   }
   onInit(){
    let cuerpo = document.getElementById("cuerpo");
    while(cuerpo.rows.length > 0){
        cuerpo.deleteRow(0);
    }

    this.personas.forEach(persona => {
       let fila =  cuerpo.insertRow(cuerpo.rows.length);
       fila.insertCell(0).innerHTML = persona.nombre;
       fila.insertCell(1).innerHTML = persona.edad;
    });

   }
    buscar(id){

        let busqueda = document.getElementById(id).value;
        this.personas = this.personasBK;
        this.personas = this.personas.filter(persona => {
         return   persona.nombre.toLowerCase().indexOf(busqueda) > -1;
        });

        this.onInit();

    }
   
}



let busqueda = new Busqueda();
let form = document.getElementById("busquedaForm");
form.addEventListener('submit', ()=>{
    busqueda.buscar('valor');
})