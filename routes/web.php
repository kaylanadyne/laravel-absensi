<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbsenController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/user', function () {
//     return view('dashboard.index');
// });
// user
Route::get('/user', [AbsenController::class, 'indexUsers'])->name('indexUser');
// absen
Route::get('/indexAbsen', [AbsenController::class, 'indexAbsen'])->name('indexAbsen');
Route::post('/storeAbsen', [AbsenController::class, 'storeAbsen'])->name('storeAbsen');
Route::post('/deleteActivity/{id}', [AbsenController::class, 'deleteAbsen'])->name('deleteAbsen');
Route::get('/editUser/{id}', [AbsenController::class, 'indexEdit'])->name('indexEdit');
Route::post('/update/{id}', [AbsenController::class, 'updateAbsen'])->name('updateAbsen');

// register
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/registerStore', [AuthController::class, 'storeRegister'])->name('registerStore');
// login
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/loginAuth', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');