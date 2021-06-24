 <?php $__env->slot('header'); ?>  
    <h2 class="font-semibold text-xl text-grey-800 leading-tight">Data Anggota</h2>
 <?php $__env->endSlot(); ?>

<div class="py-5">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <?php if(session()->has('message')): ?>
            <div class="bg-green-300 border-t-4 border-green-600 rounded-b">
                 <div>
                     <h1 class="text-black font-bold"><?php echo e(session('message')); ?></h1>
                 </div>
            </div>
            
            <?php endif; ?>

            
            <button wire:click="create()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-3"> + Tambah Anggota</button>
            
            <?php if($isModal): ?>
            <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?> 
        

            <table class="table w-full text-black dark:text-dark">
                <thead>
                    <tr class="bg-gray-100">
                    <th class="px-4 py-2">Nomor</th>
                        <th class="px-4 py-2">Nama Anggota</th>
                        <th class="px-4 py-2">TTD</th>
                        <th class="px-4 py-2">Jabatan</th>
                        <th class="px-4 py-2">No Telepon</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Alamat</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nomer => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="border px-4 py-2"><?php echo e($nomer+1); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->name); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->ttd); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->jabatan); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->no_telepon); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->email); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->alamat); ?></td>
                            <td class="border px-4 py-2">
                            <button wire:click="delete(<?php echo e($row->id); ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            <button wire:click="edit(<?php echo e($row->id); ?>)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="6">Tidak ada data</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\Absen.in-ProjectWebS4\E-Absen.in\E-Absen.in\resources\views/livewire/members.blade.php ENDPATH**/ ?>