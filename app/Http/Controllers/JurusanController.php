<?php

namespace App\Http\Controllers;

use App\Jurusan;  // Ensure you are using the jurusan model
use App\ProfileMadrasah;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    // Display a listing of the facilities
    public function index()
    {
        // Fetch all the jurusan data from the database
        $jurusan = Jurusan::all();
        $profile_madrasah = ProfileMadrasah::first();
        // Return a view with the jurusan data
        return view('jurusan.index', compact('jurusan', 'profile_madrasah'));
    }

    // Show the form for creating a new facility
    public function create()
    {
        $profile_madrasah = ProfileMadrasah::first();

        return view('jurusan.create', compact('profile_madrasah'));
    }

    // Store a newly created facility in the database
    public function store(Request $request)
    {

        $jurusan = new Jurusan();
        $jurusan->nama   = $request->input('nama');
        $jurusan->singkatan   = $request->input('singkatan');
        $jurusan->deskripsi   = $request->input('deskripsi');

        $foto1                   = $request->file('foto1');
        $foto1Name   = 'FT-' . $foto1->getClientOriginalName();
        $foto1->move('foto_jurusan/', $foto1Name);
        $jurusan->foto1  = $foto1Name;

        $foto2                   = $request->file('foto2');
        $foto2Name   = 'FT-' . $foto2->getClientOriginalName();
        $foto2->move('foto_jurusan/', $foto2Name);
        $jurusan->foto2  = $foto2Name;

        $foto3                   = $request->file('foto3');
        $foto3Name   = 'FT-' . $foto3->getClientOriginalName();
        $foto3->move('foto_jurusan/', $foto3Name);
        $jurusan->foto3  = $foto3Name;

        $jurusan->save();

        // Redirect to the list of jurusan with a success message
        return redirect()->route('program-studi-dan-jurusan.index')->with('success', 'Data created successfully!');
    }

    // Show the form for editing the specified facility
    public function edit($id)
    {
        // Find the jurusan record by ID
        $jurusan = Jurusan::findOrFail($id);
        $profile_madrasah = ProfileMadrasah::first();

        // Return a view with the jurusan data for editing
        return view('jurusan.edit', compact('jurusan', 'profile_madrasah'));
    }

    // Update the specified facility in the database
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findorfail($id);
        $jurusan->update($request->all());

        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('foto_jurusan/', 'FT-' . $request->file('foto1')->getClientOriginalName());
            $jurusan->foto1 = 'FT-' . $request->file('foto1')->getClientOriginalName();
            $jurusan->save();
        }
        if ($request->hasFile('foto2')) {
            $request->file('foto2')->move('foto_jurusan/', 'FT-' . $request->file('foto2')->getClientOriginalName());
            $jurusan->foto2 = 'FT-' . $request->file('foto2')->getClientOriginalName();
            $jurusan->save();
        }
        if ($request->hasFile('foto3')) {
            $request->file('foto3')->move('foto_jurusan/', 'FT-' . $request->file('foto3')->getClientOriginalName());
            $jurusan->foto3 = 'FT-' . $request->file('foto3')->getClientOriginalName();
            $jurusan->save();
        }

        // Redirect to the list of jurusan with a success message
        return redirect()->route('program-studi-dan-jurusan.index')->with('success', 'Data updated successfully!');
    }

    // Remove the specified facility from the database
    public function destroy($id)
    {
        // Find the jurusan record by ID and delete it
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        // Redirect to the list of jurusan with a success message
        return redirect()->route('program-studi-dan-jurusan.index')->with('success', 'Data deleted successfully!');
    }
}
