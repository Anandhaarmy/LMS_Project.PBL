<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas7;

class Kelas7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas7 = kelas7::paginate(5); 
        return view('kelas7.data-kelas7', compact('kelas7'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas7.create-kelas7');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kelas7::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
        ]);

        return redirect('data-kelas7')->with('success', 'Data Berhasil Tersimpan!');
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
        $kelas7 = kelas7::findorfail($id);
        return view('kelas7.edit-kelas7', compact('kelas7'));
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
        $kelas7 = kelas7::findorfail($id);
        $kelas7->update($request->all());
        return redirect('data-kelas7')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas7 = kelas7::findorfail($id);
        $kelas7->delete();
        return back()->with('success', 'Data Berhasil Terhapus!');
    }
}

