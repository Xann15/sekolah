<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\About;
use App\GuruTendik;
use App\Contact;
use App\VisiMisi;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile_madrasah = ProfileMadrasah::first();
        $gurutendik = GuruTendik::all();
        $contact = Contact::first();
        $about = About::first();
        $visimisi = VisiMisi::first();
        return view('about.index', compact('profile_madrasah', 'contact', 'gurutendik', 'about', 'visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::first();
        return view('about.create', compact('about'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile_madrasah = ProfileMadrasah::first();
        $about = About::find($id);
        return view('about.edit', compact('about', 'profile_madrasah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::findorfail($id);
        $about->update($request->all());

        if ($request->hasFile('logo_sekolah')) {
            $request->file('logo_sekolah')->move('foto_about/', 'ABT-' . $request->file('logo_sekolah')->getClientOriginalName());
            $about->logo_sekolah = 'ABT-' . $request->file('logo_sekolah')->getClientOriginalName();
            $about->save();
        }
        return redirect('admin/about')->with('success', 'Edit data sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
