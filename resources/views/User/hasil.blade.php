<x-user.layout>
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#89fca8] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto py-10 sm:py-10 lg:py-10">

            <div class="rounded-md grid gap-y-2">
                <h2 class="text-center text-4xl font-bold my-5">Rekomendasi Hasil</h2>
                @if (!empty($daftarGejala))
                    <div class="bg-sky-100 shadow-md rounded-lg p-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Gejala yang Anda Pilih:</h3>
                        <ul class="list-disc list-inside mt-3">
                            @foreach ($daftarGejala as $gejala)
                                <li class="text-lg text-gray-700">
                                    {{ $gejala->nama }}
                                    <strong>
                                        @switch($gejalaInput[$gejala->id])
                                            @case(0)
                                                Tidak
                                            @break

                                            @case(0.4)
                                                Sedikit Ada
                                            @break

                                            @case(0.6)
                                                Cukup Ada
                                            @break

                                            @case(0.8)
                                                Ada
                                            @break

                                            @case(1)
                                                Sangat Ada
                                            @break

                                            @default
                                                Tidak Diketahui
                                        @endswitch
                                    </strong>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <p class="text-red-500">Tidak ada gejala yang dipilih.</p>
                @endif
                @if ($hasilTertinggi)
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <p class="text-xl">Berdasarkan Dari Gejala Yang Anda Pilih atau Alami Juga Berdasarkan
                            Role/Basis
                            Aturan
                            Yang Sudah Ditentukan Penyakit Yang Di Alami Yaitu &rarr; <strong
                                class="uppercase text-green-500 ">
                                {{ $hasilTertinggi['deskripsi'] }} </strong> dengan Derajat Keyakinan &rarr; <strong
                                class="text-gray-700 text-2xl">{{ $hasilTertinggi['nilai_cf'] }} /
                                ({{ $hasilTertinggi['nilai_cf'] * 100 }} %)
                            </strong></p>

                    </div>
                    <div class="bg-sky-200 shadow-md rounded-lg p-6">
                        <p class="text-2xl font-semibold text-green-400 ">Solusi &rarr; <span
                                class="text-black text-2xl">
                                {{ $hasilTertinggi['solusi'] }}
                            </span></p>
                    </div>
                @else
                    <p class="text-red-500">Tidak ada hasil diagnosa yang dapat ditampilkan.</p>
                @endif
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-40rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#f84b59] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
</x-user.layout>
