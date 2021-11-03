<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $form="form";
    public $timestamps=false;
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'forms_users');
    }
    public function preguntas()
    {
        return $this->belongsToMany(Question::class, 'forms_questions');
    }
    
    
}
