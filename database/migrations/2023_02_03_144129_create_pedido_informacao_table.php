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
            $table->string('num_p')->nullable();
            $table->string('nome')->nullable();
            $table->string('morada')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable(); 
            $table->text('assunto')->nullable();
            $table->text('duvida')->nullable();  
            $table->text('resposta')->nullable();
            $table->string('data_r')->nullable();
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
        Schema::dropIfExists('pedido_informacao');
    }
};
