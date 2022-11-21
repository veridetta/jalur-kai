<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Panahs extends Model
{
    use HasFactory,HasApiTokens,Notifiable;
    protected $fillable = [
        'petaks_id',
        'hasil',
        'geser',
        'hasil_baru'
    ];
    public function petaks()
    {
        return $this->belongsTo(Petaks::class);
    }
}
