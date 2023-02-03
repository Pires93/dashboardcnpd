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
        Schema::create('transferenciainternacionais', function (Blueprint $table) {
            $table->id();
            $table->integer('idForm')->nullable();
            $table->string('entidades')->nullable();
            $table->string('pais')->nullable();
            $table->string('dados_transferidos')->nullable();
            $table->string('fundamento')->nullable();
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
        Schema::dropIfExists('transferenciainternacionais');
    }
};
