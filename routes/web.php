<?php

use App\About;
use App\Contact;
use App\Jurusan;
use App\Fasilitas;
use App\GuruTendik;
use App\Ekstrakulikuler;
use App\ProfileMadrasah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::get('/', 'LeandingPageController@index');
// Route::get('/', 'LeandingPageController@index')->middleware('auth');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

// Register
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'store'])->name('store');

// Logout
Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/berita/{id}', 'LeandingPageController@show_berita');
Route::get('/berita', 'LeandingPageController@index_berita');

// Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');
Route::resource('/admin/profilemadrasah', 'ProfileMadrasahController');
Route::resource('/admin/ekstrakulikuler', 'EkstrakulikulerController');
Route::get('/admin/ekstrakulikuler/{id}/destroy', 'EkstrakulikulerController@destroy');
Route::resource('/admin/gurutendik', 'GuruTendikController');
Route::get('/admin/gurutendik/{id}/destroy', 'GuruTendikController@destroy');
Route::resource('/admin/contact', 'ContactController');
Route::resource('/admin/berita', 'BeritaController');
Route::get('/admin/berita/{id}/destroy', 'BeritaController@destroy');
Route::resource('/admin/informasipendaftaran', 'InformasiPendaftaranController');
Route::resource('/admin/katasambutankepsek', 'KataSambutanKepsekController');
Route::resource('/admin/about', 'AboutController');
Route::resource('/admin/visimisi', 'VisiMisiController');
Route::resource('/admin/program-studi-dan-jurusan', 'JurusanController');
Route::get('/admin/program-studi-dan-jurusan/{id}/destroy', 'JurusanController@destroy');


Route::get('/about', function () {
    $profile_madrasah = ProfileMadrasah::first();
    $gurutendik = GuruTendik::all();
    $contact = Contact::first();
    $about = About::first();
    return view('page.about.index', compact('profile_madrasah', 'contact', 'gurutendik', 'about'));
});
Route::get('/program-studi-dan-jurusan', function () {
    $profile_madrasah = ProfileMadrasah::first();
    $contact = Contact::first();
    $jurusan = Jurusan::all();
    return view('page.program-studi-dan-jurusan.index', compact('profile_madrasah', 'contact', 'jurusan'));
});
Route::get('/fasilitas', function () {
    $profile_madrasah = ProfileMadrasah::first();
    $fasilitas = Fasilitas::all();
    $contact = Contact::first();
    return view('page.fasilitas.index', compact('profile_madrasah', 'fasilitas', 'contact'));
});
Route::get('/ekstrakulikuler', function () {
    $profile_madrasah = ProfileMadrasah::first();
    $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
    $contact = Contact::first();
    return view('page.ekstrakulikuler.index', compact('profile_madrasah', 'ekstrakulikuler', 'contact'));
});
Route::get('/gallery', function () {
    $profile_madrasah = ProfileMadrasah::first();
    // $gallery = Gallery::orderByRaw('created_at DESC')->get();
    $contact = Contact::first();
    return view('page.gallery.index', compact('profile_madrasah', 'contact'));
});
