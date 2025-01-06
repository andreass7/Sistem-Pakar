<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h1 class="max-w-full bg-white shadow-md text-green-500 p-3 rounded-lg text-2xl font-bold mb-2">Riwayat Diagnosa</h1>
    <div class="bg-white p-3 shadow-md rounded-lg">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Pengguna</th>
                    <th class="px-4 py-3">Gejala</th>
                    <th class="px-4 py-3">Hasil Penyakit</th>
                    <th class="px-4 py-3">Nilai CF</th>
                    <th class="px-4 py-3">Waktu</th>
                    <th class="px-4 py-3">Aksi</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($riwayat as $item)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td scope="row"
                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $offset + $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $item->user->name ?? 'Anonim' }}</td>
                        <td class="px-4 py-3">
                            @foreach (json_decode($item->gejala, true) as $gejalaId => $cf)
                                <p>Gejala {{ $gejalaId }}: {{ $cf }}</p>
                            @endforeach
                        </td>
                        <td class="px-4 py-3">{{ $item->hasil_penyakit ?? 'Tidak Diketahui' }}
                        </td>
                        <td class="px-4 py-3">{{ $item->nilai_cf ?? '-' }}</td>
                        <td class="px-4 py-3">{{ $item->created_at->format('d-m-Y H:i') }}</td>
                        <td class="px-4 py-3"> <a href="{{ route('Admin.Detail', ['id' => $item->id]) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
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
    </div>
</x-admin.layout>
