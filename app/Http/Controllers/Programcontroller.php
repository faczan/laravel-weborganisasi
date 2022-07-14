<?php

namespace App\Http\Controllers;

use App\Models\program;
use Illuminate\Http\Request;

class Programcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $program = program::all();
        //return $program;
        return view('admin_layout/program', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new program;
        return view('program.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return request();
        $program = new program;
        $program->id_program_kerja = $request->id_program_kerja;
        $program->NPM = $request->NPM;
        $program->Nama = $request->Nama;
        $program->Nama_Organisasi = $request->Nama_Organisasi;
        $program->Nama_program_kerja = $request->Nama_program_kerja;
        $program->Tanggal_program_kerja = $request->Tanggal_program_kerja;
        $program->save();

        return redirect('program')->with('success', "Data berhasil disimpan");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = program::find($id);
        $model->delete();


        return redirect('program');
    }
}
