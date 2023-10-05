
let currentSlide = 0;
const slides = document.querySelectorAll(".carousel-slide img");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

function showSlide(n) {
  if (n < 0) {
    currentSlide = slides.length - 1;
  } else if (n >= slides.length) {
    currentSlide = 0;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.transform = "translateX(-" + currentSlide + "00%)";
  }
}

prevBtn.addEventListener("click", () => {
  currentSlide--;
  showSlide(currentSlide);
});

nextBtn.addEventListener("click", () => {
  currentSlide++;
  showSlide(currentSlide);
});

showSlide(currentSlide);