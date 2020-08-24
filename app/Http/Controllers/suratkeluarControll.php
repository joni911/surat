<?php

namespace App\Http\Controllers;

use App\suratcode;
use App\tujuan;
use App\tujuan_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class suratkeluarControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Auth::user();
        $kode = suratcode::get();
        $tampil = [];
        $tampil['data'] = $kode;
        $id = $data->jabatan->jabatan;
        $t = tujuan::where('nama_tujuan',$id)->first();
        $tujuan = tujuan_detail::where('tujuan_id',$t->id)->get();
       return view('keluar.create',['data' => $data,'kode' =>$tampil['data'],'tujuan' =>$tujuan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
