<?php

namespace App\Http\Controllers;

use App\disposisi;
use App\surat;
use App\tujuan;
use App\tujuan_detail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryDisposisiControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = disposisi::where('user',$user->name)
        ->orderBy('id','desc')
        ->paginate(10);
        $tampil = [];
        $tampil['data'] = $data;
        return view('history.index',$tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = disposisi::findorfail($id);
        $surat = surat::where('id',$data->surat_id)->first();
        $user = Auth::user();
        $disposisi = disposisi::where('surat_id',$surat->id)->get();
        $t = tujuan::where('nama_tujuan',$user->jabatan->jabatan)->first();
        $tujuan = tujuan_detail::where('tujuan_id',$t->id)->get();
        // echo $surat;
        return view('history.edit',$data,
        ['surat' => $surat,'user' => $user,'list' => $tujuan
        ,'komentar' => $disposisi
        ]);
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
        //change the id its different the id is for disposisi
        $this->validate($request, [
            'tujuan' => 'required',
            'kajian' => 'required'
            ]);
            $user = Auth::user();
            $update = disposisi::findOrFail($id);
            $data = surat::findOrFail($update->surat_id);
            $data->tujuan = $request->tujuan;
            //$data->hak_akses = $request->hak_akses;
            //jika password tidak kosong
            $data->save();
            $mytime = Carbon::now();
            $jam = $mytime->toTimeString();
            $tanggal =$mytime->toDateString();
            echo $data->no_surat;
            $file = $request->file('file_disposisi');
                if ($file !=null) {
                    $user = Auth::user();
                    $nama_file = 'Disposisi-'.$user->name.'-'
                    .$tanggal.'.'.$file->extension();
                    $tujuan_upload = 'disposisi_storage';
                    $file->move($tujuan_upload,$nama_file);
                }else{
                    $nama_file = '404';
                }
                $tujuan = $request->tujuan;
            $update->tujuan = $tujuan;
            $update->kajian =$request->kajian;
            $update->user = $user->name;
            $update->kajian = $request->kajian;
            $update->tanggal_kajian = $tanggal;
            $update->jam_kajian = $jam;
            $update->disposisi = $request->disposisi;
            $update->file_disposisi = $nama_file;
            $update->save();
            if ($tujuan != "ARSIP") {
                return redirect()->route("disposisi.edit",$data->id)->with(
                    "success",
                    "Data berhasil dikirim ke ".$request->tujuan
                    );
            } else {
                return redirect()->route("inbox.index")->with(
                    "success",
                    "Data berhasil dikirim ke ".$request->tujuan
                    );
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
        //
    }
}
