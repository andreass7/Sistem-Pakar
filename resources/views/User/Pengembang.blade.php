<x-user.layout>
    <div class="relative isolate px-6 pt-14 lg:px-8 animate__animated animate__fadeIn">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#89fca8] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        <div class="mx-auto py-32 sm:py-48 lg:py-10">
            <div class="font-[sans-serif] my-4">
                <div class="max-w-5xl max-lg:max-w-2xl mx-auto">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 class="text-gray-800 text-4xl font-extrabold">Pengembang</h2>
                        <p class="text-gray-600 text-sm mt-4 leading-relaxed">"Website ini dibuat dan dikembangkan untuk memenuhi tugas proyek mata kuliah Sistem Pakar dengan dosen pengampu Ibu Yumarlin."</p>
                    </div>
                    <div class="min-h-screen flex items-center justify-center bg-gray-100">
                        <div class="max-w-xs w-full bg-white shadow-lg rounded-lg p-6 text-center">
                            <div class="mb-4">
                                <img src="{{ asset('img/team/1.jpg') }}" alt="Deskripsi Tim">
                            </div>
                            <h2 class="text-2xl font-semibold text-gray-800">Yumarlin MZ, S.Kom., M.Pd., M.Kom.</h2>
                            <p class="text-gray-600 mt-2">Dosen Pengampu <br>
                                Mata Kuliah Sistem Pakar</p>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 max-md:justify-center mt-12">
                        <!-- Card 1 -->
                        <div class="border rounded-md overflow-hidden max-md:max-w-[300px] transform transition duration-500 hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/team/11.jpg') }}" alt="Deskripsi Tim">
                            <div class="p-4">
                                <h4 class="text-gray-800 text-base font-bold">Andreas Adi Prasetyo</h4>
                                <p class="text-gray-600 text-xs mt-1">(21330020)</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="border rounded-md overflow-hidden max-md:max-w-[300px] transform transition duration-500 hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/team/13.jpg') }}" alt="Deskripsi Tim">
                            <div class="p-4">
                                <h4 class="text-gray-800 text-base font-bold">Budi Anggoro Sajjiwo Putro</h4>
                                <p class="text-gray-600 text-xs mt-1">(21330026)</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="border rounded-md overflow-hidden max-md:max-w-[300px] transform transition duration-500 hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/team/12.jpg') }}" alt="Deskripsi Tim">
                            <div class="p-4">
                                <h4 class="text-gray-800 text-base font-bold">Moch. Ghufron Amin As Ari</h4>
                                <p class="text-gray-600 text-xs mt-1">(21330049)</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.layout>