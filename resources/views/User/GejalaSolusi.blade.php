<x-user.layout>
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#89fca8] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto py-2 sm:py-48 lg:py-16">
            <h2 class="text-3xl font-bold text-center mb-10">Diagnosis Penyakit Tanaman Bonsai</h2>

            <form action="#" method="POST" class="bg-white shadow-md rounded-lg px-8 py-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-lg font-bold mb-4">Pilih Gejala:</label>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Gejala statis untuk demo -->
                        <div class="flex items-center">
                            <input type="checkbox" id="gejala1" class="mr-2">
                            <label for="gejala1" class="text-gray-700">Daun Menguning</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="gejala2" class="mr-2">
                            <label for="gejala2" class="text-gray-700">Daun Layu</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="gejala3" class="mr-2">
                            <label for="gejala3" class="text-gray-700">Bintik Hitam pada Daun</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="gejala4" class="mr-2">
                            <label for="gejala4" class="text-gray-700">Batang Kering</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="gejala5" class="mr-2">
                            <label for="gejala5" class="text-gray-700">Akar Membusuk</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="gejala6" class="mr-2">
                            <label for="gejala6" class="text-gray-700">Daun Berlubang</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="gejala7" class="mr-2">
                            <label for="gejala7" class="text-gray-700">Tunas Baru Tidak Tumbuh</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="gejala8" class="mr-2">
                            <label for="gejala8" class="text-gray-700">Serangga Kecil pada Daun</label>
                        </div>
                    </div>
                </div>
                <button type="button" onclick="showDiagnosis()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Diagnosis
                </button>
            </form>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#f84b59] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
</x-user.layout>
