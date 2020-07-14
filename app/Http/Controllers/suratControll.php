<?php

namespace App\Http\Controllers;

use App\jabatan;
use Illuminate\Http\Request;
use App\surat;
use App\User;
use Illuminate\Support\Facades\Auth;

class suratControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Auth::user();
        //echo $data->jabatan->jabatan;
       $tampil['data'] = surat::where('user_id',$data->id)->paginate(10);
        return view('surat.index',$tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Auth::user();
       return view('surat.create',['data' => $data]);
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
            'no_surat' => 'required',
            'file' => 'required',
            'prihal' => 'required',
            'keterangan'=> 'required',
            'tanggal_masuk' => 'required'
            ]);
            //isi id_user dengan id user yang login
            $nama = Auth::user();

            //$nama_file =  Storage::disk('s3')->url($path);

            $file = $request->file('file');

            $nama_file = $request->no_surat."-".$request->prihal.".".$file->extension();

            $tujuan_upload = 'surat_storage';
            $file->move($tujuan_upload,$nama_file);
            surat::create([
                'user_id' => $nama->id,
                'no_surat' => $request->no_surat,
                'tanggal_surat' => $request->tanggal_masuk,
                'tujuan' => $request->tujuan,
                'prihal' => $request->prihal,
                'file' => $nama_file,
                'keterangan' => $request->keterangan,
            ]);
            return redirect()->route("surat.index")->with(
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
        $data = user::findOrFail($id);
        echo $data->name." Jabatan : ".$data->jabatan->jabatan;
       // return view('surat.edit',$data);
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
