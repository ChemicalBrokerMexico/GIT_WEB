document.addEventListener('DOMContentLoaded', function(){

    const cards = document.querySelectorAll('.card-industria-pro');
    const banner = document.getElementById('BannerDinamico');
    const titulo = document.getElementById('segundotitulo');
    const titulo2 = document.getElementById('Segundotitulo2');

    cards.forEach(card =>{
        card.addEventListener('click', function(){
            //quitar active a todas las cards
            cards.forEach(c => c.classList.remove('active'));

            //activar la card seleccionada

            this.classList.add('active');

            // obtener atributos

            const nuevoColor = this.getAttribute('data-color');
            const nuevaImagen = this.getAttribute('data-video');
            const nombreIndustria = this.getAttribute('data-nindustria');
            const nombreindustriafiltro = this.getAttribute('data-nindustria');
            
            //Cambiar fondo con imagen + degradado

            banner.style.background = nuevoColor;
            banner.style.backgroundSize = "cover";
            banner.style.backgroundPosition = "center";

            titulo.textContent = nombreIndustria;
            titulo2.textContent = nombreindustriafiltro;
        });
    });
});