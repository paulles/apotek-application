<?php

use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\TambahController::class, 'create'])-> name('create');
Route::post('/createTambah', [App\Http\Controllers\TambahController::class, 'addTambah'])-> name('addTambah');
Route::get('/edit{id}', [App\Http\Controllers\TambahController::class, 'edit'])-> name('edit');
Route::post('/editTambah{id}', [App\Http\Controllers\TambahController::class, 'editTambah'])-> name('editTambah');
Route::delete('/deleteTambah{id}', [App\Http\Controllers\TambahController::class, 'deleteTambah'])-> name('deleteTambah');

// Pasien
Route::get('/data_pasien', [App\Http\Controllers\HomePasienController::class, 'index'])->name('data_pasien');
Route::get('/create_pasien', [App\Http\Controllers\PasienController::class, 'create_pasien'])->name('create_pasien');
Route::post('/createSavePasien', [App\Http\Controllers\PasienController::class, 'addTambah_pasien'])-> name('addTambah_pasien');
Route::get('/ubah_pasien{id}', [App\Http\Controllers\PasienController::class, 'ubah_pasien'])-> name('ubah_pasien');
Route::post('/editSavePasien{id}', [App\Http\Controllers\PasienController::class, 'editSavePasien'])-> name('editSavePasien');
Route::delete('/delete_pasien{id}', [App\Http\Controllers\PasienController::class, 'delete_pasien'])-> name('delete_pasien');

// Route::resource('/data_pasien', PasienController::class)->missing(function(Request $request){
//     return Redirect::route(pasien.edit_pasien);
// });

//test
// Route::get('/coba', 'App\Http\Controllers\CobaController@index');

// dokter
Route::get('/data_dokter', [App\Http\Controllers\HomeDokterController::class, 'index'])->name('data_dokter');
Route::get('/create_dokter', [App\Http\Controllers\DokterController::class, 'create_dokter'])-> name('create_dokter');
Route::post('/createSaveDokter', [App\Http\Controllers\DokterController::class, 'addTambah_dokter'])-> name('addTambah_dokter');
Route::get('/ubah_dokter{id}', [App\Http\Controllers\DokterController::class, 'ubah_dokter'])-> name('ubah_dokter');
Route::post('/editSave_dokter{id}', [App\Http\Controllers\DokterController::class, 'editSave_dokter'])-> name('editSave_dokter');
Route::delete('/delete_dokter{id}', [App\Http\Controllers\DokterController::class, 'delete_dokter'])-> name('delete_dokter');
// // Route::post('/editSaveDokter{id}', [App\Http\Controllers\DokterController::class, 'editSaveDokter'])-> name('editSaveDokter');

//pemeriksaan
Route::get('/data_periksa', [App\Http\Controllers\HomePeriksaController::class, 'index'])->name('data_periksa');
Route::get('/create_periksa', [App\Http\Controllers\PeriksaController::class, 'create_periksa'])-> name('create_periksa');
Route::post('/createSavePeriksa', [App\Http\Controllers\PeriksaController::class, 'addTambah_periksa'])-> name('addTambah_periksa');
Route::get('/ubah_periksa{id}', [App\Http\Controllers\PeriksaController::class, 'ubah_periksa'])-> name('ubah_periksa');
Route::post('/editSavePeriksa{id}', [App\Http\Controllers\PeriksaController::class, 'editSave_periksa'])-> name('editSave_periksa');
Route::delete('/delete_periksa{id}', [App\Http\Controllers\PeriksaController::class, 'delete_periksa'])-> name('delete_periksa');
