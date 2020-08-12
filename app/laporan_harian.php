<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan_harian extends Model
{
    protected $fillable = [
        'user_id', 'tanggal_laporan'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
