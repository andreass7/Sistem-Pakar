<x-user.layout>
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#89fca8] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        <div class="mx-auto py-32 sm:py-10 lg:py-16">

            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6"> All About Bonsai</h2>
                <p class="text-lg text-gray-700 mb-8">Semua hal yang perlu Anda ketahui tentang cara merawat bonsai dan
                    berbagai macam jenis bonsai.</p>

                <!-- about us -->
                <section class=id="aboutus">
                    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                            <div class="max-w-lg">
                                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Kenapa Bonsai.?</h2>
                                <p class="mt-4 text-gray-600 text-lg">
                                    Bonsai menarik karena menggabungkan seni, filosofi, dan ketenangan dalam bentuk
                                    pohon miniatur. Merawatnya membutuhkan kesabaran dan dedikasi, mencerminkan
                                    keseimbangan hidup dan penghargaan terhadap waktu. Bonsai memberikan hobi yang
                                    menenangkan, menjaga koneksi dengan alam, serta melambangkan ketenangan dan
                                    ketahanan. Selain menjadi karya estetika, bonsai juga membawa kedamaian dan
                                    keindahan alami ke dalam ruang hidup.</p>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <img src="{{ asset('img/bonsai/photo-1531973576160-7125cd663d86.jpg') }}"
                                    alt="About Us Image" class="object-cover rounded-lg shadow-md">
                            </div>
                        </div>
                    </div>
                </section>


                <div class="container mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-6">Cara Merawat Bonsai</h2>
                    <p class="text-lg text-gray-700 mb-8">Panduan dasar untuk menjaga kesehatan dan keindahan bonsai
                        Anda.</p>
                    <div class="container mx-auto px-6 py-12">
                        <div class="max-w-3xl mx-auto">
                            <!-- Ilustrasi Gambar -->
                            <div class="mb-8">
                                <img src="{{ asset('img/bonsai/360_F_788862139_ITKyhYBoAhDTain6w7SR9jYYhXClDevT.jpg') }}"
                                    alt=" Perawatan Bonsai" class="w-full rounded-lg shadow-md">
                            </div>

                            <ol class="">
                                <li>
                                    <h3 class="text-2xl font-semibold mb-2 text-left">1. Pemilihan Tanah yang Tepat</h3>
                                    <p class="text-lg text-gray-700 mb-4 text-justify">
                                        Pemilihan tanah yang baik sangat penting untuk mendukung pertumbuhan akar
                                        bonsai. Pilih tanah yang memiliki drainase yang baik, seperti campuran pasir dan
                                        kompos. Tanah yang baik akan memungkinkan akar tumbuh dengan sehat dan mencegah
                                        akar bonsai membusuk karena genangan air.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-2xl font-semibold mb-2 text-left">2. Penyiraman yang Tepat</h3>
                                    <p class="text-lg text-gray-700 mb-4 text-justify">
                                        Penyiraman yang tepat adalah kunci untuk menjaga kelembaban tanah. Tanah bonsai
                                        harus tetap lembab, tetapi tidak terlalu basah. Periksa kelembapan tanah secara
                                        berkala dan hindari penyiraman berlebihan yang bisa menyebabkan akar terendam
                                        air dan membusuk.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-2xl font-semibold mb-2 text-left">3. Pemangkasan dan Pembentukan
                                    </h3>
                                    <p class="text-lg text-gray-700 mb-4 text-justify">
                                        Pemangkasan dan pembentukan bonsai harus dilakukan secara rutin untuk menjaga
                                        bentuk dan keseimbangan tanaman. Potong cabang dan daun yang tidak perlu serta
                                        bentuk bonsai sesuai dengan gaya yang diinginkan untuk meningkatkan estetika dan
                                        kesehatan tanaman.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-2xl font-semibold mb-2 text-left">4. Penyinaran yang Cukup</h3>
                                    <p class="text-lg text-gray-700 mb-4 text-justify">
                                        Bonsai membutuhkan cahaya matahari yang cukup agar dapat fotosintesis dengan
                                        baik. Letakkan bonsai di tempat yang mendapatkan sinar matahari yang cukup,
                                        namun hindari sinar matahari langsung yang terlalu lama agar daun tidak
                                        terbakar.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-2xl font-semibold mb-2 text-left">5. Pemupukan Rutin</h3>
                                    <p class="text-lg text-gray-700 mb-4 text-justify">
                                        Pemupukan rutin sangat penting untuk pertumbuhan bonsai. Gunakan pupuk cair
                                        khusus bonsai setiap dua minggu sekali selama musim pertumbuhan untuk memastikan
                                        bonsai mendapatkan nutrisi yang cukup.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-2xl font-semibold mb-2 text-left">6. Perawatan Akar</h3>
                                    <p class="text-lg text-gray-700 mb-4 text-justify">
                                        Pemangkasan akar secara berkala mencegah akar bonsai terbelit dan memastikan
                                        akar memiliki ruang yang cukup untuk berkembang. Akar yang sehat adalah fondasi
                                        bagi pertumbuhan bonsai yang optimal.
                                    </p>
                                </li>

                                <li>
                                    <h3 class="text-2xl font-semibold mb-2 text-left">7. Perlindungan dari Cuaca Ekstrem
                                    </h3>
                                    <p class="text-lg text-gray-700 mb-4 text-justify">
                                        Bonsai harus dilindungi dari cuaca ekstrem. Pindahkan bonsai ke tempat yang
                                        lebih aman jika cuaca terlalu dingin atau panas. Perlindungan ini penting untuk
                                        mencegah kerusakan akibat suhu yang tidak stabil.
                                    </p>
                                </li>
                            </ol>

                            <p class="text-lg text-gray-700 mt-6 text-justify">
                                Dengan mengikuti langkah-langkah perawatan yang tepat, bonsai Anda akan tumbuh sehat dan
                                indah. Perawatan bonsai memang memerlukan perhatian ekstra, tetapi hasilnya akan sangat
                                memuaskan. Selamat merawat bonsai Anda!
                            </p>
                        </div>
                    </div>




                    <!-- our services section -->
                    <section class="py-10" id="services">
                        <div class="container mx-auto px-4">
                            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Galeri Bonsai</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-justify">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/anggur.jpg') }}" alt="wheat flour grinding"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Anggur</h3>
                                        <p class="text-gray-700 text-base">Bonsai Anggur (Vitis vinifera) adalah salah
                                            satu jenis bonsai unik yang tidak hanya menawarkan keindahan estetik, tetapi
                                            juga buah yang dapat dinikmati. Bonsai ini memiliki batang yang tebal,
                                            bertekstur, dan tampilan daun yang khas, menjadikannya menarik sebagai
                                            tanaman hias.
                                        <details>
                                            <summary>Read More</summary>
                                            <p>Untuk merawat bonsai anggur, diperlukan perhatian khusus pada
                                                pencahayaan, karena tanaman ini memerlukan sinar matahari yang cukup
                                                untuk berfotosintesis dan memproduksi buah. Pemangkasan secara rutin
                                                penting untuk mengontrol pertumbuhan dan mempertahankan bentuknya.
                                                Selain itu, penyiraman yang baik dan pemupukan teratur sangat diperlukan
                                                agar bonsai tetap sehat dan menghasilkan buah yang optimal. Dengan
                                                perawatan yang benar, bonsai anggur dapat menjadi daya tarik alami yang
                                                memikat di rumah Anda, sekaligus memberikan buah anggur mini yang unik.
                                            </p>
                                        </details>
                                        </p>
                                    </div>
                                </div>

                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/santigi.jpg') }}" alt="Coffee"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Santigi</h3>
                                        <p class="text-gray-700 text-base">Bonsai Santigi (Pemphis acidula) adalah salah
                                            satu bonsai yang sangat digemari karena memiliki karakter batang yang keras,
                                            kokoh, dan berkelok-kelok alami. Pohon ini tumbuh di daerah pesisir dan
                                            dikenal sangat tahan terhadap kondisi lingkungan yang ekstrem, seperti angin
                                            kencang dan tanah yang kurang subur.
                                        <details>
                                            <summary>Read More</summary>
                                            <p>Keindahan bonsai santigi terletak pada bentuk batangnya yang unik dan
                                                daun kecilnya yang rimbun, memberikan kesan tua dan tangguh. Santigi
                                                juga memiliki kemampuan untuk beradaptasi dengan baik, sehingga cocok
                                                dijadikan bonsai. Untuk perawatannya, bonsai ini memerlukan pencahayaan
                                                penuh, penyiraman teratur, dan pemangkasan berkala untuk menjaga bentuk
                                                yang diinginkan. Dengan ketelatenan dan kesabaran, bonsai santigi bisa
                                                menjadi karya seni hidup yang menawan dan bernilai tinggi.
                                            </p>
                                        </details>
                                        </p>
                                    </div>
                                </div>

                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/anting.jpg') }}" alt="Coffee"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Anting Putri</h3>
                                        <p class="text-gray-700 text-base">Bonsai Anting Putri (Wrightia religiosa)
                                            adalah salah satu jenis bonsai yang populer di Indonesia karena keindahan
                                            dan keunikan bentuknya. Tanaman ini memiliki ciri khas berupa daun yang
                                            kecil, hijau segar, serta bunga putih yang menggantung menyerupai anting,
                                            memberikan kesan elegan dan anggun.
                                        <details>
                                            <summary>Read More</summary>
                                            <p>Merawat bonsai Anting Putri memerlukan ketelitian, terutama dalam hal
                                                pemangkasan untuk menjaga bentuknya tetap indah dan proporsional.
                                                Tanaman ini juga membutuhkan pencahayaan yang cukup serta penyiraman
                                                yang teratur untuk mempertahankan kelembapan tanah. Dengan perawatan
                                                yang tepat, bonsai Anting Putri dapat menjadi pusat perhatian di taman
                                                atau ruangan Anda..</p>
                                        </details>
                                        </p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/cemara1.jpg') }}" alt="Coffee"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Cemara</h3>
                                        <p class="text-gray-700 text-base">Bonsai Cemara (Cupressus sp.) adalah salah
                                            satu jenis bonsai yang terkenal karena keindahannya dan kemampuannya untuk
                                            memberikan nuansa alami yang tenang dan damai. Cemara memiliki daun
                                            berbentuk jarum yang kecil dan rapat, serta batang yang kokoh dan
                                            bertekstur, menciptakan tampilan elegan yang sering diasosiasikan dengan
                                            ketenangan alam pegunungan.
                                        <details>
                                            <summary>Read More</summary>
                                            <p>Perawatan bonsai cemara cukup menantang, karena tanaman ini memerlukan
                                                sinar matahari yang cukup serta sirkulasi udara yang baik. Penyiraman
                                                harus diperhatikan agar tanah tetap lembap, tetapi tidak terlalu basah,
                                                karena akar cemara sensitif terhadap genangan air. Pemangkasan rutin
                                                diperlukan untuk menjaga bentuk dan ukuran bonsai, serta memastikan
                                                pertumbuhan yang seimbang.

                                                Bonsai cemara sering dipilih karena selain memiliki bentuk alami yang
                                                menarik, cemara juga tahan terhadap berbagai kondisi cuaca. Dengan
                                                perawatan yang tepat, bonsai cemara bisa menjadi hiasan yang mempesona
                                                di rumah, menciptakan atmosfer alami dan harmonis.</p>
                                        </details>
                                        </p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/pinus.jpg') }}" alt="Coffee"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Pinus</h3>
                                        <p class="text-gray-700 text-base">Bonsai Pinus (Pinus sp.) adalah salah satu
                                            jenis bonsai yang populer dan dihargai karena tampilannya yang elegan serta
                                            simbolismenya sebagai lambang ketangguhan dan umur panjang. Pinus memiliki
                                            jarum-jarum daun yang khas dan tekstur batang yang kasar, memberikan kesan
                                            kuat dan alami pada bonsai ini.
                                        <details>
                                            <summary>Read More</summary>
                                            <p>Untuk merawat bonsai pinus, penting untuk memberikan pencahayaan yang
                                                cukup, karena pinus memerlukan sinar matahari penuh untuk tumbuh dengan
                                                baik. Penyiraman juga harus diperhatikan, hindari tanah yang terlalu
                                                basah karena akar pinus sensitif terhadap kelembapan berlebih.
                                                Pemangkasan dilakukan secara hati-hati agar tetap mempertahankan bentuk
                                                alami dari bonsai, serta memastikan sirkulasi udara yang baik di antara
                                                ranting-rantingnya.

                                                Bonsai pinus sering kali dipilih oleh para penggemar bonsai karena daya
                                                tariknya yang klasik dan ketahanannya yang tinggi, sehingga mampu
                                                menjadi karya seni hidup yang indah di berbagai musim.</p>
                                        </details>
                                        </p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/sakura.jpg') }}" alt="Coffee"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Sakura</h3>
                                        <p class="text-gray-700 text-base">Bonsai Sakura (Prunus serrulata) adalah salah
                                            satu jenis bonsai yang paling mempesona, terkenal karena bunganya yang indah
                                            dan mekar di musim semi. Sakura memiliki bunga berwarna merah muda atau
                                            putih yang melambangkan keindahan yang singkat dan kehidupan yang sementara,
                                            menjadikannya simbol penting dalam budaya Jepang.
                                        <details>
                                            <summary>Read More</summary>
                                            <p>Merawat bonsai sakura membutuhkan perhatian khusus. Sakura memerlukan
                                                paparan sinar matahari yang cukup, terutama saat musim berbunga.
                                                Penyiraman harus dilakukan secara teratur, menjaga agar tanah tetap
                                                lembap, namun hindari genangan air yang bisa merusak akar. Pemangkasan
                                                penting dilakukan untuk mempertahankan bentuk yang indah dan untuk
                                                mendorong lebih banyak bunga. Selain itu, bonsai sakura juga membutuhkan
                                                perlindungan dari angin kencang dan suhu yang ekstrem, terutama di musim
                                                dingin.

                                                Dengan ketelatenan dan perhatian yang baik, bonsai sakura akan
                                                memberikan keindahan yang luar biasa saat bunganya mekar, membawa
                                                suasana musim semi yang menakjubkan dalam bentuk miniatur.

                                                .</p>
                                        </details>
                                        </p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/bougenville.jpg') }}" alt="Coffee"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Bougenville</h3>
                                        <p class="text-gray-700 text-base">Bonsai Bougenville (Bougainvillea) adalah
                                            salah satu jenis bonsai yang populer karena bunganya yang cerah dan
                                            berwarna-warni. Bougenville memiliki keunikan berupa daun pelindung yang
                                            menyerupai kelopak bunga, sehingga sering terlihat seolah-olah penuh bunga
                                            dalam berbagai warna seperti ungu, merah, pink, oranye, dan putih.
                                        <details>
                                            <summary>Read More</summary>
                                            <p>Merawat bonsai bougenville relatif mudah, terutama karena tanaman ini
                                                tahan terhadap kondisi kering. Bougenville membutuhkan sinar matahari
                                                penuh untuk dapat berbunga dengan optimal, jadi tempatkan di area yang
                                                terang. Penyiraman harus dilakukan secara teratur, tetapi biarkan tanah
                                                mengering di antara waktu penyiraman untuk mencegah akar busuk.
                                                Pemangkasan juga diperlukan untuk menjaga bentuk dan ukuran bonsai,
                                                serta untuk mendorong pertumbuhan lebih banyak bunga.

                                                Bougenville dikenal sebagai tanaman yang tangguh dan mudah beradaptasi,
                                                menjadikannya pilihan yang baik untuk penghobi bonsai pemula. Dengan
                                                perawatan yang tepat, bonsai bougenville dapat menjadi pusat perhatian
                                                di taman atau ruang hijau rumah Anda dengan warna-warna cerah yang
                                                memikat sepanjang tahun.
                                                .</p>
                                        </details>
                                        </p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/maple.jpg') }}" alt="Coffee"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Maple</h3>
                                        <p class="text-gray-700 text-base">Bonsai Maple (Acer) adalah salah satu jenis
                                            bonsai yang paling diminati karena dedaunannya yang berubah warna secara
                                            dramatis, terutama saat musim gugur. Daun maple yang berbentuk khas dengan
                                            lobus-lobus memanjang akan berwarna hijau cerah selama musim panas dan
                                            berubah menjadi merah, kuning, atau oranye yang memukau di musim gugur,
                                            membuatnya sangat menarik bagi pecinta bonsai.
                                        <details>
                                            <summary>Read More</summary>
                                            <p> Merawat bonsai maple memerlukan perhatian khusus, terutama terkait
                                                dengan cahaya dan kelembapan. Maple bonsai sebaiknya ditempatkan di
                                                tempat dengan paparan sinar matahari penuh atau sebagian, namun hindari
                                                paparan langsung yang terlalu kuat di siang hari untuk mencegah daun
                                                terbakar. Tanaman ini menyukai kondisi lembap tetapi tanahnya harus
                                                memiliki drainase yang baik agar akar tidak tergenang air. Penyiraman
                                                yang konsisten penting untuk menjaga kesehatan tanaman, terutama selama
                                                bulan-bulan panas.

                                                Pemangkasan bonsai maple juga diperlukan untuk menjaga bentuk dan ukuran
                                                pohon. Selain itu, pemangkasan daun secara hati-hati akan mendorong
                                                pertumbuhan daun yang lebih kecil, menciptakan proporsi yang ideal untuk
                                                bonsai. Dengan perawatan yang baik, bonsai maple akan tumbuh sehat dan
                                                memberikan tampilan yang menakjubkan dengan perubahan warna yang indah
                                                sepanjang tahun.
                                            </p>
                                        </details>
                                        </p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="{{ asset('img/bonsai/fucsia.jpg') }}" alt="Coffee"
                                        class="w-full h-64 object-cover">
                                    <div class="p-6 text-center">
                                        <h3 class="text-xl font-medium text-gray-800 mb-2">Bonsai Fatscia</h3>
                                        <p class="text-gray-700 text-base">Bonsai Fatsia (Fatsia japonica) adalah
                                            tanaman hias yang dikenal dengan daun-daunnya yang besar dan berbentuk
                                            menyerupai tangan, memberikan tampilan yang unik dan eksotis untuk sebuah
                                            bonsai. Meskipun daun Fatsia lebih besar dibandingkan kebanyakan tanaman
                                            bonsai lainnya, bentuknya yang menarik membuatnya populer di kalangan
                                            pecinta bonsai yang mencari sesuatu yang berbeda.
                                        <details>
                                            <summary>Read More</summary>
                                            <p> Merawat bonsai Fatsia membutuhkan perhatian pada cahaya dan kelembapan.
                                                Fatsia tumbuh dengan baik di area yang teduh atau dengan sinar matahari
                                                tidak langsung. Tanaman ini juga menyukai kondisi tanah yang lembap
                                                tetapi tidak terlalu basah. Pastikan untuk menyiram secara teratur namun
                                                biarkan tanah sedikit mengering di antara penyiraman. Drainase yang baik
                                                sangat penting untuk mencegah akar membusuk.

                                                Pemangkasan bonsai Fatsia diperlukan untuk menjaga ukurannya tetap
                                                kompak, mengingat daun yang cenderung tumbuh lebih besar. Pemangkasan
                                                cabang dan akar secara rutin akan membantu mengontrol pertumbuhan dan
                                                mempertahankan bentuk estetika yang diinginkan. Dengan perawatan yang
                                                tepat, bonsai Fatsia dapat menjadi pusat perhatian dalam koleksi bonsai
                                                Anda, menghadirkan nuansa tropis dan eksotik yang jarang ditemukan pada
                                                jenis bonsai lainnya.
                                            </p>
                                        </details>
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>



                    <!-- why us  -->


                    <!-- gallery -->


                    <!-- Visit us section -->



                    <script>
                        document.getElementById("hamburger").onclick = function toggleMenu() {
                            const navToggle = document.getElementsByClassName("toggle");
                            for (let i = 0; i < navToggle.length; i++) {
                                navToggle.item(i).classList.toggle("hidden");
                            }
                        };
                    </script>


                </div>
            </div>
</x-user.layout>
