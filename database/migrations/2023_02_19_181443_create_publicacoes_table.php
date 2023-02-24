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
        Schema::create('publicacoes', function (Blueprint $table) {
            $table->id();
            $table->string('num_doc')->nullable();
            $table->string('titulo')->nullable();
            $table->string('imagem')->nullable();
            $table->string('anexo')->nullable();
            $table->string('link')->nullable(); 
            $table->text('descricao')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('publicacoes');
    }
};
