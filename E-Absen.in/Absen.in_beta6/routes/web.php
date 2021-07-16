<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\JamKerjas;
use App\Http\Livewire\Members;
use App\Http\Livewire\Jabatans;
use App\Http\Livewire\Pengaturanlainnya;
use App\Http\Livewire\MembersKaryawan;
use App\Http\Livewire\Absens;
use App\Http\Livewire\Absenku;
use App\Http\Livewire\RekapAbsenAnggota;
use App\Http\Livewire\Dashboard;
use Carbon\Carbon;

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
    return view('auth.login');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('dashboardku', Dashboard::class)->name('dashboardku');

    Route::get('absen', Absens::class)->name('absen');

    Route::get('absenku', Absenku::class)->name('absenku');

    Route::get('rekapabsenanggota', RekapAbsenAnggota::class)->name('rekapabsenanggota');

    Route::get('pengaturanlainnya', Pengaturanlainnya::class)->name('pengaturanlainnya');
});

Route::group(['middleware' => ['auth:sanctum' => 'hak_akses:Admin']], function () {


    Route::get('member', Members::class)->name('member');

    Route::get('jabatan', Jabatans::class)->name('jabatan');

    Route::get('jamkerja', JamKerjas::class)->name('jamkerja');
});

Route::group(['middleware' => ['auth:sanctum' => 'hak_akses:Karyawan']], function () {

    Route::get('memberskaryawan', MembersKaryawan::class)->name('memberskaryawan');
});
