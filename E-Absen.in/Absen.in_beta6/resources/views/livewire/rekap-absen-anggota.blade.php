<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">Rekap Absen Anggota</h2>
</x-slot>

<div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white transition-colors transition-colors overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-darker">
            @if(session()->has('message'))
            <div class="bg-green-300 border-t-4 border-green-600 rounded-b">
                <div>
                    <h1 class="text-black font-bold">{{ session('message') }}</h1>
                </div>
            </div>

            @endif

            <div class="row mb-3 p-2">
                <div class="col-md-3">
                    <label for="" class="text-xl font-semibold leading-none tracking-wider text-black-500 dark:text-white-500">Anggota</label>
                    <select wire:model="byContinent" class="form-control bg-white overflow-hidden shadow-xl sm:rounded-lg dark:bg-darker">
                        <option value="" class="leading-none tracking-wider text-black-500 dark:text-white-500">No Selected</option>
                        @foreach ($members as $member)
                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if($isModal)
            @include('livewire.create_rekap-absen-anggota')
            @endif


            <table class="border-collapse w-full">
                <thead>
                    <tr>

                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Tanggal</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Waktu</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Keterangan</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">id_user</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">longlat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($absen as $row)
                    <tr class="bg-white lg:hover:bg-gray-100 lg:hover:text-black overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-darker">
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->tgl}}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->waktu }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->keterangan }}
                            <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->id_user }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->longlat }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="6">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>