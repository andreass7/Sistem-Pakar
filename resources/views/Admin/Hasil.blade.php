<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h1 class="max-w-full bg-white shadow-md text-green-500 p-4 py-5 rounded-lg text-2xl font-semibold mb-2">
        Hasil Diagnosa
    </h1>

    @if ($hasilTertinggi)
        <div class="bg-white p-4 rounded-lg shadow-md mb-6">
            <h2 class="text-xl font-semibold text-sky-500">Jenis Penyakit &rarr;
                <span class="text-black">{{ $hasilTertinggi['penyakit'] }}</span>
            </h2>
            <p class="text-xl font-semibold text-sky-500">Nilai CF &rarr; <span class="text-black">
                    {{ $hasilTertinggi['nilai_cf'] }} </span></p>
            <p class="text-xl font-semibold text-sky-500">Deskripsi &rarr; <span class="text-black">
                    {{ $hasilTertinggi['deskripsi'] }} </span></p>
            <p class="text-xl font-semibold text-sky-500">Solusi &rarr; <span class="text-black">
                    {{ $hasilTertinggi['solusi'] }} </span></p>
        </div>
    @else
        <div class="bg-red-100 p-4 rounded-lg shadow-md mb-6">
            <p class="text-red-600">Tidak ada hasil diagnosa yang valid.</p>
        </div>
    @endif

    <h3 class="max-w-full bg-white shadow-md text-green-500 p-4 py-5 rounded-lg text-2xl font-semibold mb-2">Detail
        Langkah-Langkah Perhitungan:</h3>

    @foreach ($detailPerhitungan as $detail)
        <div class="mb-4 bg-white p-3 rounded shadow-lg">
            <h4 class="text-lg font-semibold">{{ $detail['penyakit'] }}</h4>
            <table class="min-w-full table-auto border-collapse">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-4 py-2 border-b">Gejala ID</th>
                        <th class="px-4 py-2 border-b">CF User</th>
                        <th class="px-4 py-2 border-b">CF Pakar</th>
                        <th class="px-4 py-2 border-b">CF Gejala</th>
                        <th class="px-4 py-2 border-b">CF Combine Previous</th>
                        <th class="px-4 py-2 border-b">CF Combine</th>
                        <th class="px-4 py-2 border-b">Penjelasan Perkalian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detail['steps'] as $step)
                        <tr
                            class="odd:bg-white text-center odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-4 py-2 border-b">{{ $step['gejala_id'] }}</td>
                            <td class="px-4 py-2 border-b">{{ $step['cf_user'] }}</td>
                            <td class="px-4 py-2 border-b">{{ $step['cf_pakar'] }}</td>
                            <td class="px-4 py-2 border-b">{{ $step['cf_gejala'] }}</td>
                            <td class="px-4 py-2 border-b">{{ $step['cf_combine_previous'] }}</td>
                            <td class="px-4 py-2 border-b">{{ $step['cf_combine'] }}</td>
                            <td class="px-4 py-2 border-b">
                                <strong>{{ $step['perkalian']['penjelasan'] }}</strong>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</x-admin.layout>
