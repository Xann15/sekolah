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
        $berita_terbaru = Berita::orderByRaw('created_at DESC')->paginate(6);
        $informasi_pendaftaran = InformasiPendaftaran::first() ?? new InformasiPendaftaran;
        return view('welcome', compact('profile_madrasah', 'ekstrakulikuler', 'gurutendik', 'contact', 'berita_terbaru', 'informasi_pendaftaran'));
    }

    public function index_berita()
    {
        $madrasah = ProfileMadrasah::first();
        $contact = Contact::first();
        $berita_terbaru = Berita::orderByRaw('created_at DESC')->paginate(3);
        $berita_all = Berita::orderByRaw('created_at DESC')->get();
        return view('berita.index_berita', compact('berita_terbaru', 'berita_all', 'contact', 'madrasah'));
    }

    public function show_berita($id)
    {
        $madrasah = ProfileMadrasah::first();
        $contact = Contact::first();
        $berita = Berita::find($id);
        return view('berita.show_berita', compact('berita', 'madrasah', 'contact'));
    }
}
