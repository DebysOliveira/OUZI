<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'image_url',
        'title',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
