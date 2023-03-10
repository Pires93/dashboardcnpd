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
        Schema::create('dados_contido_em_cada_registros', function (Blueprint $table) {
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
            $table->integer('idForm')->nullable();
            $table->string('categorias')->nullable();
            $table->string('finalidades')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_contido_em_cada_registros');
    }
};
