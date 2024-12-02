<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use App\ProfileMadrasah;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    // Display a listing of the facilities
    public function index()
    {
        // Fetch all the fasilitas data from the database
        $fasilitas = Fasilitas::all();
        $profile_madrasah = ProfileMadrasah::first();
        // Return a view with the fasilitas data
        return view('fasilitas.index', compact('fasilitas', 'profile_madrasah'));
    }

    // Show the form for creating a new facility
    public function create()
    {
        $profile_madrasah = ProfileMadrasah::first();
        return view('fasilitas.create', compact('profile_madrasah'));
    }

    // Store a newly created facility in the database
    public function store(Request $request)
    {
        $fasilitas = new Fasilitas();
        $fasilitas->nama   = $request->input('nama');
        $image                   = $request->file('foto');
        $imageName   = 'FAS-' . $image->getClientOriginalName();
        $image->move('foto_fasilitas/', $imageName);
        $fasilitas->foto  = $imageName;
        $fasilitas->save();

        // Redirect to the list of fasilitas with a success message
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas created successfully!');
    }

    // Show the form for editing the specified facility
    public function edit($id)
    {
        // Find the fasilitas record by ID
        $fasilitas = Fasilitas::findOrFail($id);
        $profile_madrasah = ProfileMadrasah::first();
        // Return a view with the fasilitas data for editing
        return view('fasilitas.edit', compact('fasilitas', 'profile_madrasah'));
    }

    // Update the specified facility in the database
    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findorfail($id);
        $fasilitas->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_fasilitas/', 'FAS-' . $request->file('foto')->getClientOriginalName());
            $fasilitas->foto = 'FAS-' . $request->file('foto')->getClientOriginalName();
            $fasilitas->save();
        }
        // Redirect to the list of fasilitas with a success message
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas updated successfully!');
    }

    // Remove the specified facility from the database
    public function destroy($id)
    {
        // Find the fasilitas record by ID and delete it
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();

        // Redirect to the list of fasilitas with a success message
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas deleted successfully!');
    }
}
