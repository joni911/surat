<?php

namespace App\Http\Controllers;

use App\surat;
use Illuminate\Http\Request;

class cariControll extends Controller
{
    public function temukan(Request $request)
    {
        $search = $request->nama;
        $tipe = $request->tipe;

        $hasil = surat::where($tipe,'like','%'.$search.'%')
        ->orderBy('created_at','desc')
        ->paginate(999);
        switch ($tipe) {
           case "no_surat":
            $hasil->appends($request->only("no_surat"));
            break;
            case "asal_surat":
                $hasil->appends($request->only("asal_surat"));
                break;
            case "prihal":
                $hasil->appends($request->only("prihal"));
                break;
            case "tujuan":
                $hasil->appends($request->only("tujuan"));
                break;
            case "tanggal_surat":
                $hasil->appends($request->only("tanggal_surat"));
                break;
            case "tanggal_terima_surat":
                $hasil->appends($request->only("tanggal_terima_surat"));
                break;
            default:
            $hasil->appends($request->only($tipe));
                break;
        }
        // $hasil->appends($request->only("prihal"));

    $tampil['data'] = $hasil;

    return view("disposisi.index", $tampil);
    }
}
