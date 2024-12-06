<?php

use App\About;
use App\Contact;
use App\Gallery;
use App\Jurusan;
use App\VisiMisi;
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
// Route::get('/', 'LeandingPageController@index')->middleware('auth');

// Login

// Register
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'store'])->name('store');

// Logout
// Auth::routes();


// Cara baca route::get('/halaman apa','aksi apa / nama controller yang bertanggung jawab')

// halaman home, controllernya LeandingPageController@index method(nama fungsi di kontrollernya) index
Route::get('/', 'LeandingPageController@index');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');

// Admin
Route::get('/admin/home', 'HomeController@index')->name('home');
Route::resource('/admin/profilemadrasah', 'ProfileMadrasahController');
Route::resource('/admin/ekstrakulikuler', 'EkstrakulikulerController');
Route::get('/admin/ekstrakulikuler/{id}/destroy', 'EkstrakulikulerController@destroy');
Route::resource('/admin/gurutendik', 'GuruTendikController');
Route::get('/admin/gurutendik/{id}/destroy', 'GuruTendikController@destroy');
Route::resource('/admin/contact', 'ContactController');
Route::resource('/admin/informasipendaftaran', 'InformasiPendaftaranController');
Route::resource('/admin/katasambutankepsek', 'KataSambutanKepsekController');
Route::resource('/admin/about', 'AboutController');
Route::resource('/admin/visimisi', 'VisiMisiController');
Route::resource('/admin/program-studi-dan-jurusan', 'JurusanController');
Route::get('/admin/program-studi-dan-jurusan/{id}/destroy', 'JurusanController@destroy');
Route::resource('/admin/fasilitas', 'FasilitasController');
Route::get('/admin/fasilitas/{id}/destroy', 'FasilitasController@destroy');
Route::resource('/admin/gallery', 'GalleryController');
Route::get('/admin/gallery/{id}/destroy', 'GalleryController@destroy');



// USER
Route::get('/gallery', function () {
    // ngambil data data yang di perlukan di views ini
    $profile_madrasah = ProfileMadrasah::first();
    $gallery = Gallery::all();

    // compact untuk ngirim data variabel(harus sesuai nama nya) ke views supaya bisa dipakai
    return view('page.gallery.index', compact('profile_madrasah', 'gallery'));
});


// sama aja konsepnya kaya yg diatas
Route::get('/gallery/{id}', function ($id) {
    $profile_madrasah = ProfileMadrasah::first();

    // Fetch gallery by ID, if not found throw a 404 error
    $gallery = Gallery::find($id);
    if (!$gallery) {
        abort(404, 'Gallery not found');
    }

    return view('page.gallery.show', compact('profile_madrasah', 'gallery'));
})->where('id', '[0-9]+'); // Ensure the ID parameter is numeric


Route::get('/about', function () {
    $profile_madrasah = ProfileMadrasah::first();
    $gurutendik = GuruTendik::all();
    $about = About::first();
    $visimisi = VisiMisi::first();
    return view('page.about.index', compact('profile_madrasah', 'about', 'gurutendik', 'visimisi'));
});
Route::get('/program-studi-dan-jurusan', function () {
    $profile_madrasah = ProfileMadrasah::first();
    $jurusan = Jurusan::all();
    return view('page.program-studi-dan-jurusan.index', compact('profile_madrasah', 'jurusan'));
});
Route::get('/fasilitas', function () {
    $profile_madrasah = ProfileMadrasah::first();
    $fasilitas = Fasilitas::all();
    return view('page.fasilitas.index', compact('profile_madrasah', 'fasilitas'));
});
Route::get('/ekstrakulikuler', function () {
    $profile_madrasah = ProfileMadrasah::first();
    $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
    return view('page.ekstrakulikuler.index', compact('profile_madrasah', 'ekstrakulikuler'));
});
