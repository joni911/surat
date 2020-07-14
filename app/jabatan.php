<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $fillable = [
        'user_id', 'jabatan'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
    public function surat()
    {
        return $this->belongsToMany('App\surat');
    }
}
