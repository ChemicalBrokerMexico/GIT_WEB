document.addEventListener('DOMContentLoaded', function(){

    const headers = document.querySelectorAll('.familia-header');

    headers.forEach(function(header){

        header.addEventListener('click', function(){

            const card = this.closest('.familia-card');
            const productos = card.querySelector('.productos-familia');
            const toggle = card.querySelector('.toggle');

            // 🔥 CAMBIO CLAVE: usar classList en lugar de style.display
            productos.classList.toggle('active');

            if(productos.classList.contains('active')){
                toggle.textContent = '-';
            } else {
                toggle.textContent = '+';
            }

        });

    });

});

// BOTÓN IR ARRIBA
const btnTop = document.getElementById('btnTop');

window.addEventListener('scroll', function () {
    if (window.scrollY > 200) {
        btnTop.style.display = 'block';
    } else {
        btnTop.style.display = 'none';
    }
});

btnTop.addEventListener('click', function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

const botones = document.querySelectorAll('#alfabeto button');
const cards = document.querySelectorAll('.familia-card');

botones.forEach(btn => {
    btn.addEventListener('click', function () {

        const letra = this.getAttribute('data-letter');

        cards.forEach(card => {

            const cardLetter = card.getAttribute('data-letter');

            if (letra === 'ALL' || cardLetter === letra) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }

        });

    });
});

botones.forEach(btn => {
    btn.addEventListener('click', function () {

        document.querySelectorAll('#alfabeto button')
            .forEach(b => b.classList.remove('active'));

        this.classList.add('active');

        const letra = this.getAttribute('data-letter');

        cards.forEach(card => {
            const cardLetter = card.getAttribute('data-letter');

            card.style.display = (letra === 'ALL' || cardLetter === letra)
                ? 'block'
                : 'none';
        });

    });
});