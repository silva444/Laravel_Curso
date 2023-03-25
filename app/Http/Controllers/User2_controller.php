<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // usso para utilizar os request // ex:  Request $request

use App\Models\User; //  uso com parametro na função caso eu queira usar // ex  User $user
// usa o model para acessa o banco de dados , esse user vemo do banco de dados;

class User2_controller extends Controller
{
    public function index(){
        //$users = User::all(); // pega todos os usuarios;
        return view('users', [
            'name' => 'vinicus de souza', 
            

        ]);
    }
    public function show(){

       return view('user', [ // array 
        'name' => 'vinicus de souza' // vai se converte em variavel;
       ]);
    }
}
