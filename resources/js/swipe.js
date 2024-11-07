const slides = document.querySelectorAll("#carouselGallery .flex-none");
let currentIndex = 0;

function updateSlide(newIndex) {
    slides[currentIndex].classList.add("hidden"); // Sembunyikan slide saat ini
    slides[newIndex].classList.remove("hidden"); // Tampilkan slide yang baru
    currentIndex = newIndex; // Perbarui indeks saat ini
}

document.getElementById("prevSlide").addEventListener("click", () => {
    const newIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlide(newIndex);
});

document.getElementById("nextSlide").addEventListener("click", () => {
    const newIndex = (currentIndex + 1) % slides.length;
    updateSlide(newIndex);
});
