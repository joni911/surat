<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tujuan extends Model
{
    protected $fillable = [
        'nama_tujuan'
    ];
    public function tujuan_detail()
    {
        return $this->hasMany('App\tujuan_detail');
    }
}
