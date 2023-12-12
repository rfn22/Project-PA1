<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Angkatan;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::all();
        return view('pages.admin.alumni.main', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $angkatan=Angkatan::all();
        return view('pages.admin.alumni.input',['alumni'=> new Alumni,'angkatan'=>$angkatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'angkatan_id' => 'required|max:8000',
            'nama' => 'required',
            'email' => 'required',
            'prodi' => 'required',
            'no_hp' => 'required|max:16',
            'gambar' => 'required|mimes:jpeg,png,jpg|'
        ]);

        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/gambar';

        $file->move($tujuanFile,$namafile);

        $alumni = new Alumni;
        $alumni->angkatan_id = $request->angkatan_id;
        $alumni->name = $request->nama;
        $alumni->email = $request->email;
        $alumni->prodi = $request->prodi;
        $alumni->no_hp = $request->no_hp;
        $alumni->gambar = $namafile;

        $alumni->save();
        return redirect('alumni')->with('status', 'Data Alumni berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumnus)
    {
        
        $angkatan=Angkatan::all();
        return view('pages.admin.alumni.input',['alumni'=>$alumnus,'angkatan'=>$angkatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        $request->validate([
            'angkatan_id' => 'required|max:8000',
            'nama' => 'required',
            'email' => 'required',
            'prodi' => 'required',
            'no_hp' => 'required|max:16',
            'gambar' => 'required|mimes:jpeg,png,jpg|'
        ]);

        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/gambar';

        $file->move($tujuanFile,$namafile);


        $alumni->angkatan_id = $request->angkatan_id;
        $alumni->name = $request->nama;
        $alumni->email = $request->email;
        $alumni->prodi = $request->prodi;
        $alumni->no_hp = $request->no_hp;
        $alumni->gambar = $namafile;

        $alumni->update();
        return redirect('alumni')->with('status', 'Data Alumni berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumnus)
    {
        $alumnus->delete();
        return redirect('alumni')->with('status', 'Data Alumni berhasil dihapus');
    }
}
