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
    public function preguntasXformulario($id){
        $pregunta = Question::find($id);
        $pregunta->forms;
        return response()->json([
            "pregunta"=>$pregunta
        ],201); 
    }
}
/*{"pregunta":"¿Voy a reprobar?","respuesta_correcta":"probablemente"}
{"pregunta":"cual es el poder de batman","respuesta_correcta":"ninguno"}
{"pregunta":"cuantos dedos tienen los humanos","respuesta_correcta":"20"}
{"pregunta":"cual es la bebida de los dioses","respuesta_correcta":"las cheves bien frias"}
{"pregunta":"cual es la mejor agua dde sabor","respuesta_correcta":"la horchata"}
{"pregunta":"cuando nacio diosito","respuesta_correcta":"cuando su mama lo tuvo"}
{"pregunta":"quien es john wick","respuesta_correcta":"diosito"}
{"pregunta":"cual es la comida mas rica del mundo","respuesta_correcta":"los tamales"}
{"pregunta":"cuantos alumnos se necesitan para pasar el cuatri","respuesta_correcta":"todos"}
{"pregunta":"Cual es el color del cielo","respuesta_correcta":"azulito"}*/
