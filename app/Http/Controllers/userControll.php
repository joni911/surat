<?php

namespace App\Http\Controllers;

use App\jabatan;
use App\opsi_jabatan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate(10);
        $tampil['data']=$data;
        return view('user.index',$tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = opsi_jabatan::all();
        return view('user.create',['jabatan' =>$data]);
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'no_wa'=> 'required|unique:users',
            'jabatan' => 'required',
        ]);

        //enkripsi password
        $enkripsi = Hash::make('admin');
        $request->merge(['password' => $enkripsi]);
        //isi hak_akses dengan 'petugas'

        $request->merge(['hak_akses' => $request->hak_akses]);
        $dataUser = User::create(
            $request->all()
        );
        $jabatan = User::where('email',$request->email)->first();
        $dataJabatan = jabatan::create([
            'user_id' => $jabatan->id,
            'jabatan' => $request->jabatan
        ]);
        return redirect()->route("user.index")->with(
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
        $data = User::findOrFail($id);
        $jabatan = opsi_jabatan::all();
        return view('user.edit', $data,['jabatan' => $jabatan]);
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
            'name' => 'required',
            'email' => 'required|email',
            'no_wa'=> 'required',
            ]);
            $data = User::findOrFail($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->hak_akses = $request->hak_akses;
            $data->no_wa = $request->no_wa;
            //jika password tidak kosong
            $data->save();

            $jabatan = jabatan::where('user_id',$id)->first();
            $jabatan->jabatan = $request->jabatan;
            $jabatan->save();
            return redirect()->route("user.index")->with(
            "success",
            "Data User berhasil diubah."
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
        $data = User::findOrFail($id);
        $data->delete();
    }
}
