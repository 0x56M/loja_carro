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
    { //php artisan migrate:fresh vai entrar em todos os arquivos migrations e vai dropar todas as tabelas e depois cria novamente
        Schema::create('pessoa', function (Blueprint $table) {
            $table->id(); //o campo id sempre vai ser int, autoincremento e primary key
            $table->string("nome");
            $table->string("cpf", "11");
            $table->string("telefone", "11");
            $table->string("email")->nullable();
            $table->string("sexo", "1")->nullable();
            $table->date("dataNasc");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa');
    }
};
