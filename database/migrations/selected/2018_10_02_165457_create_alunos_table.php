<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('numero')->nullable();
            $table->string('nome')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();

            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('nascimento')->nullable();

            $table->string('situacao')->default(0)->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('profissao')->nullable();

            // Endereço do aluno
            $table->string('endereco')->nullable();
            $table->string('numeroEndereco')->nullable();
            $table->string('complemento')->nullable()->nullable();
            $table->string('bairro')->nullable();

            $table->string('cidade')->nullable();
            $table->string('cep')->nullable();
            $table->string('estado')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
