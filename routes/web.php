<?php

use App\Http\Controllers\Karyawan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanModelController;

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

Route::get('/welcome', function () {
    return view('welcome');
});



//verified
Route::middleware(['auth', 'verified'])->group(function () {
    //karyawan
    Route::get('/',[karyawan::class, 'index'])->name ('index');
    Route::get('/karyawan/adddata',[karyawan::class, 'adddata'])->name ('adddata');
    Route::post('/karyawan/senddata',[karyawan::class, 'senddata'])->name ('senddata');
    Route::get('/karyawan/datadetails/{id}',[karyawan::class, 'datadetails'])->name ('datadetails');
    Route::get('/karyawan/changedata/{id}',[karyawan::class, 'changedata'])->name ('changedata');
    Route::post('/karyawan/update/{id}',[karyawan::class, 'update'])->name ('update');
    Route::get('/karyawan/delete/{id}',[karyawan::class, 'delete'])->name ('delete');
    //perusahaan
    Route::get('/perusahaan/index',[PerusahaanModelController::class, 'indexp'])->name ('indexp');
    Route::get('/perusahaan/adddata',[PerusahaanModelController::class, 'adddata'])->name ('adddata');
    Route::post('/perusahaan/senddata',[PerusahaanModelController::class, 'senddata'])->name ('senddata');
    Route::get('/perusahaan/datadetails/{id}',[PerusahaanModelController::class, 'datadetails'])->name ('datadetails');
    Route::get('/perusahaan/changedata/{id}',[PerusahaanModelController::class, 'changedata'])->name ('changedata');
    Route::post('/perusahaan/update/{id}',[PerusahaanModelController::class, 'update'])->name ('update');
    Route::get('/perusahaan/delete/{id}',[PerusahaanModelController::class, 'delete'])->name ('delete');
    //export
    Route::get('/karyawan/exportpdf',[karyawan::class, 'exportpdf'])->name ('exportpdf');

});
//endverified

















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
