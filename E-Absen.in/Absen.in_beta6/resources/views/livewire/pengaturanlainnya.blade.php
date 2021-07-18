<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">Pengaturan Lainnya</h2>
</x-slot>

<div>
    <label for="file">Choose file</label>
    <input type="file" class="form-control" name="file" id="file">
</div>
<button wire:click.prevent="upload()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>