<?php

use App\Http\Controllers\CapaianPembelajaranLulusanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilPembelajaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MappingCapaianPembelajaranLulusanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LoginController::class, 'index'])->name('home.index')->middleware('guest');

Route::controller(LoginController::class)->name('login.')->group(function () {
    Route::get('/login', 'index')->name('index')->middleware('guest');
    Route::post('/login', 'store')->name('store')->middleware('guest');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::controller(RegisterController::class)->name('register.')->middleware('guest')->group(function () {
    Route::get('/register', 'index')->name('index');
    Route::post('/register', 'store')->name('store');
});


Route::controller(DashboardController::class)->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/dashboard', 'index')->name('index');
});

Route::controller(CapaianPembelajaranLulusanController::class)->name('capaianPembelajaran.')->middleware('auth')->group(function () {
    Route::get('/dashboard/data-cpl-cpmk-scpmk', 'index')->name('index');

    Route::get('/dashboard/data-cpl-cpmk-scpmk/import', 'import')->name('import');
    Route::post('/dashboard/data-cpl-cpmk-scpmk/import', 'store')->name('store');

    Route::get('/dashboard/data-cpl-cpmk-scpmk/{id}/view-cpl-cpmk-scpmk', 'show')->name('show');

    Route::delete('/dashboard/data-cpl-cpmk-scpmk/{id}', 'destroy')->name('destroy');
});

Route::controller(MappingCapaianPembelajaranLulusanController::class)->name('mappingCpl.')->middleware('auth')->group(function () {
    Route::get('/dashboard/data-mapping-cpl', 'index')->name('index');

    Route::get('/dashboard/data-mapping-cpl/create-mapping-cpl', 'create')->name('create');
    Route::post('/dashboard/data-mapping-cpl/create-mapping-cpl', 'store')->name('store');

    Route::get('/dashboard/data-mapping-cpl/{id}/view-mapping-cpl', 'show')->name('show');

    Route::get('/dashboard/data-mapping-cpl/ubah-mapping-cpl/{id}/edit', 'edit')->name('edit');
    Route::put('/dashboard/data-mapping-cpl/{id}', 'update')->name('update');

    Route::delete('/dashboard/data-mapping-cpl/{id}', 'destroy')->name('destroy');

    Route::get('/dashboard/data-mapping-cpl/create-mapping-cpl/{kodeMataKuliah}/getNamaMataKuliah', 'getNamaMataKuliah')->name('getNamaMataKuliah');

    Route::get('/dashboard/data-mapping-cpl/create-mapping-cpl/{kodeCpl}/getCpmk', 'getCpmk')->name('getCpmk');
    Route::get('/dashboard/data-mapping-cpl/create-mapping-cpl/{kodeCpmk}/getScpmk', 'getScpmk')->name('getScpmk');

    Route::get('/dashboard/data-mapping-cpl/create-mapping-cpl/{kodeMataKuliah}/getIndikatorScpmk', 'getIndikatorScpmk')->name('getIndikatorScpmk');
});

Route::controller(HasilPembelajaranController::class)->name('hasilPembelajaran.')->middleware('auth')->group(function () {
    Route::get('/dashboard/data-hasil-pembelajaran', 'index')->name('index');

    Route::get('/dashboard/data-hasil-pembelajaran/create-hasil-pembelajaran', 'create')->name('create');
    Route::post('/dashboard/data-hasil-pembelajaran/create-hasil-pembelajaran', 'store')->name('store');
    
    Route::get('/dashboard/data-hasil-pembelajaran/{id}/view-hasil-pembelajaran', 'show')->name('show');

    Route::get('/dashboard/data-hasil-pembelajaran/create-hasil-pembelajaran/{kodeMataKuliah}/getMataKuliah', 'getMataKuliah')->name('getMataKuliah');

    Route::post('/dashboard/data-hasil-pembelajaran', 'storeScore')->name('storeScore');
    
    Route::delete('/dashboard/data-hasil-pembelajaran/{id}', 'destroy')->name('destroy');

    Route::get('/dashboard/data-hasil-pembelajaran/perhitungan-hasil-pembelajaran', 'perhitunganHasilPembelajaran')->name('perhitunganHasilPembelajaran');
});

Route::controller(ProfileController::class)->name('profile.')->middleware('auth')->group(function () {
    Route::get('/dashboard/my-profile/{id}', 'index')->name('index');

    Route::get('/dashboard/my-profile/ubah-profile/{id}/edit', 'edit')->name('edit');
    Route::put('/dashboard/my-profile/{id}', 'update')->name('update');
});