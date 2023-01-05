<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafile = Upload::latest()->get();
        return view('Upload.data-file', compact('datafile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Upload.create-file');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->file;
        $namaFile = $request->file('file')->getClientOriginalName();

            $dtFile = new Upload;
            $dtFile->nama = $request->nama;
            $dtFile->file = $namaFile;

            $nm->move(public_path(). '/file', $namaFile);
            $dtFile->save();

            return redirect('data-file');
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
        $datafile = upload::findorfail($id);
        return view('Upload.edit-file', compact('datafile'));
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
        $datafile = upload::findorfail($id);
        $datafile->update($request->all());
        return redirect('data-file')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datafile = upload::findorfail($id);
        $datafile->delete();
        return back()->with('success', 'Data Berhasil Terhapus!');
    }
}

