<?php

namespace App\Http\Controllers;

use App\disposisi;
use App\jabatan;
use App\surat;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class disposisiControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = surat::OrderBy('created_at','desc')->paginate(10);

        $tampil['data'] = $data;
        return view('disposisi.index',$tampil);
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
        $data = disposisi::where('surat_id',$id)->paginate(10);
        $tampil['data'] = $data;
        $surat = surat::findorfail($id);
        return view('disposisi.list',$tampil,['surat' => $surat]);

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
        $user = Auth::user();
        //echo $data->name." Jabatan : ".$data->jabatan->jabatan;


        $jabatan = jabatan::where('jabatan',$data->tujuan)->first();

        $no_wa = User::findorFail($jabatan->user_id);

        $kajian = disposisi::where('surat_id',$id)->orderBy('created_at','desc')
        ->first();

         return view('disposisi.wa',$data,['user' => $user,'no_wa'=> $no_wa,'kajian'=>$kajian]);
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

            return redirect()->route("surat.index")->with(
                "success",
                "Data berhasil dikirim ke ".$request->tujuan
                );

            // Auth::logout();
            // return redirect()->route("login");

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
