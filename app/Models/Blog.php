<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'post_name',
        'date',
        'description',
        'category',
        'video_link',
        'post_image',
    ];
}
