<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan_harian_totals extends Model
{
    protected $fillable = [
        'laporan_harian_details_id', 'total'
    ];
    public function laporan_harian()
    {
        return $this->belongsTo('App\laporan_harian');
    }
}
