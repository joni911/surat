<?php

namespace App\Http\Controllers;

use App\jabatan;
use App\keluar;
use App\surat_id;
use App\suratcode;
use App\tujuan;
use App\tujuan_detail;
use App\User;
use Carbon\Carbon;
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

       return view('keluar.create',['data' => $data,'kode' =>$tampil['data']]);
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
            'tanggal_surat' => 'required'
            ]);
            //isi id_user dengan id user yang login

            $nama = Auth::user();

            // auto generate number
            $mytime = Carbon::now();
            $month = $mytime->month;
            $year =$mytime->year;

            $serial = surat_id::orderBy('created_at','desc')
            ->first()
            ;
            // echo $serial->serial;
            $year_check = 2020;
            echo $serial;
            if ($year!=$year_check) {
                surat_id::create([
                    'kode_id' => $request->no_surat,
                    'serial' => 1,
                    'bulan' => $month,
                    'tahun' => $year
                ]);
                $no_surat =surat_id::latest('created_at')->first();
                echo "Start a new year : ";
                echo str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->kode_id.'/'.$no_surat->bulan.'/'.$no_surat->tahun;
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
                    echo str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->kode_id.'/'.$no_surat->bulan.'/'.$no_surat->tahun;
                } else {
                    surat_id::create([
                        'kode_id' => $request->no_surat,
                        'serial' => 1,
                        'bulan' => $month,
                        'tahun' => $year
                    ]);
                    $no_surat =surat_id::latest('created_at')->first();
                    echo "Start a new : ";
                    echo str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->kode_id.'/'.$no_surat->bulan.'/'.$no_surat->tahun;
                }
            }


            // $nama_file =  Storage::disk('s3')->url($path);

            $file = $request->file('file');

            $nama_file = $request->no_surat."-".$new_serial.".".$file->extension();

            $tujuan_upload = 'surat_keluar_storage';
            $file->move($tujuan_upload,$nama_file);
           keluar::create([
                'user_id' =>$nama->id,
                'no_surat' => str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->kode_id.'/'.$no_surat->bulan.'/'.$no_surat->tahun,
                'tujuan' => $request->tujuan,
                'prihal' => $request->prihal,
                'file' => $nama_file,
                'keterangan' => $request->keterangan,
                'tanggal_surat' => $request->tanggal_surat
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
        $data = keluar::findOrFail($id);
        $user = Auth::user();
        //echo $data->name." Jabatan : ".$data->jabatan->jabatan;




         return view('keluar.wa',$data,['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =keluar::findOrFail($id);
        $tampil =[];
        $tampil['data'] = Auth::user();
        $kode = suratcode::get();
        return view('keluar.edit',$data,['kode' =>$kode]);
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
            'prihal' => 'required',
            'keterangan'=> 'required',
            'tanggal_surat' => 'required'
            ]);
            $data = keluar::findOrFail($id);
            $nama_file = $data->file;
            //jika password tidak kosong
            $file = $request->file('file');
            if ($file == null) {
                $data->prihal = $request->prihal;
                $data->keterangan = $request->keterangan;
                $data->tanggal_surat = $request->tanggal_surat;
                $data->tujuan= $request->tujuan;
                $data->save();
            }else{

                $tujuan_upload = 'surat_keluar_storage';
                $file->move($tujuan_upload,$nama_file);
                $data->prihal = $request->prihal;
                $data->tujuan= $request->tujuan;
                $data->keterangan = $request->keterangan;
                $data->tanggal_surat = $request->tanggal_surat;

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
        //
    }
}
