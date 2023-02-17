<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queixas', function (Blueprint $table) {
            $table->id();
            $table->string('num_q')->nullable();
            $table->string('nome_queixoso')->nullable();
            $table->string('morada_queixoso')->nullable();
            $table->string('telefone_queixoso')->nullable();
            $table->string('email_queixoso')->nullable();
            $table->string('entidade_queixa')->nullable();
            $table->string('morada_queixa')->nullable();
            $table->string('telefone_queixa')->nullable();
            $table->string('email_queixa')->nullable();
            $table->string('assunto_queixa')->nullable();
            $table->string('descricao_queixa')->nullable();
            $table->string('anexo_queixa')->nullable();
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
        Schema::dropIfExists('queixas');
    }
};
