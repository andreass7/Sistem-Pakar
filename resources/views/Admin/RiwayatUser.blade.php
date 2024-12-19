<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h1 class="text-2xl font-bold mb-5">Riwayat Diagnosa</h1>
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Pengguna</th>
                <th class="border border-gray-300 px-4 py-2">Gejala</th>
                <th class="border border-gray-300 px-4 py-2">Hasil Penyakit</th>
                <th class="border border-gray-300 px-4 py-2">Nilai CF</th>
                <th class="border border-gray-300 px-4 py-2">Waktu</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($riwayat as $item)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->user->name ?? 'Anonim' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        @foreach (json_decode($item->gejala, true) as $gejalaId => $cf)
                            <p>Gejala {{ $gejalaId }}: {{ $cf }}</p>
                        @endforeach
                    </td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->hasil_penyakit ?? 'Tidak Diketahui' }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->nilai_cf ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->created_at->format('d-m-Y H:i') }}</td>
                    <td class="border border-gray-300 px-4 py-2"> <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="border border-gray-300 px-4 py-2 text-center">Belum ada riwayat.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-5">
        {{ $riwayat->links() }} <!-- Pagination -->
    </div>
</x-admin.layout>
