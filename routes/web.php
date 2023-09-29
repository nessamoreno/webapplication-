<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplyingController;
use App\Models\Applying;

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

Route::get('/applying',[ApplyingController::class,'list']);
Route::get('/applying/create', [ApplyingController::class,'create'])->name('applying.register');
Route::post('/applying/store', [ApplyingController::class,'store'])->name('applying.store');
Route::delete('/applying/{id}/delete', [ApplyingController::class,'delete'])->name('applying.delete');
Route::get('applying/{id}/update',[ApplyingController::class,'update'])->name('applying.update');
Route::put('applying/{id}/put',[ApplyingController::class,'put'])->name('applying.put');
