<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">Absenku</h2>
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
                    @if ($row->id_user == Auth::user()->id)
                    <tr class="bg-white lg:hover:bg-gray-100 lg:hover:text-black flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0 dark:bg-darker">
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->tgl }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->waktu }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->keterangan }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->id_user }}
                        </td>
                        <td class="w-full lg:w-auto p-3 text-center border border-b text-center block lg:table-cell relative lg:static dark:text-white-500">
                            {{ $row->longlat }}
                        </td>
                    </tr>
                    @endif
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