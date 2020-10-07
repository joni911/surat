<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bagikan extends Model
{
    protected $fillable = [
        'surat_id',
        'tanggal_dikirim',
        'hari'
    ];

    public function surat()
    {
        return $this->belongsTo('App\surat');
    }
    public function bagikan_detail()
    {
        return $this->hasMany('App\bagikan_detail');
    }
}
