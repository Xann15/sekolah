<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $gallery = Gallery::orderByRaw('created_at DESC')->get();
        return view('gallery.index', compact('gallery', 'profile_madrasah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile_madrasah = ProfileMadrasah::first();
        return view('gallery.create', compact('profile_madrasah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->judul   = $request->input('judul');
        $filefoto                  = $request->file('foto');
        $filefotoName   = 'GL-' . $filefoto->getClientOriginalName();
        $filefoto->move('foto_gallery/', $filefotoName);
        $gallery->foto  = $filefotoName;
        $gallery->penulis   = $request->input('penulis');
        $gallery->deskripsi   = $request->input('deskripsi');
        $gallery->save();
        return redirect()->route('gallery.index')->with("success", "Gallery berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile_madrasah = ProfileMadrasah::first();
        $gallery = Gallery::find($id);
        return view('gallery.show', compact('gallery', 'profile_madrasah'));
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
        $gallery = Gallery::find($id);
        return view('gallery.edit', compact('gallery', 'profile_madrasah'));
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
        $gallery = Gallery::findorfail($id);
        $gallery->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_gallery/', 'GL-' . $request->file('foto')->getClientOriginalName());
            $gallery->foto = 'GL-' . $request->file('foto')->getClientOriginalName();
            $gallery->save();
        }
        return redirect('admin/gallery')->with('success', 'Edit data sukses');
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
            $gallery = Gallery::find($id);
            $gallery->delete();
            return redirect('admin/gallery')->with('success', 'Hapus data sukses');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('warning', 'Maaf data  tidak dapat dihapus');
        }
    }
}
