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
        Schema::create('comunicacaoterceiros', function (Blueprint $table) {
            $table->id();
            $table->integer('idForm')->nullable();
            $table->text('entidades_comunicadas')->nullable();
            $table->text('condicoes_comunicacao')->nullable();
            $table->string('dados_transferidos')->nullable();
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
            $table->string('tipoform')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunicacaoterceiros');
    }
};
