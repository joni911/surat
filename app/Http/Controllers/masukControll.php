<?php

namespace App\Http\Controllers;

use App\disposisi;
use App\surat;
use App\tujuan;
use App\tujuan_detail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class masukControll extends Controller
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
        $tampil['data'] = surat::where('tujuan',$data->jabatan->jabatan)->paginate(10);
        return view('inbox.index',$tampil);
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

        $data = surat::findOrFail($id);
        $tampil =[];
        $tampil['data'] = Auth::user();
        $disposisi = [];
        $disposisi['data'] = disposisi::where('surat_id',$id)->get();
        $user = Auth::user();
        $id = $user->jabatan->jabatan;
        $t = tujuan::where('nama_tujuan',$id)->first();
        $tujuan = tujuan_detail::where('tujuan_id',$t->id)->get();
      // echo $tampil['data'];
        return view('inbox.edit',['surat' => $data,'tampil'=>$tampil['data'],'disposisi'=>$disposisi['data'],'tujuan'=>$tujuan]);
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
            'tujuan' => 'required',
            'kajian' => 'required'
            ]);
            $data = surat::findOrFail($id);
            $data->tujuan = $request->tujuan;
            //$data->hak_akses = $request->hak_akses;
            //jika password tidak kosong
            $data->save();
            $mytime = Carbon::now();
            $jam = $mytime->toTimeString();
            $tanggal =$mytime->toDateString();
            disposisi::create([
                'surat_id' => $data->id,
                'user' => $request->user,
                'tujuan' => $request->tujuan,
                'kajian' => $request->kajian,
                'tanggal_kajian' => $tanggal,
                'jam_kajian' => $jam
            ]);

            return redirect()->route("inbox.index")->with(
                "success",
                "Data berhasil dikirim ke ".$request->tujuan
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
        //
    }
}
