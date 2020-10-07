<?php

namespace App\Http\Controllers;

use App\bagikan;
use App\bagikan_detail;
use App\disposisi;
use App\jabatan;
use App\surat;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bagikansuratContrlller extends Controller
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
        $id = surat::findorfail($id);
        $user = User::get();
        $find = bagikan::where('surat_id',$id->id)->first();

        Carbon::setLocale('id');
        $mytime = Carbon::now();
        $tanggal =$mytime->toDateString();
        $hari = $mytime->isoFormat('dddd');

        if ($find == null) {
            bagikan::create([
                'surat_id' => $id->id,
                'tanggal_dikirim' => $tanggal,
                'hari' => $hari
            ]);
            $find = bagikan::where('surat_id',$id)->first();
            return view('bagikan.edit',['data' => $id,'user' => $user,'bagikan' => $find]);
        }
        // echo $find->bagikan_detail;
        return view('bagikan.edit',['data' => $id,'user' => $user,'bagikan' => $find]);
    }

    public function tambah($id,$user)
    {
        echo $id .','.$user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bd = bagikan_detail::findorfail($id);
        $surat_id = $bd->bagikan->surat->id;
        $data = $bd->bagikan->surat;;
        $user = Auth::user();
        // //echo $data->name." Jabatan : ".$data->jabatan->jabatan;
        // $jabatan = jabatan::where('jabatan',$data->tujuan)->first();
        $jabatan = $bd->user->jabatan->jabatan;
        $no_wa = $bd->user->no_wa;
        if ($jabatan == null || $no_wa == null) {
            echo 'no kosong hubungi it';
        } else {


            $kajian = disposisi::where('surat_id',$surat_id)->orderBy('created_at','desc')
            ->first();

            return view('bagikan.wa',$data,['user' => $user,'no_wa'=> $no_wa,'kajian'=>$kajian]);
        }
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


        $auth = Auth::user();
        $user = User::findorfail($request->user_id);
        $surat = surat::findorfail($id);

        $find = bagikan::where('surat_id',$id)->first();

        Carbon::setLocale('id');
        $mytime = Carbon::now();
        $tanggal =$mytime->toDateString();
        $hari = $mytime->isoFormat('dddd');


        if ($find == null) {
            bagikan::create([
                'surat_id' => $id,
                'tanggal_dikirim' => $tanggal,
                'hari' => $hari
            ]);
            $find = bagikan::where('surat_id',$id)->first();
        }

        bagikan_detail::create([
            'bagikan_id' => $find->id,
            'user_id' => $user->id,
            'jabatan' => $user->jabatan->jabatan,
            'status'=> 'belum dibuka',
            'author' => $auth->id
        ]);

        $id = surat::findorfail($id);
        $user = User::get();
        return view('bagikan.edit',['data' => $id,'user' => $user,'bagikan' => $find]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = bagikan_detail::findOrFail($id);
        $data->delete();
    }
}
