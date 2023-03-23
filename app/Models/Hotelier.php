<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\HotelGallery;

class Hotelier extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'password',
        'photo',
        'token',
    ];

    public function images(){
        return $this->hasMany(HotelGallery::class);
    }
}
