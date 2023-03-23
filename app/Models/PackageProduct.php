<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class PackageProduct extends Model
{
    use HasFactory;
    protected $table = "package_products";

    protected $fillable = [
        'package_name',
        'sort_description',
        'description',
        'highlight',
        'image',
        'photos',
        'package_destination',
        'package_day',
        'package_no_of_person',
        'category_id',
        'package_amenitie',
        'near_by_location',
        'package_price',
        'selling_price',
        'customize_day_price',
        'customize_person_price',
        'address1',
        'address2',
        'city',
        'country',
        'state',
        'zip',
        'status'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
