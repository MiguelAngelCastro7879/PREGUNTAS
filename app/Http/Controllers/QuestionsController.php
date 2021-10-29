<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    public function create(Request $request){
        $pregunta = Question::create([
            'pregunta'=>$request->pregunta,
            'respuesta_correcta'=>$request->respuesta_correcta
        ]);
        return response()->json([
            "pregunta"=>$pregunta
        ],201); 

    }
    public function readAll(){
        return User::all();
    }
    public function queryAnsiosa(){
        
    }
}
