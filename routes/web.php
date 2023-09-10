<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\AddSiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegisterSiswaController;

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
    return view('landingpage.index');
});


Route::resource('/register-siswa', RegisterSiswaController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/jurusan', JurusanController::class);
    // get data siswa sesuai jurusan
    Route::get('/jurusan/{jurusan}', [JurusanController::class, 'getDataSiswa'])->name('jurusan.siswa');

    Route::resource('/addsiswa', AddSiswaController::class);

    Route::put('/addsiswa/actionstatus/{id}', [AddSiswaController::class, 'actionStatus'])->name('addsiswa.actionstatus');
    // PDF
    Route::post('/addsiswa/pdf', [AddSiswaController::class, 'pdf'])->name('addsiswa.pdf');
});

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
