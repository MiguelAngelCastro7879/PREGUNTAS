<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormsController extends Controller
{
    public function create(Request $request){
        $formulario = Form::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
        ]);
        return response()->json([
            "formulario"=>$formulario
        ],201); 

    }
    public function readAll(){
        return Forms::all();
    }
    public function formXpregunta($id){
        $formulario = Form::find($id);
        $preguntas=$formulario->preguntas;
        return response()->json([
            "formulario"=>$formulario
        ],201); 
    }
}
