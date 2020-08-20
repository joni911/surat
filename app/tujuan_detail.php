<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tujuan_detail extends Model
{
    protected $fillable = [
        'tujuan_id', 'jabatan_tujuan'
    ];

    public function tujuan()
    {
        return $this->belongsTo('App\tujuan');
    }
}
