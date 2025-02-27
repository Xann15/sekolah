<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\GuruTendik;
use Illuminate\Http\Request;

class GuruTendikController extends Controller
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
        return view('gurutendik.index', compact('gurutendik', 'profile_madrasah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile_madrasah = ProfileMadrasah::first();
        return view('gurutendik.create', compact('profile_madrasah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gurutendik = new GuruTendik();
        $gurutendik->nama   = $request->input('nama');
        $gurutendik->jabatan   = $request->input('jabatan');
        $image                   = $request->file('foto');
        $imageName   = 'GTK-' . $image->getClientOriginalName();
        $image->move('foto_gurutendik/', $imageName);
        $gurutendik->foto  = $imageName;
        $gurutendik->save();
        return redirect()->route('gurutendik.index')->with("success", "Tambah data suskes");
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
        $gurutendik = GuruTendik::find($id);
        return view('gurutendik.edit', compact('gurutendik', 'profile_madrasah'));
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
        $gurutendik = GuruTendik::findorfail($id);
        $gurutendik->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_gurutendik/', 'GTK-' . $request->file('foto')->getClientOriginalName());
            $gurutendik->foto = 'GTK-' . $request->file('foto')->getClientOriginalName();
            $gurutendik->save();
        }
        return redirect('admin/gurutendik')->with('success', 'Edit data sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $gurutendik = GuruTendik::find($id);
            $gurutendik->delete();
            return redirect('admin/gurutendik')->with('success', 'Hapus data sukses');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('warning', 'Maaf data  tidak dapat dihapus');
        }
    }
}
