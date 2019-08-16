<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;
use App\Session;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('backend.pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = pembeli::all();
        return view('backend.pembeli.create', compact('pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new Pembeli();
        $pembeli->No_KTP = $request->No_KTP;
        $pembeli->Nama_pembeli = $request->Nama_pembeli;
        $pembeli->Alamat_pembeli = $request->Alamat_pembeli;
        $pembeli->Telepone = $request->Telepone;
        $pembeli->Pembeli_HP = $request->Pembeli_HP;
        $pembeli->save();
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
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
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->No_KTP = $request->No_KTP;
        $pembeli->Nama_pembeli = $request->Nama_pembeli;
        $pembeli->Alamat_pembeli = $request->Alamat_pembeli;
        $pembeli->Telepon = $request->Telepon;
        $pembeli->Pembeli_HP = $request->Pembeli_HP;
        $pembeli->save();
        return redirect()->route('pembeli.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index');
}
}