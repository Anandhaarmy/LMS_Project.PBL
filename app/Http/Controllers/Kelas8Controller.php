<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas8;

class Kelas8Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas8 = kelas8::paginate(5); 
        return view('kelas8.data-kelas8', compact('kelas8'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas8.create-kelas8');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kelas8::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
        ]);

        return redirect('data-kelas8')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas8 = kelas8::findorfail($id);
        return view('kelas8.edit-kelas8', compact('kelas8'));
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
        $kelas8 = kelas8::findorfail($id);
        $kelas8->update($request->all());
        return redirect('data-kelas8')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas8 = kelas8::findorfail($id);
        $kelas8->delete();
        return back()->with('success', 'Data Berhasil Terhapus!');
    }
}

