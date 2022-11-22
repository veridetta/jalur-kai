<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Aset extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $fillable = [
        'lintas',
        'koridor',
        'antara',
        'resort',
        'no_lengkung',
        'km_ml',
            'km_al',
            'jalur',
            'jenis'
    ];
}
