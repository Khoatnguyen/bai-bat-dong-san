<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table='news';
    protected $fillable=[
        'title',
        'slug',
        'category_id',
        'description',
        'province_id',
        'district_id',
        'ward_id',
        'address',
        'project',
        'acreage',
        'price',
        'price_m2',
        'bedroom',
        'living_room',
        'number_room',
        'direction',
        'furniture',
        'frontispiece',
        'road',
        'type',
        'status',
    ];
}
