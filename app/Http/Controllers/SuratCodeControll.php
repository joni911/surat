<?php

namespace App\Http\Controllers;

use App\suratcode;
use Illuminate\Http\Request;

class SuratCodeControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = suratcode::paginate(10);
        $tampil = [];
        $tampil['data'] = $data;
        return view('suratcode.index',$tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suratcode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_surat' => 'required|max:4|unique:suratcodes',
            'keterangan' => 'required|max:32',
        ]);



        $dataUser = suratcode::create($request->all());
        return redirect()->route("suratcode.index")->with(
            "success",
            "Data berhasil disimpan."
        );
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
        $data = suratcode::findOrFail($id);
        return view('suratcode.edit',$data);
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
        $this->validate($request, [
            'kode_surat' => 'required|max:4|unique:suratcodes',
            'keterangan' => 'required|max:32',
            ]);
            $data = suratcode::findOrFail($id);
            $data->kode_surat = $request->kode_surat;
            $data->keterangan = $request->keterangan;
            //jika password tidak kosong
            $data->save();
            return redirect()->route("suratcode.index")->with(
            "success",
            "Data User berhasil diubah."
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = suratcode::findOrFail($id);
        $data->delete();
    }
}
