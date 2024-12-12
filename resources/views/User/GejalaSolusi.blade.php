<x-user.layout>
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#89fca8] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto py-10 sm:py-10 lg:py-16">
            <h2 class="text-3xl font-bold text-center mb-14">Diagnosis Penyakit <span
                    class="font-extralight text-center font-pacifico text-green-500"> Tanaman Bonsai</span></h2>
            <form action="#" method="POST" class="bg-white shadow-md rounded-lg px-8 py-8 mb-4">
                <div class="mb-4">
                    <P class="block text-gray-700 text-xl font-bold mb-4">Silahkan Pilih Gejala Yang Dialami Pada
                        Tanaman Bonsai Anda</P>
                    <div class="gap-y-2 grid">
                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100" onclick="toggleDropdown('dropdown1')">
                                <label id="gejalaLabel1" for="gejala1" class="text-gray-700">Apakah Daun Bonsai
                                    Menguning?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="dropdown1" class="border-t text-center hidden bg-gray-100">
                                <div class="border-b p-2 hover:bg-gray-300"
                                    onclick="setActiveOption(this, 'gejalaLabel1')">Tidak</div>
                                <div class="border-b p-2 hover:bg-gray-300">Sedikit Yakin</div>
                                <div class="border-b p-2 hover:bg-gray-300">Cukup Yakin</div>
                                <div class="border-b p-2 hover:bg-gray-300">Yakin</div>
                                <div class="p-2 hover:bg-gray-300">Sangat Yakin</div>
                            </div>
                        </div>
                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100" onclick="toggleDropdown('dropdown2')">
                                <label id="gejalaLabel2" for="gejala1" class="text-gray-700">Apakah Daun Bonsai
                                    Layu?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="dropdown2" class="border-t text-center hidden group-hover:block">
                                <option value="gejala1" class="border-b p-2 "
                                    onclick="setActiveOption(this, 'gejalaLabel2')">Tidak</option>
                                <option value="gejala2" class="border-b p-2 ">Sedikit Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Cukup Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Yakin</option>
                                <option value="gejala2" class="p-2">Sangat Yakin</option>
                            </div>
                        </div>
                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100">
                                <label for="gejala1" class="text-gray-700">Apakah Ada Bintik Hitam Pada Daun
                                    Bonsai?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div class="border-t text-center hidden group-hover:block">
                                <option value="gejala1" class="border-b p-2 ">Tidak</option>
                                <option value="gejala2" class="border-b p-2 ">Sedikit Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Cukup Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Yakin</option>
                                <option value="gejala2" class="p-2">Sangat Yakin</option>
                            </div>
                        </div>
                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100">
                                <label for="gejala1" class="text-gray-700">Apakah Batang Bonsai Kering?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div class="border-t text-center hidden group-hover:block">
                                <option value="gejala1" class="border-b p-2 ">Tidak</option>
                                <option value="gejala2" class="border-b p-2 ">Sedikit Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Cukup Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Yakin</option>
                                <option value="gejala2" class="p-2">Sangat Yakin</option>
                            </div>
                        </div>
                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100">
                                <label for="gejala1" class="text-gray-700">Apakah Akar Bonsai Membusuk?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div class="border-t text-center hidden group-hover:block">
                                <option value="gejala1" class="border-b p-2 ">Tidak</option>
                                <option value="gejala2" class="border-b p-2 ">Sedikit Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Cukup Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Yakin</option>
                                <option value="gejala2" class="p-2">Sangat Yakin</option>
                            </div>
                        </div>

                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100"
                                onclick="toggleDropdown('dropdown3')">
                                <label for="gejala1" class="text-gray-700">Apakah Daun Bonsai Berlubang?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="dropdown3" class="border-t text-center hidden group-hover:block">
                                <option value="gejala1" class="border-b p-2 ">Tidak</option>
                                <option value="gejala2" class="border-b p-2 ">Sedikit Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Cukup Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Yakin</option>
                                <option value="gejala2" class="p-2">Sangat Yakin</option>
                            </div>
                        </div>
                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100">
                                <label for="gejala1" class="text-gray-700">Apakah Tunas Baru Tidak Tumbuh Pada
                                    Tanaman
                                    Bonsai?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div class="border-t text-center hidden group-hover:block">
                                <option value="gejala1" class="border-b p-2 ">Tidak</option>
                                <option value="gejala2" class="border-b p-2 ">Sedikit Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Cukup Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Yakin</option>
                                <option value="gejala2" class="p-2">Sangat Yakin</option>
                            </div>
                        </div>
                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100">
                                <label for="gejala1" class="text-gray-700">Apakah Ada Serangga Kecil Pada Tanaman
                                    Bonsai?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div class="border-t text-center hidden group-hover:block">
                                <option value="gejala1" class="border-b p-2 ">Tidak</option>
                                <option value="gejala2" class="border-b p-2 ">Sedikit Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Cukup Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Yakin</option>
                                <option value="gejala2" class="p-2">Sangat Yakin</option>
                            </div>
                        </div>
                        <div class="border rounded-md cursor-pointer">
                            <div class="flex items-center p-3 hover:bg-green-100">
                                <label for="gejala1" class="text-gray-700">Apakah Akar Berbau Busuk Pada Tanaman
                                    Bonsai?</label>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 ml-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div class="border-t text-center hidden group-hover:block">
                                <option value="gejala1" class="border-b p-2 ">Tidak</option>
                                <option value="gejala2" class="border-b p-2 ">Sedikit Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Cukup Yakin</option>
                                <option value="gejala2" class="border-b p-2 ">Yakin</option>
                                <option value="gejala2" class="p-2">Sangat Yakin</option>
                            </div>
                        </div>
                        <div class="p-3">

                        </div>
                    </div>
                </div>
                <button type="button" onclick="showDiagnosis()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Diagnosis
                </button>
            </form>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-40rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#f84b59] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
</x-user.layout>
