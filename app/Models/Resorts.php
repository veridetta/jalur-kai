<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Resorts extends Model
{
    use HasFactory,HasApiTokens,Notifiable;
    protected $fillable = [
        'code_resorts',
            'name_resorts'
    ];
    public function petaks()
    {
        return $this->hasMany(Petaks::class);
    }
}
