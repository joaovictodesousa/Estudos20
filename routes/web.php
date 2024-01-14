<?php

use App\Http\Controllers\CadastroController;
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
Route::get('/', [CadastroController::class, 'index'])->name('welcome.home');
Route::get('/welcome', [CadastroController::class, 'index'])->name('welcome.home');
Route::get('/welcome/table', [CadastroController::class, 'table'])->name('welcome.table');
Route::get('/welcome/create', [CadastroController::class, 'create'])->name('welcome.create');
Route::post('/welcome', [CadastroController::class, 'store'])->name('welcome.store');
Route::get('/welcome/{item}/edit', [CadastroController::class, 'edit'])->name('welcome.edit');
Route::put('/welcome/edit/{item}', [CadastroController::class, 'update'])->name('welcome.update');
Route::delete('/welcome/{item}', [CadastroController::class, 'destroy'])->name('welcome.destroy');