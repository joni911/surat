<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bagikan_detail extends Model
{
    protected $fillable = [
        'bagikan_id',
        'user_id',
        'jabatan',
        'status',
        'author'
    ];

    public function bagikan()
    {
        return $this->belongsTo('App\bagikan');
    }
    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
