<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $table ='user_info';
    protected $fillable =[
        'user_id',
        'full_name',
        'gender',
        'avatar',
        'phone',
        'identification',
        'address',
        'province_id',
        'district_id',
        'ward_id',
    ];
}
