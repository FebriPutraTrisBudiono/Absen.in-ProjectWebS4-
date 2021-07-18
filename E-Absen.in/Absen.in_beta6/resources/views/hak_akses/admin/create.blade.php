<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="forNamaAnggota" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" wire:model="name">
                            @error('name') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="forttd" class="block text-gray-700 text-sm font-bold mb-2">Tempat dan Tanggal Lahir</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forttd" name="ttd" wire:model="ttd">
                            @error('ttd') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="forJabatan" class="block text-gray-700 text-sm font-bold mb-2">Jabatan</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forjabatan" name="jabatan" wire:model="jabatan">
                            <option value="#">-----Pilih Jabatan------</option>
                            @foreach($jabatans as $jabatan)
                            <option value="{{$jabatan->jabatan}}">{{$jabatan->jabatan}}</option>
                            @endforeach
                            </select>
                            @error('jabatan') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="forhak_akses" class="block text-gray-700 text-sm font-bold mb-2">Hak Akses</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forhak_akses" name="hak_akses" wire:model="hak_akses">
                            <option value="#">-----Pilih Hak Akses------</option>
                            <option value="Admin">Admin</option>
                            <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="forno_telepon" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forno_telepon" name="no_telepon" wire:model="no_telepon">
                            @error('no_telepon') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="foremail" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="foremail" name="email" wire:model="email">
                            @error('email') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="forpassword" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="forpassword" name="password" wire:model="password">
                            @error('password') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="foralamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="foralamat" name="alamat" wire:model="alamat">
                            @error('alamat') <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                                             
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Save
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Cancel
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>