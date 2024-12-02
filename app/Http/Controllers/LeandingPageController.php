<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use App\Berita;
use App\Contact;
use App\GuruTendik;
use App\Ekstrakulikuler;
use App\ProfileMadrasah;
use Illuminate\Http\Request;
use App\InformasiPendaftaran;
use App\KataSambutanKepsek;

class LeandingPageController extends Controller
{
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
        return view('welcome', compact('profile_madrasah', 'ekstrakulikuler', 'gurutendik', 'contact', 'informasi_pendaftaran', 'katasambutan_kepsek'));
    }
}
