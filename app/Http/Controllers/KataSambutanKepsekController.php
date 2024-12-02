<?php

namespace App\Http\Controllers;

use App\About;
use App\ProfileMadrasah;
use App\KataSambutanKepsek;
use Illuminate\Http\Request;

class KataSambutanKepsekController extends Controller
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
        $katasambutan_kepsek = KataSambutanKepsek::first();
        return view('katasambutankepsek.index', compact('katasambutan_kepsek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $katasambutan_kepsek = KataSambutanKepsek::first();
        return view('katasambutankepsek.create', compact('katasambutan_kepsek'));
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
        $katasambutan_kepsek = KataSambutanKepsek::find($id);
        return view('katasambutankepsek.edit', compact('katasambutan_kepsek', 'profile_madrasah'));
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
        $katasambutan_kepsek = KataSambutanKepsek::findorfail($id);
        $katasambutan_kepsek->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_sambutankepsek/', 'KSK-' . $request->file('foto')->getClientOriginalName());
            $katasambutan_kepsek->foto = 'KSK-' . $request->file('foto')->getClientOriginalName();
            $katasambutan_kepsek->save();
        }
        return redirect('admin/home')->with('success', 'Edit data sukses');
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
