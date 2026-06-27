console.log("JS cargado");
document
.getElementById('buscar')
.addEventListener('keyup', function(){

    let texto =
    this.value.toLowerCase();

    let productos =
    document.querySelectorAll('.producto');

    productos.forEach(function(producto){

        let contenido =
        producto.innerText.toLowerCase();

        if(contenido.includes(texto)){

            producto.style.display = '';

        }else{

            producto.style.display = 'none';

        }

    });

    actualizarGrupos();

});

function actualizarGrupos(){

    let letras =
    document.querySelectorAll('.letra');

    letras.forEach(function(letra){

        let elemento = letra.nextElementSibling;

        let mostrarLetra = false;

        while(
            elemento &&
            !elemento.classList.contains('letra')
        ){

            if(
                elemento.classList.contains('familia')
            ){

                let familiaVisible = false;

                let siguiente =
                elemento.nextElementSibling;

                while(
                    siguiente &&
                    !siguiente.classList.contains('familia') &&
                    !siguiente.classList.contains('letra')
                ){

                    if(
                        siguiente.classList.contains('producto') &&
                        siguiente.style.display !== 'none'
                    ){
                        familiaVisible = true;
                    }

                    siguiente =
                    siguiente.nextElementSibling;
                }

                if(familiaVisible){

                    elemento.style.display = '';

                    mostrarLetra = true;

                }else{

                    elemento.style.display = 'none';

                }

            }

            elemento =
            elemento.nextElementSibling;

        }

        letra.style.display =
        mostrarLetra
        ? ''
        : 'none';

    });

}

function abrirProducto(id){

    fetch(
        'obtener_producto.php?id=' + id
    )

    .then(response => response.json())

    .then(data => {

        document.getElementById(
            'modalProductoNombre'
        ).innerHTML =
        data.producto;

        document.getElementById(
            'modalFamilia'
        ).innerHTML =
        data.familia_quimica;

        document.getElementById(
            'modalCas'
        ).innerHTML =
        data.numero_cas;

        document.getElementById(
            'modalFabricante'
        ).innerHTML =
        data.fabricante;

        document.getElementById(
            'modalOrigen'
        ).innerHTML =
        data.origen;

        document.getElementById(
            'modalImagen'
        ).src =
        data.imagen && data.imagen !== ''
        ? data.imagen
        : 'imagenes/no-image.jpg';

        let modal =
        new bootstrap.Modal(
            document.getElementById(
                'modalProducto'
            )
        );

        modal.show();

    });

}


document.addEventListener('DOMContentLoaded', function(){

    const btnTop = document.getElementById('btnTop');

    if(btnTop){

        btnTop.addEventListener('click', function(e){

            e.preventDefault();

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        });

    }

});