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
            $table->text('dados_transferidos')->nullable();
            $table->text('fundamento')->nullable();
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
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
