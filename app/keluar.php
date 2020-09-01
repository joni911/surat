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
<<<<<<< HEAD
        'tujuan','keterangan','file','tanggal_surat',
=======
        'tujuan','keterangan','file'
>>>>>>> 74c0199436b5c1fba05c2af5fa8fa2f292ab2547
    ];
    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
