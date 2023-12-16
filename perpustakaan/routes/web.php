<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/viewbuku', [BukuController::class, 'index'])->name('viewbuku');
Route::get('/menutambahbuku', [BukuController::class, 'menutambahbuku'])->name('menutambahbuku');
Route::post('/insertbuku', [BukuController::class, 'insertbuku'])->name('insertbuku');

Route::get('/menuupdatebuku/{id}', [BukuController::class, 'tampildatabuku'])->name('tampildatabuku');
Route::post('/updatedatabuku/{id}', [BukuController::class, 'updatedatabuku'])->name('updatedatabuku');

Route::get('/deletebuku/{id}', [BukuController::class, 'deletebuku'])->name('deletebuku');