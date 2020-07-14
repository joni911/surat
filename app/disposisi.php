<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    protected $fillable = [
        'surat_id',
        'user',
        'tujuan',
        'kajian',
        'tanggal_kajian',
        'jam_kajian'
    ];

    public function surat()
    {
        return $this->belongsTo('App\surat');
    }
}
