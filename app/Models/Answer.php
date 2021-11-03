<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $answer="answer";
    public $timestamps=false;
    protected $fillable = [
        'forms_questions_id',
        'user_id',
        'respuesta'
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function preguntas()
    {
        return $this->belongsTo(Question::class);
    }
}
