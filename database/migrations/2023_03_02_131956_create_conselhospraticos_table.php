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
        Schema::create('conselhospraticos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable(); 
            $table->string('descricao')->nullable();
            $table->string('imagem')->nullable();
            $table->string('anexo')->nullable(); 
            $table->string('estado')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conselhospraticos');
    }
};
