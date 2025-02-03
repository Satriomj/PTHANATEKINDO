<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelolaTemaController;


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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CMS Untuk Master Pengguna
Route::get('/users', [UserController::class, 'index'])->name('users.index'); 
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); 
Route::post('/users', [UserController::class, 'store'])->name('users.store'); 
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit'); 
Route::put('/users/{user_id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy'); 

// CMS Untuk Kelola Tema
Route::get('kelola-tema', [KelolaTemaController::class, 'index'])->name('kelola-tema.index');
Route::patch('kelola-tema/update-background', [KelolaTemaController::class, 'updateBackground'])->name('kelola-tema.updateBackground');
Route::patch('kelola-tema/update-logo', [KelolaTemaController::class, 'updateLogo'])->name('kelola-tema.updateLogo');
Route::patch('kelola-tema/update-menu', [KelolaTemaController::class, 'updateMenu'])->name('kelola-tema.updateMenu');


