<?php

namespace App\Http\Controllers;

use App\jabatan;
use App\opsi_jabatan;
use App\tujuan;
use App\tujuan_detail;
use Illuminate\Http\Request;

class tujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tujuan::paginate(10);
        $tampil = [];
        $tampil['data'] = $data;
        return view('tujuan.index',$tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = opsi_jabatan::all();
        return view('tujuan.create',['jabatan' =>$data]);
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
            'jabatan' => 'required',

        ]);
        $dataUser = tujuan::create(
           [ 'nama_tujuan' => $request->jabatan]
        );
        return redirect()->route("tujuan.index")->with(
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
        $data = tujuan::findOrFail($id);
        $jabatan = opsi_jabatan::get();
        $tujuan_details = tujuan_detail::where('tujuan_id',$id)
        ->get();
        return view('tujuan.add',$data,['jabatan'=>$jabatan,'tujuan_detail'=>$tujuan_details]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = tujuan::findOrFail($id);
        $jabatan = opsi_jabatan::get();
        return view('tujuan.add',$data,['jabatan'=>$jabatan]);
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
        //
    }
}
