<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post', function (Blueprint $table) { // criando a tablea post
            $table->id();
            // da erro de verssão quandp executo oss outros comandos
            $table->foreignId('user_id')
            ->constraint();
            // ->onDelete('CASCADE')
            // ->onUpdate('CASCADE');

            // constrainde // server para so ter id de usuarios que existem nessa tabela;
            // QUANDO DELETEAR O USUARIO VAI DELETAR TODOS OS POST 
            // QUAUNDO ALTERAR O ID DO USER  // VAI ALTER NO POST TAMBÉM
 
            $table->text('body')->nullable();
            $table->longText('tags')->nullable();
            $table->string('Author')->nullable();
            $table->string('title')->nullable(); // para o campo não ser obrigatorio // usa o nulllabe
            $table->timestamps();// é a data de criação e data e atualização
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
