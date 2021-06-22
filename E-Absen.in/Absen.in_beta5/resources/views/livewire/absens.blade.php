<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">Jabatan</h2>
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
                    
                </tbody>
            </table>
        </div>
    </div>
</div>