<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h1 class="max-w-full bg-white shadow-md text-green-500 p-4 py-5 rounded-lg text-2xl font-semibold mb-2">
        Detail Riwayat Pengguna
    </h1>

    <div class="mt-4 shadow-md bg-white p-3 rounded-lg">
        <p class="text-lg font-semibold text-gray-700">Nama Pengguna &rarr;
            <span class="uppercase text-gray-900">{{ $riwayat->user->name }}</span>
        </p>

        <p class="text-lg font-semibold text-gray-700 mt-3">Gejala Yang Dialami:</p>
        <ul class="list-disc ml-6 mt-2">
            @foreach (json_decode($riwayat->gejala, true) as $gejalaId => $cf)
                @php
                    $gejalaNama = App\Models\Gejala::find($gejalaId)->nama ?? 'Gejala Tidak Ditemukan';
                @endphp
                <li class="text-gray-800">
                    {{ $gejalaNama }}
                    <span class="font-semibold text-blue-600">Nilai CF User = {{ $cf }}</span>
                </li>
            @endforeach
        </ul>


        <p class="text-lg font-semibold text-gray-700 mt-5">Langkah-Langkah Perhitungan:</p>
        <table class="w-full text-left table-auto border border-gray-300 mt-3">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border">Penyakit</th>
                    <th class="px-4 py-2 border">Gejala</th>
                    <th class="px-4 py-2 border">Langkah Perhitungan</th>
                    <th class="px-4 py-2 border">CF Akhir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayat->detailPerhitungan as $detail)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border">{{ $detail->penyakit }}</td>
                        <td class="px-4 py-2 border">
                            Gejala ID {{ $detail->gejala_id }}
                            (CF User: {{ $detail->cf_user }}, CF Pakar: {{ $detail->cf_pakar }})
                        </td>
                        <td class="px-4 py-2 border text-sm">
                            <p>
                                1. CF Gejala = CF User × CF Pakar <br>
                                &nbsp;&nbsp;&nbsp;= {{ $detail->cf_user }} × {{ $detail->cf_pakar }} <br>
                                &nbsp;&nbsp;&nbsp;= {{ $detail->cf_gejala }}
                            </p>
                            <p>
                                2. CF Combine = CF Combine Sebelumnya + (CF Gejala × (1 - CF Combine Sebelumnya))<br>
                                &nbsp;&nbsp;&nbsp;= {{ $detail->cf_combine_previous }} + ({{ $detail->cf_gejala }} ×
                                (1 - {{ $detail->cf_combine_previous }}))<br>
                                &nbsp;&nbsp;&nbsp;= {{ $detail->cf }}
                            </p>
                        </td>
                        <td class="px-4 py-2 border font-semibold text-blue-600">
                            {{ $detail->cf }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
