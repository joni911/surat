<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class keluar extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id', 'no_surat','prihal',
        'tujuan','keterangan','file','tanggal_surat'
    ];
    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
