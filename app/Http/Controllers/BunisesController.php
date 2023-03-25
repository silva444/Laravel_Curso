<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bunises;
class BunisesController extends Controller
{
    public function index(){
        // $bunise= bunises::all();  // pego todos os registros do banco de dados;
        // dd($bunise); // 
        // $bunise= bunises::find(1); // pega apneas um resgistro de id 1 ;
        // dd($bunise);

        // tem também o where('nama', 'vincus')->get(); tragao nome quanod fr igual a vnicsu
        // -> first // o primeiro que ele encontrar;

        // --------------Um forma de inserir registros

        // $bunises1 = bunises::create([ // inserir no banco de dados; // retorna o model do resgitro para essa varivel;

        //        'name' => 'Vinicius'

        // ]); // tenoh dicionar o protected no model , para inserir um registro no banco de dados;

        // ------------------------------------------------


        // --------------outra forma de update

        // $buni= bunises::find(10)->update([ // outra forma de fazer o update;
        //       'name' => 'Jorgee'
        // ]); // faz o update do registro 10 no banco de dados ;

        // ------------------------------------------------

        // --------------outra forma de update
        // $buni->name= 'Jono  Silva';
        // $buni->save(); // tenho que usar o save para registrar no banco de dados;  
        // ------------------------------------------------

        // --------------outra forma de update

        // $input=[ // pode inserir outros campos no array para salvar no banco;
        //     'name' =>  'Ola Mundo'
        // ];

        // $buni=bunises::find(10);
        // $buni->fill($input); // estou dizendo a eloquente que é para preencer todos os campos do model bunises com esse input(campos);
        // $buni->save();

         // --------------outra forma de update


        // Crud - create create()
        //read - find(), get();
        //update- save();

        //Delete - delete();

       /// $buni=bunises::find(9); // pego o model 10 - registro 10 do banco;
        $buni=bunises::where('name' ,'LIKE',  '%Vinicius%')->get(); // pesquise a palavra jhonh em qualquer posição ;
        ///dd($buni->toSql()); // exibir o sql;
        dd($buni->toArray()); // exibir o arry diretamnete;
       // $buni->delete();









       
    }
}
