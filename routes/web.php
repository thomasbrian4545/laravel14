<?php

use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert-mahasiswa-1', function () {
    $mahasiswa = new Mahasiswa;
    $mahasiswa->nim = '19003036';
    $mahasiswa->nama = 'Sari Citra Lestari';
    $mahasiswa->tanggal_lahir = '2001-12-31';
    $mahasiswa->ipk = 3.62;
    $mahasiswa->save();
    return "Penambahan mahasiswa berhasil";
});

Route::get('/insert-mahasiswa-2', function () {
    $mahasiswa = new Mahasiswa;
    $mahasiswa->nim = '19021044';
    $mahasiswa->nama = 'Rudi Permana';
    $mahasiswa->tanggal_lahir = '2000-08-22';
    $mahasiswa->ipk = 2.99;
    $mahasiswa->save();
    return "Penambahan mahasiswa berhasil";
});

Route::get('/insert-mahasiswa-3', function () {
    $mahasiswa = new Mahasiswa;
    $mahasiswa->nim = '19002035';
    $mahasiswa->save();
    return "Penambahan mahasiswa berhasil";
});
