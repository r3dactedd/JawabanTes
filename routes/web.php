<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\DetailController;
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

Route::prefix('/data')->group(function (){
    Route::get('/', [DataController::class, 'show'])->name('data.index');
    Route::get('/create', [DataController::class, 'create'])->name('data.create');
    Route::post('/', [DataController::class, 'store'])->name('data.store');
    Route::get('/{id}',[DataController::class,'returnDetails'])->name('data.details');
    Route::delete('/{id}',[DataController::class,'delete'])->name('data.delete');
    Route::get('/edit/{id}',[DataController::class,'edit'])->name('data.edit');
    Route::patch('/{id}',[DataController::class,'update'])->name('data.update');
});








