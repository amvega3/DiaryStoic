<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titulo',
        'subtitulo',
        'autor',
        'descripcion',
        'path_image'

    ];
    use HasFactory;
}
