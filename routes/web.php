<?php

use App\Http\Controllers\AgendaController;
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
//Route::get('/agenda',[AgendaController::class,'index']);

Route::prefix('agenda')->group(function(){
    Route::get('/',[AgendaController::class, 'index'])->name('agenda-index');
    Route::get('/create',[AgendaController::class, 'create'])->name('agenda-create');
    Route::post('/',[AgendaController::class, 'store'])->name('agenda-store');
    Route::get('/{id}/edit',[AgendaController::class, 'edit'])->where('id','[0-9]+')->name('agenda-edit');
    Route::put('/{id}',[AgendaController::class, 'update'])->where('id','[0-9]+')->name('agenda-update');
    Route::delete('/{id}',[AgendaController::class, 'destroy'])->where('id','[0-9]+')->name('agenda-destroy');
});


