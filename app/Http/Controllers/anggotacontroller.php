<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;

class anggotacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = anggota::all();
        return view('anggota.anggota', compact(
            'anggota'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('anggota.create');
        $model = new anggota;
        return view('anggota.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new anggota;
        $model->NPM = $request->NPM;
        $model->NAMA = $request->NAMA;
        $model->Alamat = $request->Alamat;
        $model->Tempat_lahir = $request->Tempat_lahir;
        $model->Tanggal_Lahir = $request->Tanggal_Lahir;
        $model->NAMA_Organisasi = $request->NAMA_Organisasi;;
        //kita akan membuat code untuk upload file
        //if ($request->file('foto_profile')) {
        //$file = $request->file('foto_profile');
        //$nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
        // $file->move('foto', $nama_file);
        //$model->foto_profile = $nama_file;
        //}
        $model->save();

        return redirect('anggota')->with('success', "Data berhasil disimpan");
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
        $model = anggota::find($id);
        return view('anggota.create', compact(
            'model'
        ));
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
        $model = anggota::find($id);
        $model->NPM = $request->NPM;
        $model->NAMA = $request->NAMA;
        $model->Alamat = $request->Alamat;
        $model->Tempat_lahir = $request->Tempat_lahir;
        $model->Tanggal_Lahir = $request->Tanggal_Lahir;
        $model->NAMA_Organisasi = $request->NAMA_Organisasi;

        $model->save();
        return redirect('anggota')->with('success', "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = anggota::find($id);
        $model->DELETE();


        return redirect('anggota');
    }
}
