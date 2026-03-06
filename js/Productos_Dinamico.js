<script>

console.log("js cargando")
let productos = <?php echo json_encode($productos);?>
let contenedor = document.getElementById("Contenedor_Productos")
productos.forEach(producto =>{
let boton = document.createElement("button");
boton.textContent = producto.Industria;
boton.value = producto.id_segmento;
boton.background = red;

boton.onclick = function(){
    alert("ID" + producto.id);
}

contenedor.appendChild(boton);
})
</script>