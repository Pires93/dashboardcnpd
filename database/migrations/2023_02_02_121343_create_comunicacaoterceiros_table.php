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
            $table->string('entidades_comunicadas')->nullable();
            $table->string('condicoes_comunicacao')->nullable();
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
        Schema::dropIfExists('comunicacaoterceiros');
    }
};
