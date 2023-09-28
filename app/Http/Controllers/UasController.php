<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uas;
use RealRashid\SweetAlert\Facades\Alert;

class UasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Uas = Uas::all();
        return view('Npm21312064.index', compact('Uas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Npm21312064.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Uas = new Uas;

        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $Uas->npm = $request->npm;
        $Uas->nama = $request->nama;
        $Uas->alamat = $request->alamat;

        $simpan = $Uas->save();
        if ($simpan) {
            Alert::success('Success', 'Data Berhasil ditambah');
            return redirect('/Npm21312064');
        } else {
            Alert::error('Failed', 'Gagal menambahkan data');
        }
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
        $Uas = Uas::where('id', $id)->first();
        return view('Npm21312064.edit', compact('Uas'));
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
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);



        $Uas = Uas::find($id);

        $Uas->npm = $request->npm;
        $Uas->nama = $request->nama;
        $Uas->alamat = $request->alamat;

        $ubah = $Uas->save();

        if ($ubah) {
            Alert::success('Success', 'Data berhasil diubah');
            return redirect('/Npm21312064');
        } else {
            Alert::error('Failed', 'Gagal Mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Uas = Uas::find($id);
        $remove = $Uas->delete();
        if ($remove) {
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/Npm21312064');
        } else {
            Alert::error('Failed', 'Gagal Menghapus data');
        }
    }
}
