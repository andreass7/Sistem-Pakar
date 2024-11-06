const slides = document.querySelectorAll("#carouselGallery .flex-none");
let currentIndex = 0;

document.getElementById("prevSlide").addEventListener("click", () => {
    slides[currentIndex].classList.add("hidden"); // Sembunyikan slide saat ini
    currentIndex = (currentIndex - 1 + slides.length) % slides.length; // Pindah ke slide sebelumnya
    slides[currentIndex].classList.remove("hidden"); // Tampilkan slide yang baru
});

document.getElementById("nextSlide").addEventListener("click", () => {
    slides[currentIndex].classList.add("hidden"); // Sembunyikan slide saat ini
    currentIndex = (currentIndex + 1) % slides.length; // Pindah ke slide berikutnya
    slides[currentIndex].classList.remove("hidden"); // Tampilkan slide yang baru
});
