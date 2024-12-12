// function toggleDropdown(id) {
//     const dropdown = document.getElementById(id);
//     dropdown.classList.toggle('hidden');
    
// }
document.addEventListener('DOMContentLoaded', function () {
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }

    // Fungsi untuk mengatur latar belakang label aktif
    function setActiveOption(option, labelId) {
        // Ambil elemen label berdasarkan ID
        const label = document.getElementById(labelId);

        // Tambahkan kelas aktif ke label (background hijau)
        label.classList.add('bg-green-100', 'text-green-700', 'p-2', 'rounded-md');

        // Tetap mempertahankan teks dalam label
        // Pastikan teksnya tidak hilang dan tetap ada
        if (!label.classList.contains('text-green-700')) {
            label.textContent = label.textContent.trim(); // Pastikan teksnya tidak hilang
        }

        // Sembunyikan dropdown setelah pilihan dipilih
        const dropdown = option.closest('.border'); // Ambil elemen dropdown
        const dropdownContent = dropdown.querySelector('.text-center'); // Dropdown yang berisi opsi
        dropdownContent.classList.add('hidden'); // Menyembunyikan dropdown
    }

    // Tambahkan listener ke elemen dropdown
    document.querySelectorAll('[onclick]').forEach(item => {
        item.addEventListener('click', function () {
            const id = this.getAttribute('onclick').match(/'([^']+)'/)[1];
            toggleDropdown(id);
        });
    });

    // Tambahkan listener untuk opsi di dalam dropdown
    document.querySelectorAll('#dropdown1 > div').forEach(option => {
        option.addEventListener('click', function () {
            // Set ID label terkait (sesuaikan ID sesuai dengan HTML)
            const labelId = 'gejalaLabel1';
            setActiveOption(this, labelId);
        });
    });

    // Tambahkan listener untuk dropdown kedua
    document.querySelectorAll('#dropdown2 > div').forEach(option => {
        option.addEventListener('click', function () {
            const labelId = 'gejalaLabel2';
            setActiveOption(this, labelId);
        });
    });
});


