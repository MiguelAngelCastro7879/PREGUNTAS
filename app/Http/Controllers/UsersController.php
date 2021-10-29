<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    public function queryAnsiosa(){
        
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