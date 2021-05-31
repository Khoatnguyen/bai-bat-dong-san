<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileNews extends Model
{
    use HasFactory;
    protected $table ='file_news';
    protected $fillable =[
        'news_id',
        'name',
        'meta',
        'path',
        'type',
    ];
}
