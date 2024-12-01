<?php

namespace App\Http\Controllers;

use App\Fasilitas;  // Ensure you are using the Fasilitas model
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    // Display a listing of the facilities
    public function index()
    {
        // Fetch all the fasilitas data from the database
        $fasilitas = Fasilitas::all();

        // Return a view with the fasilitas data
        return view('fasilitas.index', compact('fasilitas'));
    }

    // Show the form for creating a new facility
    public function create()
    {
        return view('fasilitas.create');
    }

    // Store a newly created facility in the database
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nama' => 'required|max:45',
            'foto' => 'required|string|max:255',
        ]);

        // Create a new facility record in the database
        Fasilitas::create([
            'nama' => $request->nama,
            'foto' => $request->foto,
        ]);

        // Redirect to the list of fasilitas with a success message
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas created successfully!');
    }

    // Show the form for editing the specified facility
    public function edit($id)
    {
        // Find the fasilitas record by ID
        $fasilitas = Fasilitas::findOrFail($id);

        // Return a view with the fasilitas data for editing
        return view('fasilitas.edit', compact('fasilitas'));
    }

    // Update the specified facility in the database
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'nama' => 'required|max:45',
            'foto' => 'required|string|max:255',
        ]);

        // Find the fasilitas record by ID
        $fasilitas = Fasilitas::findOrFail($id);

        // Update the fasilitas record with the new data
        $fasilitas->update([
            'nama' => $request->nama,
            'foto' => $request->foto,
        ]);

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
