<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PackageProduct;
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'photos',
        'package_id'
    ];

    public function package_product(){
        return $this->belongsTo(PackageProduct::class);
    }

}
