<?php

namespace App\Http\Controllers;

use App\jabatan;
use Illuminate\Http\Request;
use App\surat;
use App\surat_id;
use App\suratcode;
use App\User;
use Carbon\Carbon;
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
        $kode = suratcode::get();
        $tampil = [];
        $tampil['data'] = $kode;
       return view('surat.create',['data' => $data,'kode' =>$tampil['data']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //fix number 0001/b01/vii/tahun
        //tanggal surat manual
        //nomor surat asli / masuk req
        //tgl surat req
        //tambah alur
        $this->validate($request, [
            'no_surat' => 'required',
            'file' => 'required',
            'prihal' => 'required',
            'keterangan'=> 'required',
            'tanggal_masuk' => 'required'
            ]);
            //isi id_user dengan id user yang login
            $nama = Auth::user();

            // auto generate number
            $mytime = Carbon::now();
            $month = $mytime->month;
            $year =$mytime->year;

            $serial = surat_id::where('kode_id',$request->no_surat)
            ->orderBy('created_at','desc')
            ->first()
            ;
            // echo $serial->serial;
            $year_check = 2020;
            ;
            if ($year!=$year_check) {
                surat_id::create([
                    'kode_id' => $request->no_surat,
                    'serial' => 1,
                    'bulan' => $month,
                    'tahun' => $year
                ]);
                $no_surat =surat_id::latest('created_at')->first();
                echo "Start a new year : ";
                echo $no_surat->kode_id.'/'.str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->bulan.'/'.$no_surat->tahun;
            } else {
                if ($serial!=null) {
                    $new_serial = $serial->serial;
                    $new_serial++;
                    surat_id::create([
                        'kode_id' => $request->no_surat,
                        'serial' => $new_serial,
                        'bulan' => $month,
                        'tahun' => $year

                    ]);
                    $no_surat =surat_id::latest('created_at')->first();
                    echo "continue ";
                    echo $no_surat->kode_id.'/'.str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->bulan.'/'.$no_surat->tahun;
                } else {
                    surat_id::create([
                        'kode_id' => $request->no_surat,
                        'serial' => 1,
                        'bulan' => $month,
                        'tahun' => $year
                    ]);
                    $no_surat =surat_id::latest('created_at')->first();
                    echo "Start a new : ";
                    echo $no_surat->kode_id.'/'.str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->bulan.'/'.$no_surat->tahun;
                }
            }

            //$nama_file =  Storage::disk('s3')->url($path);

            $file = $request->file('file');

            $nama_file = $request->no_surat."-".$request->prihal.".".$file->extension();

            $tujuan_upload = 'surat_storage';
            $file->move($tujuan_upload,$nama_file);
            surat::create([
                'user_id' =>$nama->id,
                'no_surat' => $no_surat->kode_id.'/'.str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->bulan.'/'.$no_surat->tahun,
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
        $data = surat::findOrFail($id);
        $user = Auth::user();
        //echo $data->name." Jabatan : ".$data->jabatan->jabatan;


       return view('surat.edit',$data,['user' => $user]);
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
                'prihal' => 'required',
                'keterangan'=> 'required',
                'tanggal_masuk' => 'required'
            ]);
            $data = surat::findOrFail($id);
            //jika password tidak kosong
            $file = $request->file('file');
            if ($file == null) {
                $data->prihal = $request->prihal;
                $data->keterangan = $request->keterangan;
                $data->tanggal_surat = $request->tanggal_masuk;

                $data->save();
            }else{
                $nama_file = $request->no_surat."-".$request->prihal.".".$file->extension();
                $tujuan_upload = 'surat_storage';
                $file->move($tujuan_upload,$nama_file);
                $data->prihal = $request->prihal;
                $data->keterangan = $request->keterangan;
                $data->tanggal_surat = $request->tanggal_masuk;

                $data->file = $nama_file;
                $data->save();
            }

            return redirect()->route("surat.index")->with(
            "success",
            "Data berhasil disimpan."
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
        $data = surat::findOrFail($id);
        $data->delete();
    }
}
