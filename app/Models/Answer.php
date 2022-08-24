<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'answer',
        'question_id',
        'user_id',
        'pathaudio',
      
    ];
    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}

