<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unidade');
            $table->string('plano');
            $table->string('inicio');
            $table->string('termino');
            $table->string('valorParcela');
            $table->string('desconto');
            $table->string('total');
            $table->string('diaPagamento')->nullable();
            $table->string('secretaria');

            // Vincula o rg do aluno
            $table->string('rg');
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
        Schema::dropIfExists('contratos');
    }
}
