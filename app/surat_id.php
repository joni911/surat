<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_id extends Model
{
    protected $fillable= [
        'kode_id', 'bulan','tahun','serial'
    ];
}
