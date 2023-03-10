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
        Schema::create('finalidadetratamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('idForm')->nullable();
            $table->json('categorias_finalidade')->nullable();
            $table->json('finalidades')->nullable();
            $table->string('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('finalidadetratamentos');
    }
};
