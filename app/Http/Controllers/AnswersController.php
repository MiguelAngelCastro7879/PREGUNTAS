<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswersController extends Controller
{
    
    public function create(Request $request){
        $respuesta = Answer::create([
            'forms_user_id'=>$request->user_form,
            'question_id'=>$request->pregunta,
            'respuesta'=>$request->respuesta,
        ]);
        return response()->json([
            "respuesta"=>$respuesta
        ],201); 
    }
    public function readAll(){
        return Answer::all();
    }
    public function queryAnsiosa(){
        
    }
}
