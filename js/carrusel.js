const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const startBtn = document.getElementById("startBtn");
const stopBtn = document.getElementById("stopBtn");
const slides = document.querySelectorAll(".carousel-slide");
let currentIndex = 0;
let interval;

// Función para mostrar una diapositiva en función del índice con un efecto de desplazamiento suave
function showSlide(index) {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.transform = `translateX(${100 * (i - index)}%)`;
    }
}

// Función para avanzar a la siguiente diapositiva
function nextSlide() {
    currentIndex = ((currentIndex + 2) % (slides.length*2));
    showSlide(currentIndex);
}

// Función para retroceder a la diapositiva anterior
function prevSlide() {
    currentIndex = (currentIndex - 2 + (slides.length*2)) % (slides.length*2);
    showSlide(currentIndex);
}

// Función para iniciar el carrusel automático
function startAutoSlide() {
    interval = setInterval(nextSlide, 3000); // Cambia la imagen cada 3 segundos (3000 ms)
}

// Función para detener el carrusel automático
function stopAutoSlide() {
    clearInterval(interval);
}

// Evento al hacer clic en el botón "Anterior"
prevBtn.addEventListener("click", () => {
    prevSlide();
    stopAutoSlide();
});

// Evento al hacer clic en el botón "Siguiente"
nextBtn.addEventListener("click", () => {
    nextSlide();
    stopAutoSlide();
});

startBtn.addEventListener("click", () => {
  startAutoSlide();
});

stopBtn.addEventListener("click", () => {

  stopAutoSlide();
});

// Mostrar la primera diapositiva al cargar la página
showSlide(currentIndex);

// Iniciar el carrusel automático cuando se carga la página
startAutoSlide();
