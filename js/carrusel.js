const carrusel = document.getElementById("carrusel");
const imagenes = document.querySelectorAll(".imagen-carrusel");
const botonAnterior = document.getElementById("anterior");
const botonSiguiente = document.getElementById("siguiente");

let index = 0;

function cambiarImagen(direccion) {
    index += direccion;
    if (index < 0) {
        index = imagenes.length - 1;
    } else if (index >= imagenes.length) {
        index = 0;
    }

    const desplazamiento = -index * 300; // Ancho de cada imagen
    carrusel.style.transform = `translateX(${desplazamiento}px)`;
}

botonAnterior.addEventListener("click", () => cambiarImagen(-1));
botonSiguiente.addEventListener("click", () => cambiarImagen(1));

// Iniciar con la primera imagen
cambiarImagen(0);