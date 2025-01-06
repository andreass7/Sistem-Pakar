<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div>
        <h1 class="max-w-full bg-white shadow-md text-green-500 p-4 py-5 rounded-lg text-2xl font-semibold mb-2">
            Perhitungan
        </h1>
        <form action="{{ route('Admin.Perhitungan') }}" method="POST"
            class="bg-white shadow-md rounded-lg px-8 py-8 mb-4">
            @csrf
            <div class="mb-4">
                @if ($errors->any())
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                        class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative transition-opacity duration-500">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="gap-y-2 grid">
                    @foreach ($gejala as $item)
                        <div class="parentDiv rounded-md cursor-pointer transition-colors duration-300">
                            <div class="sm:flex sm:justify-between sm:items-center grid gap-y-2 p-3 hover:bg-green-200">
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
</x-admin.layout>
