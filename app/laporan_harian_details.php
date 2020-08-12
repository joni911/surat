<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan_harian_details extends Model
{
    protected $fillable = [
        'laporan_harian_details_id','nama_kegiatan','jumlah_kegiatan','alokasi_waktu'
    ];

    public function laporan_harian()
    {
        return $this->belongsTo('App\laporan_harian');
    }

}
