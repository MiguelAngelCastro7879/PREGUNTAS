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
}
