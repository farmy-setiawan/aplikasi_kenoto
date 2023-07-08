<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::resource('/keluarga', \App\Http\Controllers\KeluargaController::class);
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('/logout', function (){
    Auth::logout();
    return redirect('/login');
});
