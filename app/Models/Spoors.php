<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Sanctum\HasApiTokens;

class Spoors extends Model
{
    use HasFactory,HasApiTokens,Notifiable;
    protected $fillable = [
        'petaks_id',
        't_lama',
        't_baru',
        'l_lama',
        'l_baru'
    ];
    public function petaks()
    {
        return $this->belongsTo(Petaks::class);
    }
}
