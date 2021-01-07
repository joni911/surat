<?php

namespace App\Http\Controllers;

use App\jabatan;
use App\keluar;
use Illuminate\Http\Request;
use App\surat;
use App\surat_id;
use App\suratcode;
use App\tujuan;
use App\tujuan_detail;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
       $tampil['data'] = surat::where('user_id',$data->id)
       ->OrderBy('created_at','desc')
       ->paginate(10);
        $keluar['data'] = keluar::where('user_id',$data->id)
        ->OrderBy('created_at','desc')
       ->paginate(10);
        return view('surat.index',['data'=>$tampil['data'], 'keluar' =>$keluar['data']]);
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
       return view('surat.create',['data' => $data,'kode' =>$tampil['data'],'tujuan' =>$tujuan]);
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
            'tanggal_surat' => 'required',
            'asal_surat' =>'required',
            'nomor_asli_surat'=> 'required',
            'tanggal_terima_surat'=> 'required'
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
            //hope work
            // echo $serial->serial;
            $year_check = 2021;
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

            $tujuan_upload = 'surat_storage';
            $file->move($tujuan_upload,$nama_file);
            surat::create([
                'user_id' =>$nama->id,
                'no_surat' => str_pad($no_surat->serial,5,0,STR_PAD_LEFT).'/'.$no_surat->kode_id.'/'.$no_surat->bulan.'/'.$no_surat->tahun,
                'tanggal_surat' => $request->tanggal_surat,
                'tujuan' => $request->tujuan,
                'prihal' => $request->prihal,
                'file' => $nama_file,
                'keterangan' => $request->keterangan,
                'no_asal_surat' => $request->nomor_asli_surat,
                'asal_surat' => $request->asal_surat,
                'tanggal_terima_surat' => $request->tanggal_terima_surat
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
        $data = surat::findOrFail($id);
        $user = Auth::user();
        //echo $data->name." Jabatan : ".$data->jabatan->jabatan;


        $jabatan = jabatan::where('jabatan',$data->tujuan)->first();

        $no_wa = User::findorFail($jabatan->user_id);

         return view('surat.wa',$data,['user' => $user,'no_wa'=> $no_wa]);
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
        $kode = suratcode::get();
        $tampil = [];
        $tampil['data'] = $kode;
        $id = $user->jabatan->jabatan;
        $t = tujuan::where('nama_tujuan',$id)->first();
        $tujuan = tujuan_detail::where('tujuan_id',$t->id)->get();
        $x = [];
        $x['data'] = $tujuan;
       return view('surat.edit',$data,['user' => $user,'kode' =>$tampil['data'],'x' =>$x['data']]);
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
            'no_surat' => 'required',
            'prihal' => 'required',
            'keterangan'=> 'required',
            'tanggal_surat' => 'required',
            'asal_surat' =>'required',
            'nomor_asli_surat'=> 'required',
            'tanggal_terima_surat'=> 'required'
            ]);
            $data = surat::findOrFail($id);
            $serial = surat_id::latest('created_at')->first();
            //jika password tidak kosong
            $file = $request->file('file');
            if ($file == null) {
                $data->prihal = $request->prihal;
                $data->asal_surat = $request->asal_surat;
                $data->keterangan = $request->keterangan;
                $data->tanggal_surat = $request->tanggal_surat;
                $data->tujuan= $request->tujuan;
                $data->save();
            }else{
                $nama_file = $request->no_surat."-".$serial->serial."-".$request->tanggal_surat.".".$file->extension();
                $tujuan_upload = 'surat_storage';
                $file->move($tujuan_upload,$nama_file);
                $data->asal_surat = $request->asal_surat;
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
        $data = surat::findOrFail($id);
        $data->delete();
    }
}
