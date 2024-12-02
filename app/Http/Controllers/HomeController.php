<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use App\Contact;
use App\GuruTendik;
use App\Ekstrakulikuler;
use App\KataSambutanKepsek;
use App\ProfileMadrasah;
use Illuminate\Http\Request;
use App\InformasiPendaftaran;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile_madrasah = ProfileMadrasah::first();
        // @dd($profile_madrasah);
        Log::info($profile_madrasah); // Log the data
        $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
        $gurutendik = GuruTendik::all();
        $contact = Contact::first() ?? new Contact;
        $informasi_pendaftaran = InformasiPendaftaran::first() ?? new InformasiPendaftaran;
        $katasambutan_kepsek = KataSambutanKepsek::first();
        return view('home', compact('profile_madrasah', 'ekstrakulikuler', 'gurutendik', 'contact', 'informasi_pendaftaran', 'katasambutan_kepsek'));
    }
}
