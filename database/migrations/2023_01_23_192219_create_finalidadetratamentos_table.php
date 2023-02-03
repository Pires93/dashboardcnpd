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
            $table->string('categorias_finalidade')->nullable();
            $table->string('finalidades')->nullable();
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
        Schema::dropIfExists('finalidadetratamentos');
    }
};
