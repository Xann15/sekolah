<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $contact = Contact::orderByRaw('created_at DESC')->paginate(1);
        return view('contact.index', compact('contact', 'profile_madrasah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile_madrasah = ProfileMadrasah::first();
        return view('contact.create', compact('profile_madrasah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->alamat   = $request->input('alamat');
        $contact->email   = $request->input('email');
        $contact->telpon   = $request->input('telpon');
        $contact->instagram   = $request->input('instagram');
        $contact->facebook   = $request->input('facebook');
        $contact->twitter   = $request->input('twitter');
        $contact->save();
        return redirect()->route('admin/contact.index')->with("success", "Data berhasil disimpan");
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
        $contact = Contact::find($id);
        return view('contact.edit', compact('contact', 'profile_madrasah'));
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
        $contact = Contact::findorfail($id);
        $contact->update($request->all());
        return redirect('admin/contact')->with('success', 'Edit data sukses');
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
