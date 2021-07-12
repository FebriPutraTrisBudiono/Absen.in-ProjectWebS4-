<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">Absen</h2>
</x-slot>

<div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if(session()->has('message'))
            <div class="bg-green-300 border-t-4 border-green-600 rounded-b">
                <div>
                    <h1 class="text-black font-bold">{{ session('message') }}</h1>
                </div>
            </div>

            @endif
            <table class="border-collapse w-full">
                <thead>
                    <tr>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Status</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Tanggal</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Absen Masuk</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Absen Pulang</th>
                    </tr>
                </thead>
                <tbody>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <i class="check-circle-o text-success"></i>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        {{ $tgl }}
                        <input type="text" class="" id="fortgl" name="tgl" wire:model="tgl" value="{{ $tgl }}">
                        <input type="text" class="" id="forwaktu" name="waktu" wire:model="waktu" value="{{ $waktu }}">
                        <input type="text" class="" id="id" name="id" wire:model="id_user" value="{{ $id_user }}">
                        <input type="text" class="" id="demo" name="id" wire:model="longlat" value="">

                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <input type="hidden" class="" id="forid" name="id" wire:model="keteranganMasuk" value="{{ $keteranganMasuk }}">
                        <button onclick="getLocation()">Get lokasi</button>
                        <button wire:click.prevent="masuk()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Absen Masuk
                        </button>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <input type="hidden" class="" id="forid" name="id" wire:model="keteranganPulang" value="{{ $keteranganPulang }}">
                        <button wire:click.prevent="pulang()" type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Absen Pulang
                        </button>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>