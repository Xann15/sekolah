<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'LeandingPageController@index')->middleware('auth');
Route::get('/', 'LeandingPageController@index')->middleware('auth');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/home/berita/{id}', 'LeandingPageController@show_berita');
Route::get('/home/berita', 'LeandingPageController@index_berita');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/profilemadrasah', 'ProfileMadrasahController');
Route::resource('/ekstrakulikuler', 'EkstrakulikulerController');
Route::get('/ekstrakulikuler/{id}/destroy', 'EkstrakulikulerController@destroy');
Route::resource('/gurutendik', 'GuruTendikController');
Route::get('/gurutendik/{id}/destroy', 'GuruTendikController@destroy');
Route::resource('/contact', 'ContactController');
Route::resource('/berita', 'BeritaController');
Route::get('/berita/{id}/destroy', 'BeritaController@destroy');
Route::resource('/informasipendaftaran', 'InformasiPendaftaranController');
