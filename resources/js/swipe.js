// const selectElement = document.getElementById('selectGejala');
// const parentDiv = document.getElementById('parentDiv');

// selectElement.addEventListener('change', function () {
//     if (this.value !== "") {
//         parentDiv.classList.add('bg-green-200');
//     } else {
//         parentDiv.classList.remove('bg-green-200');
//     }
// });

document.addEventListener('DOMContentLoaded', function () {
    // Ambil semua elemen select dengan class 'selectGejala'
    const selectElements = document.querySelectorAll('.selectGejala');

    selectElements.forEach(function (select) {
        select.addEventListener('change', function () {
            // Cari parentDiv yang terkait menggunakan closest()
            const parentDiv = this.closest('.parentDiv');

            if (this.value !== "") {
                // Tambahkan kelas jika nilai dipilih
                parentDiv.classList.add('bg-green-200');
            } else {
                // Hapus kelas jika kembali ke pilihan kosong
                parentDiv.classList.remove('bg-green-200');
            }
        });
    });
});
