<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Busurs extends Model
{
    use HasFactory,HasApiTokens,Notifiable;
    protected $fillable = [
        'petaks_id',
        'no_busur',
        'km',
        'antara',
        'no_titik',
        'lp_km',
            'lp_hm',
            'jembatan',
            'lb_ukur',
            'lb_hitung'
    ];
    public function petaks()
    {
        return $this->belongsTo(Petaks::class);
    }
}
