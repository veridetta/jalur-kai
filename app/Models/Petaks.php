<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Petaks extends Model
{
    use HasFactory,HasApiTokens,Notifiable;
    protected $fillable = [
        'resorts_id',
        'desc',
        'image',
    ];
    public function resorts()
    {
        return $this->belongsTo(Resorts::class);
    }
    public function busurs()
    {
        return $this->hasMany(Busurs::class);
    }
    public function panahs()
    {
        return $this->hasMany(Panahs::class);
    }
    public function spoors()
    {
        return $this->hasMany(Spoors::class);
    }
    
}
