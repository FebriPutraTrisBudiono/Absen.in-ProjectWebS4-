<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">Jam Kerja</h2>
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
            @include('hak_akses.admin.create_jamkerja')
            @endif

            <table class="border-collapse w-full">
                <thead>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">No.</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Jam Mulai</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Jam Selesai</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Keterangan</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Aksi</th>
                </thead>
                <tbody>
                    @forelse($jamkerjas as $nomer => $row)
                    <tr class="bg-white lg:hover:bg-gray-100 lg:hover:text-black overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-darker">
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $nomer+1 }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->start }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->finish }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->keterangan }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
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