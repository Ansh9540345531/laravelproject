<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotelier;


class HotelGallery extends Model
{
    use HasFactory;

    protected $fillable=[
        'hotel_home_section_id',
        'image',
    ];

    public function hoteliers(){
        return $this->belongsTo(Hotelier::class);
    }
}
