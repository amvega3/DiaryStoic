<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titulo',
        'subtitulo',
        'autor_id',
        'descripcion',
        'path_image',
        'like',


    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User','autor_id');
    }
    public function likes(){
        return $this->belongsToMany('App\Models\Post','autor_id');
    }
}
