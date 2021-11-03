<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AnswersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/f/create',[FormsController::class, 'create']);
Route::post('/q/create',[QuestionsController::class, 'create']);
Route::post('/u/create',[UsersController::class, 'create']);
Route::post('/a/create',[AnswersController::class, 'create']);




// LOS FORMS QUE HA RESPONDIDO UN USUARIO
Route::get('/u/form/{id}',[UsersController::class, 'usuarioXform']);
// Las preguntas que pertenecen a un formulario
Route::get('/f/questions/{id}',[FormsController::class, 'formXpregunta']);
// los forms a los que opertenece una pregunta
Route::get('/p/forms/{id}',[QuestionsController::class, 'preguntasXformulario']);
// Las preguntas de un usuario con sus respuestas
Route::get('/u/answers/{id}',[UsersController::class, 'usuarioXrespuesta']);
// LMuestra solo respuestas correctas de un usuario
Route::get('/u/usuarios_respuestas',[UsersController::class, 'respuestasUsuarios']);
