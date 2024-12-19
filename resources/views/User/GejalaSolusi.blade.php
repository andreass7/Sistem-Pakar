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
            <form action="{{ route('User.GejalaSolusi') }}" method="POST"
                class="bg-white shadow-md rounded-lg px-8 py-8 mb-4">
                @csrf
                <div class="mb-4">
                    <P class="block text-gray-700 text-xl font-bold mb-10 text-center">Silahkan Pilih Gejala Yang
                        Dialami
                        Pada
                        Tanaman Bonsai Anda <span class="block w-40 mx-auto mt-2 border-b-4 border-green-300"></span>
                    </P>
                    <div class="gap-y-2 grid">
                        @foreach ($gejala as $item)
                            <div class="parentDiv rounded-md cursor-pointer transition-colors duration-300">
                                <div
                                    class="sm:flex sm:justify-between sm:items-center grid gap-y-2 p-3 hover:bg-green-200">
                                    <label class="text-gray-700 font-medium">{{ $item->nama }}</label>
                                    <select name="gejala[{{ $item->id }}]" data-parent="parentDiv"
                                        class="selectGejala bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-60 p-2.5">
                                        <option value="" selected>Silahkan Pilih</option>
                                        <option value="0">Tidak</option>
                                        <option value="0.4">Sedikit Ada</option>
                                        <option value="0.6">Cukup Ada</option>
                                        <option value="0.8">Ada</option>
                                        <option value="1">Sangat Ada</option>
                                    </select>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Proses
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
