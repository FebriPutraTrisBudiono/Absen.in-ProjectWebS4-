<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">Data Anggota</h2>
</x-slot>

<div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white transition-colors overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-darker">
            @if(session()->has('message'))
            <div class="bg-green-300 border-t-4 border-green-600 rounded-b">
                <div>
                    <h1 class="text-black font-bold">{{ session('message') }}</h1>
                </div>
            </div>

            @endif

            @if($isModal)
            @include('hak_akses.karyawan.show-members-karyawan')
            @endif

            <table class="border-collapse w-full">
                <thead>
                    <tr>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Nomor</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Nama Anggota</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">TTD</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Jabatan</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">No Telepon</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Email</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Alamat</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($members as $nomer => $row)
                    <tr class="bg-white lg:hover:bg-gray-200 lg:hover:text-black overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-darker">
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $nomer+1 }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->name }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->ttd }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->jabatan }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->no_telepon }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->email }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->alamat }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            <button wire:click="show({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Detail</button>
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