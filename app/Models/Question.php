<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $question='question';
    public $timestamps=false;
    protected $fillable = [
        'pregunta',
        'respuesta_correcta',
    ];
}
