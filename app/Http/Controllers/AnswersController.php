<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswersController extends Controller
{
    
    public function create(Request $request){
        $respuesta = Answer::create([
            'forms_questions_id'=>$request->forms_questions,
            'user_id'=>$request->usuario,
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
