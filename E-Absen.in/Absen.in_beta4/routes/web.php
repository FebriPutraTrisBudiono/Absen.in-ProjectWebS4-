<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Members;
use App\Http\Livewire\Jabatans;
use App\Http\Livewire\Pengaturanlainnya;
use App\Http\Livewire\MembersKaryawan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('pengaturanlainnya', Pengaturanlainnya::class)->name('pengaturanlainnya');
});

Route::group(['middleware' => ['auth:sanctum' => 'hak_akses:Admin' ]], function() {
    

    Route::get('member', Members::class)->name('member');

    Route::get('jabatan', Jabatans::class)->name('jabatan');

});

Route::group(['middleware' => ['auth:sanctum' => 'hak_akses:Karyawan' ]], function() {

    Route::get('memberskaryawan', MembersKaryawan::class)->name('memberskaryawan');
    
});