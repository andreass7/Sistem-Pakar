<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white p-5 h-48 shadow-md">
            <p class="text-2xl font-semibold">Jumlah User</p>
            <p class="text-8xl text-center font-bold text-green-400">{{ $DataAKun }}</p>
        </div>
        <div class="bg-white p-5 h-48 shadow-md">
            <p class="text-2xl font-semibold">Jumlah Data Gejala</p>
            <p class="text-8xl text-center font-bold text-green-400">{{ $DataGejala }}</p>
        </div>
    </div>
</x-admin.layout>
