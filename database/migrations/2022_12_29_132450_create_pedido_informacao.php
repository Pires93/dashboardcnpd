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
        Schema::create('pedido_informacao', function (Blueprint $table) {
            $table->id();
            $table->string('num_p');
            $table->string('nome');
            $table->string('morada');
            $table->string('telefone');
            $table->string('email');
            $table->string('assunto');
            $table->string('duvida');
            $table->string('data_p');
            $table->string('resposta');
            $table->string('data_r');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_informacao');
    }
};
