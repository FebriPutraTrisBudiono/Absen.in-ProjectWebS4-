<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Data Jabatan</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        @if(session()->has('message'))
            <div class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-3">
                 <div>
                     <h1 class="text-black font-bold">{{ session('message') }}</h1>
                 </div>
            </div>
            
            @endif
            
            <button wire:click="create()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-3"> + Tambah Jabatan</button>
            
            @if($isModal)
            @include('livewire.create')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                    <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Jabatan</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jabatans as $nomer => $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $nomer+1 }}</td>
                            <td class="border px-4 py-2">{{ $row->Jabatan }}</td>
                            <td class="border px-4 py-2">
                            <button wire:click="delete({{ $row->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="2">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>