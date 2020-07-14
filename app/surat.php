<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    protected $fillable = [
        'user_id', 'jabatan_id', 'no_surat','prihal','tujuan','keterangan','file','tanggal_surat'
    ];

    public function user()
    {
        return $this->belongsTo('App\user');
    }

    public function disposisi()
    {
        return $this->hasMany('App\disposisi');
    }

}
