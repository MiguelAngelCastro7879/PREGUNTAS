<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Answer;
use App\Models\Form;


class UsersController extends Controller
{
    public function create(Request $request){
        $usuario = User::create([
            'name'=>$request->nombre,
            'email'=>$request->correo,
            'password'=>$request->password,
        ]);
        return response()->json([
            "usuario"=>$usuario
        ],201); 
    }
    public function readAll(){
        return User::all();
    }
    public function usuarioXform($id){
        $usuario = User::find($id);
        $form=$usuario->forms;
        return response()->json([
            "usuario"=>$usuario
        ],201); 
    }
    public function usuarioXrespuesta($id){
        $usuario = User::find($id);
        $usuario->respuestas;
        return response()->json([
            "usuario"=>$usuario
        ],201); 
    }
    public function respuestasUsuarios(){
        $usuarios = User::all();
        foreach($usuarios as $usuario){

            $usuario->respuestas;
        }
        return response()->json([
            "usuario"=>$usuarios
        ],201); 
    }
}
/*{
	"nombre":"Miguel Angel Castro","correo":"mamaikol@gmail.com","password":"123456789"
}
{"nombre":"Antonio Manuel","correo":"mayantony@gmail.com","password":"123456789"}
{"nombre":"Maiki angel","correo":"maiki@gmail.com","password":"123456789"}
{"nombre":"miguel angel","correo":"ma@gmail.com","password":"123456789"}
{"nombre":"Angel Miguel","correo":"angelote@gmail.com","password":"123456789"}
{"nombre":"Mikol Angelo","correo":"michaelo@gmail.com","password":"123456789"}*/