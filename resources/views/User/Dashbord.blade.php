<x-user.layout>
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#89fca8] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto py-2 sm:py-48 lg:py-16">
            <div class="mx-auto px-6 pb-10">
                <div class="flex flex-col md:flex-row items-center md:space-x-10">
                    <div class="md:w-1/2 order-2 md:order-1 flex justify-center">
                        <img src="{{ asset('img/over.png') }}" alt="Overlay Image"
                            class="w-full h-auto max-w-md transform hover:scale-105 transition duration-500 ease-out hover:brightness-110">
                    </div>
                    <div class="md:w-1/2 order-1 md:order-2 mt-10 md:mt-0">
                        <div class="hero-content flex flex-col items-start space-y-6">
                            <h3
                                class="text-4xl font-medium text-gradient bg-gradient-to-r from-green-400 to-blue-500 text-transparent bg-clip-text uppercase tracking-wider">
                                Sistem Pakar Perawatan Tanaman</h3>
                            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-4 animate-fadeInUp">
                                Bonsai
                            </h1>
                            <p class="text-gray-700 text-lg leading-relaxed">Merawat bonsai membutuhkan perhatian yang
                                cermat terhadap
                                penyiraman, pemangkasan, pemberian pupuk, dan perlindungan terhadap hama serta penyakit.
                                Meskipun bonsai
                                tampak kecil, ia membutuhkan banyak perawatan untuk mempertahankan bentuk dan
                                kesehatannya.</p>
                            <a href="#"
                                class="inline-block bg-gradient-to-r from-green-500 to-blue-500 text-white font-semibold px-6 py-3 mt-6 rounded-full shadow-lg hover:from-green-600 hover:to-blue-600 transform hover:scale-105 transition duration-300 ease-in-out">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section id="hero2" class="py-16 bg-gradient-to-b from-white to-green-50">
                <div class="container mx-auto px-6 lg:px-12">
                    <div class="flex flex-col lg:flex-row lg:items-center gap-12">

                        <!-- Bagian Teks -->
                        <div class="lg:w-1/2 space-y-8 ">
                            <!-- Judul -->
                            <h1
                                class="text-4xl sm:text-5xl lg:text-5xl text-center font-bold text-gray-800 mb-4 leading-tight">
                                Seni Merawat <span class="text-green-500">Bonsai</span> dengan Cinta
                            </h1>

                            <!-- Tentang Bonsai -->
                            <div class="flex gap-4 items-center">
                                <img class="w-1/3 h-auto bg-white rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-500"
                                    src="{{ asset('img/bonsai/bonbon5.jpg') }}" alt="Bonsai Image 5">
                                <div class="w-2/3">
                                    <h2 class="text-xl font-semibold text-gray-700 mb-2">Mengapa Memilih Bonsai?</h2>
                                    <p class="text-gray-600 leading-relaxed">
                                        Bonsai adalah seni menumbuhkan pohon dalam bentuk miniatur, menyerupai pohon
                                        dewasa. Seni ini berkembang dari Tiongkok, populer di Jepang, dan kini mendunia.
                                    </p>
                                </div>
                            </div>

                            <!-- Garis Pembatas -->
                            <div class="border-t border-gray-300 my-4"></div>

                            <!-- Tips Perawatan -->
                            <h2 class="text-2xl font-semibold text-gray-700 mb-2">Tips Dasar Merawat Bonsai:</h2>
                            <ul class="list-disc pl-5 text-gray-600 space-y-1">
                                <li>Pilih pot yang sesuai</li>
                                <li>Rutin menyiram dan menjaga kelembapan</li>
                                <li>Pangkas dan bentuk secara berkala</li>
                                <li>Gunakan pupuk yang tepat</li>
                                <li>Berikan pencahayaan yang cukup</li>
                                <li>Lindungi dari hama dan penyakit</li>
                            </ul>
                        </div>

                        <!-- Bagian Gambar -->
                        <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                            <div class="col-span-1 flex flex-col items-center gap-4">
                                <img class="w-full h-auto bg-white rounded-lg shadow-lg transform hover:scale-105 transition duration-500"
                                    src="{{ asset('img/bonsai/bonbon1.jpg') }}" alt="Bonsai Image 1">
                                <img class="w-3/4 h-auto bg-white rounded-lg shadow-lg transform hover:scale-105 transition duration-500"
                                    src="{{ asset('img/bonsai/bonbon2.jpg') }}" alt="Bonsai Image 2">
                            </div>
                            <div class="col-span-1 flex flex-col items-center gap-4">
                                <img class="w-3/4 h-auto bg-white rounded-lg shadow-lg transform hover:scale-105 transition duration-500"
                                    src="{{ asset('img/bonsai/bonbon3.jpg') }}" alt="Bonsai Image 3">
                                <img class="w-full h-auto bg-white rounded-lg shadow-lg transform hover:scale-105 transition duration-500"
                                    src="{{ asset('img/bonsai/bonbon4.jpg') }}" alt="Bonsai Image 4">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gallery" class="container mx-auto py-16 bg-gray-100">
                <div class="text-center mx-auto mb-12 max-w-lg">
                    <p class="text-xl font-medium italic text-blue-500">Galeri Bonsai</p>
                    <h2 class="text-4xl font-bold text-gray-800">Beberapa Contoh Tanaman Bonsai</h2>
                </div>

                <!-- Carousel -->
                <div id="carouselGallery" class="relative overflow-hidden">
                    <div class="flex transition-transform duration-300" style="transform: translateX(0%);">
                        <!-- Slide 1 -->
                        <div class="flex-none w-full md:flex gap-6">
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/anggur.jpg') }}" alt="Bonsai Anggur"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Anggur</span>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/bougenville.jpg') }}" alt="Bonsai Bougenville"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Bougenville</span>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/cemara1.jpg') }}" alt="Bonsai Cemara"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Cemara</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="flex-none w-full md:flex gap-6 hidden">
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/fucsia.jpg') }}" alt="Bonsai Fucshia"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Fucshia</span>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/maple.jpg') }}" alt="Bonsai Maple"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Maple</span>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/pinus.jpg') }}" alt="Bonsai Pinus"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Pinus</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="flex-none w-full md:flex gap-6 hidden">
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/sakura.jpg') }}" alt="Bonsai Sakura"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Sakura</span>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/santigi.jpg') }}" alt="Bonsai Santigi"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Santigi</span>
                                    </div>
                                </a>
                            </div>
                            <div class="md:w-1/3">
                                <a href="#" class="block group relative rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/bonsai/anting.jpg') }}" alt="Bonsai Anting Putri"
                                        class="w-full h-auto object-cover transition-transform duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span class="text-white font-semibold">Bonsai Anting Putri</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <button id="prevSlide"
                        class="absolute top-1/2 left-2 transform -translate-y-1/2 text-white bg-black bg-opacity-50 p-2 rounded-full hover:bg-opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextSlide"
                        class="absolute top-1/2 right-2 transform -translate-y-1/2 text-white bg-black bg-opacity-50 p-2 rounded-full hover:bg-opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </section>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#f84b59] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
</x-user.layout>
