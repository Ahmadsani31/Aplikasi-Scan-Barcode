<?php

use App\Events\NotifEvent;

use App\Http\Livewire\ScanBarcodeLiveware;
use App\Http\Livewire\WisudawanLiveware;
use App\Http\Livewire\CreateBarcode;
use Illuminate\Support\Facades\Route;

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

Route::get('/example-page', function () {
    return view('example');
});

Route::get('/send-event', function () {
    event(new NotifEvent('notif terkirim lagi'));
});

// Route::get('/siswa', [Mahasiswa::class, 'index'])->name('mahasiswa');
// Route::post('/siswa-event', [Mahasiswa::class, 'event'])->name('mahasiswa.event');
// Route::post('/siswa-cek', [Mahasiswa::class, 'cekData'], function () {
//     // broadcast(new NotifEvent('notif terkirim'));
// })->name('siswa.cek');

Route::get('/wisudawan', WisudawanLiveware::class)->name('wisuda');
Route::get('/create-barcode', CreateBarcode::class)->name('buat-barcode');
// Route::get('/mahasiswa', PostMahasiswa::class);
Route::get('/', ScanBarcodeLiveware::class)->name('home');
