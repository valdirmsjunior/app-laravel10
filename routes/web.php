<?php

use App\Http\Controllers\Admin\SupportController;
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

Route::get('/supports', [SupportController::class, 'index'])->name('support.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('support.create');
Route::post('/supports', [SupportController::class, 'store'])->name('support.store');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('support.show');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('support.update');
Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('support.delete');
