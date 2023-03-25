<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/users/{paramA}/{paramB}', function ($paramA,$paramB) {
//     return $paramA . '-' .$paramB ;
//     //return view('welcome');
// });
// se eu tiver variass links com o começo igual uso o prefixe para criar um prefixo

route::prefix('usuarios')->group(function () { // server para agrupar rotas que tenhha o prefixo igual;
    Route::get('/edit', function ($string= null) {
      return 'Edit';
    })->name('usuarios');
    Route::get('/{id}', function () {
      return 'Mostrar Detalhes do Usuarios';
    })->name('usuarios.show');
    Route::get('/{id}/tags', function () {
      return 'tags';
    })->name('usuarios.tags'); // com name posso dar nome as rotas

});

Route::get('/empresa/{string?}', function ($string= null) { // fica opcional o string com a ? // fica null como default
    return $string;
    //return view('welcome');
});


Route::get('/request', function (\Illuminate\Http\Request $request) { 
    // $r = $request->all(); // pega todos os campos que esta vindo nessa request / tanto da querry string e outros campos
    // $r = $request->querry(); // pega da querry string 
    // $r = $request->input('keyword'); // posso pegar um inpuunt // pega dessa url http://127.0.0.1:8000/request?keyword=abc
     // apenas o ABC
     // path passa o caminho do endereço dessa url;
     // url traz a url
     // fullurl também
     // has(keyword) // traz true ou false;
     // whenHas() // quando existir essa key word
     // whenfield() // quando o campo tiver preenchido , faça algo

    //  $r = $request->whenHas('keyword', function($input){
    //   dd('x',$input);
    //  });

    $r = $request->ip();
    $r = $request->query('keyword');
    
     return $r;
    
});


Route::get('/users/{user}', [\App\Http\Controllers\User2_controller::class, 'show'])->name('user.show'); // segundo parametro é mmetodo // 
Route::get('/users', [\App\Http\Controllers\User2_controller::class, 'index'])->name('user.index'); // segundo parametro é mmetodo // 
Route::get('/bunises', [\App\Http\Controllers\BunisesController::class, 'index']);
//posso dar qualquer nome;;

Route::get('/', function () { // fica opcional o string com a ? // fica null como default
  return view('welcome');
  //return view('welcome');
})-> name('home');

