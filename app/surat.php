<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class surat extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
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
